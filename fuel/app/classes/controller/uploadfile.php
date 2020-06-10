<?php

use Fuel\Core\Input;

use \Model\UploadFile;

class Controller_UploadFile extends Controller_Template {

      public $template = 'admin/layout/layout'; 

      public function action_index($page = 1) { 
         DB::insert('users')->columns(array(
            'name', 'email', 'password'
        ))->values(array(
            'John Random', 'john@example.com', 's0_s3cr3t'
        ))->execute();
         $errors = [];
         $view = View::forge('admin/upload/index');          
         // set the template variables
         $this->template->title = "Upload file"; 
         $this->template->content = $view; 
         if (Input::method() == 'POST'){
           // Custom configuration for this upload
            $config = array(
               'path' => DOCROOT.'assets/img/upload/image',
               'randomize' => true,
               'ext_whitelist' => array('img', 'jpg', 'jpeg', 'gif', 'png'),
            );

            // process the uploaded files in $_FILES
            Upload::process($config);

            // if there are any valid files
            if (Upload::is_valid())
            {
               // save them according to the config
               Upload::save();
               $uploadFile = UploadFile::forge();
               $uploadFile->image = Upload::get_files()[0]['saved_as'];
               // call a model method to update the database              
               if ($uploadFile->save())
               {
                  Session::set_flash('message', 'Lưu ảnh thành công');
                  Response::redirect('/admin/upload');
               }
            } elseif (!empty(Upload::get_errors())) 
            {
               // $file is an array with all file information,
               $message = Upload::get_errors();
               if(isset($message[0])){
                  foreach ($message[0]['errors'] as $msg) {
                     if(isset($msg['message'])){
                        $errors[] = $msg['message'];
                     }                    
                  }
               }
            }
         }
         $config = array(
            'pagination_url' => 'http://fuel-test.local/admin/upload',
            'total_items'    => UploadFile::count(),
            'per_page'       => 10,
            'uri_segment'    => $page,
        );
        
        $pagination = Pagination::forge('mypagination', $config);
        
        $data = UploadFile::query()
                     ->rows_offset($pagination->offset)
                     ->rows_limit($pagination->per_page)
                     ->get();
         $view->set('upload', $data); 
         $view->set('errors', $errors, false);
         $this->template->breadcrumb = MyBreadcrumb::create();  
         $this->template->title = "Upload file page"; 
         $this->template->content = $view;
 
      }

      public function action_edit($id = null) { 

         if(!($uploadFile = UploadFile::find($id))) { 
            Session::set_flash('message', 'Id ảnh tìm không thấy');
            Response::redirect('/admin/upload');
         }
         $errors = [];             
         // set the template variables
         if (Input::method() == 'POST'){
           // Custom configuration for this upload

            $config = array(
               'path' => Config::get('path_upload_image'),
               'randomize' => true,
               'ext_whitelist' => array('img', 'jpg', 'jpeg', 'gif', 'png'),
            );

            // process the uploaded files in $_FILES
            Upload::process($config);

            // if there are any valid files
            if (Upload::is_valid())
            {
               // save them according to the config
               Upload::save();
               $pathFileOld = $uploadFile->image;
               $uploadFile->image = Upload::get_files()[0]['saved_as'];
               // call a model method to update the database              
               if ($uploadFile->save())
               {
                  $path = Config::get('path_upload_image').'/'.$pathFileOld;
                  File::delete($path);
                  Session::set_flash('message', 'Cập nhật hình ảnh thành công');
                  Response::redirect('/admin/upload');
               }
            } elseif (!empty(Upload::get_errors())) 
            {
               // $file is an array with all file information,
               $message = Upload::get_errors();
               if(isset($message[0])){
                  foreach ($message[0]['errors'] as $msg) {
                     if(isset($msg['message'])){
                        $errors[] = $msg['message'];
                     }                    
                  }
               }
            }
         }
         $view = View::forge('admin/upload/edit'); 
         $view->set('file', $uploadFile); 
         $view->set('errors', $errors, false);
         $this->template->breadcrumb = MyBreadcrumb::create();  
         $this->template->title = "Edit file page"; 
         $this->template->content = $view;
 
      }

      public function action_delete($id = null) { 

         if(!($uploadFile = UploadFile::find($id))) { 
            Session::set_flash('message', 'Id ảnh tìm không thấy');
            Response::redirect('/admin/upload');
         }
         $errors = [];             
         // set the template variables
         if (Input::method() == 'POST'){
            // call a model method to update the database              
            if ($uploadFile->delete())
            {
               $path = Config::get('path_upload_image').'/'.$uploadFile->image;
               File::delete($path);
               Session::set_flash('message', 'Xóa hình ảnh thành công');
               Response::redirect('/admin/upload');
            }else{
               $errors[] = "Xóa hình ảnh thất bại.";
            }
         }
         $view = View::forge('admin/upload/delete'); 
         $view->set('file', $uploadFile); 
         $view->set('errors', $errors, false);
         $this->template->breadcrumb = MyBreadcrumb::create();  
         $this->template->title = "Delete file page"; 
         $this->template->content = $view;
 
      }
   } 