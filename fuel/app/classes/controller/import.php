<?php

use Fuel\Core\Input;
use \Model\Users;
use Fuel\Core\Format;

class Controller_Export extends Controller_Template {

      public $template = 'admin/layout/layout'; 

      function action_importcsv(){

        // nếu submit form mà có dữ liệu post lên
        if(Input::method())
        {
            $config = array(
                'path' => Config::get('path_upload_csv'),
                'randomize' => true,
                'ext_whitelist' => array('csv'),
             );
 
             // process the uploaded files in $_FILES
             Upload::process($config);
 
             // if there are any valid files
             if (Upload::is_valid())
             {
                // save them according to the config
                Upload::save();
                //read data file csv
                $data = [];
                $file = $_FILES['importcsv']['tmp_name'];
                $handle = fopen($file, "r");
                $index = 0;
                $success = 0;
                $error = 0;
                while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
                {                      
                    if($index > 0){
                        if(!empty($filesop[0]) && !empty($filesop[1]) && !empty($filesop[2])){
                            $data[]  = [
                                "username"  => $filesop[0],                                
                                "password"  => $filesop[2],
                                "email"     => $filesop[1],
                                "group"    => $filesop[3],
                            ]; 
                            $success = $success + 1;
                        }else{
                            $error = $error + 1;
                        }                         
                    }
                    $index = $index + 1;
                }
                $query = DB::insert('users', array('username', 'password','email','group'));
                $this->userModel->insertSql($data);
                $message = '';
                if($success){
                    $message =  'Đã import  ' . $success . ' user thành công.';
                }
                if($error){
                    $message =  $message . ' <font color="red">Có  ' . $error . ' user import thất bại.</font> ';
                }                
                $this->session->set_flashdata('mess', $message);
                redirect('admin/user');
            }
            else
            {
                $data['error']  = $this->upload->display_errors();
            }             
        }	
        $data['temp_view'] = 'admin/user/importcsv';
        $this->load->view('admin/main', $data);
    }
}