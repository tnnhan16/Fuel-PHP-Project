<?php

use Fuel\Core\Input;
use \Model\Users;
use Fuel\Core\Format;

class Controller_Export extends Controller_Template {

      public $template = 'admin/layout/layout'; 

      public function action_index( $page = 1) { 
         
         $active = Request::active();
         $url_current = $active->route->name;
         $view = View::forge('admin/export/index');          
         $config = array(
            'pagination_url' => 'http://fuel-test.local/admin/users',
            'total_items'    => Users::count(),
            'per_page'       => 10,
            'uri_segment'    => $page,
        );
        $pagination = Pagination::forge('mypagination', $config);
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(Input::param('action') == 'csv'){
               $this->csv();
               exit;
            }
            if(Input::param('action') == 'excel'){
               $this->excel();
               exit;
            }
            if(Input::param('action') == 'pdf'){
               $this->pdf();
               exit;
            }
        }
        $data = Users::query()
                     ->rows_offset($pagination->offset)
                     ->rows_limit($pagination->per_page)
                     ->get();
         $view->set('users', $data);  
         // set the template variables
         $this->template->breadcrumb = MyBreadcrumb::create();
         $this->template->title = "Export page"; 
         $this->template->content = $view; 
          
      }

      public function csv() {
         // Response
         $response = new Response();
         $users = Users::query()->get();
         $array = [];
         foreach($users as $key => $value){
            $array[] = array(
               'username' => $value->username,
               'email' => $value->email
            );
         }
         $filename = 'file_csv' . date('YmdHmmss') .'.csv';
         // content-type: csv
         $response->set_header('Content-Type', 'application/csv');
         // ファイル名をセット
         $response->set_header('Content-Disposition', 'attachment; filename="'.$filename.'"');
         // キャッシュをなしに
         $response->set_header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate');
         $response->set_header('Expires', date('Y-m-d HH:mm:ss'));
         $response->set_header('Pragma', 'no-cache');
         echo Format::forge($array)->to_csv();
         // Response
         return $response->send(true);
       }

      
       function excel(){

         $filename = 'excel_' . date('YmdHms') . '.xls';
         $object = new PHPExcel();
         $object->setActiveSheetIndex(0);
         $table_columns = array("username", "email");
         $column = 0;
         foreach($table_columns as $field)
         {
            $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
            $column++;
         }
         $users = Users::query()->get();
         $excel_row = 2;
         foreach($users as $row)
         {
            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->username);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->email);
            $excel_row++;
         }
         $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
         header('Content-Type: application/vnd.ms-excel');
         header('Content-Disposition: attachment;filename='. $filename);
         $object_writer->save('php://output');
      }

      function pdf(){

         $response = new Response();
         $view = View::forge('admin/export/pdf');
         $users = Users::query()->get();
         $html = $view->set('users', $users);  
         $filename = 'file_pdf_'. date('YmdHis').'.pdf';
         // create new PDF document
         $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
         // set document information
         $pdf->SetCreator(PDF_CREATOR);
         $pdf->SetAuthor('Our Code World');
         $pdf->SetTitle('Example Write Html');
         // set default header data
         // $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 006', PDF_HEADER_STRING);
         // set header and footer fonts
         $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
         $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
         // set default monospaced font
         $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
         // set margins
         $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
         $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
         $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
         // set auto page breaks
         $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
         // set image scale factor
         $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
         //set font
         $pdf->SetFont('cid0jp', '', 12);
         // add a page
         $pdf->AddPage();  
         $pdf->writeHTML($html, true, false, true, false, '');
         // reset pointer to the last page
         $pdf->lastPage();
         //Close and output PDF document
         echo $pdf->Output($filename, 'I');
         $response->set_header('Content-Type', 'application/pdf');
         // ファイル名をセット
         $response->set_header('Content-Disposition', 'attachment; filename="'.$filename.'"');
         // キャッシュをなしに
         $response->set_header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate');
         $response->set_header('Expires', date('Y-m-d H:i:s'));
         $response->set_header('Pragma', 'no-cache');
         return $response->send(true);
      }

   } 