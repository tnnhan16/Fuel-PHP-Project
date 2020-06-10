<?php

use Fuel\Core\Request;
use \Model\Users;

class Controller_Users extends Controller_Template {

      public $template = 'admin/layout/layout'; 

      public function action_index( $page = 1) { 
         
         $active = Request::active();
         $url_current = $active->route->name;
         $view = View::forge('admin/users/index');          
         $config = array(
            'pagination_url' => 'http://fuel-test.local/admin/users',
            'total_items'    => Users::count(),
            'per_page'       => 10,
            'uri_segment'    => $page,
        );
        $pagination = Pagination::forge('mypagination', $config);
        
        $data = Users::query()
                     ->rows_offset($pagination->offset)
                     ->rows_limit($pagination->per_page)
                     ->get();
         $view->set('users', $data);  
         // set the template variables
         $this->template->breadcrumb = MyBreadcrumb::create();
         $this->template->title = "users index page"; 
         $this->template->content = $view; 
          
      }
      
      public function action_register() { 

         $errors = [];
         $users = Users::forge();
         if (Input::param() != array()) { 
            $users->username = Input::param('username'); 
            $users->password = Input::param('password'); 
            $users->email = Input::param('email');  

            $val = Validation::forge(); 
            $val->add_callable('MyValidation');
            $val->add('username', 'Username')->add_rule('required')->add_rule('min_length', 3); 
            $val->add('password', 'Password')->add_rule('required')->add_rule('min_length', 6);
            $val->add_field('password_confirm', 'Password confirm', 'required|trim|match_field[password]'); 
            $val->add('email', 'Email')->add_rule('required')->add_rule('valid_email')->add_rule('unique_email', $users);        
           
            if($val->run()){
               try { 
                  Auth::create_user($users->username,$users->password,$users->email,1);
                  Response::redirect('/login'); 
               } catch (Orm\ValidationFailed $e) { 
                  $errors = $e->getMessage(); 
               }
            }else{ 
               $errors = $val->error();
            }      
         }
         $this->template =  View::forge('admin/layout/layout-login');
         $view = View::forge('admin/users/register'); 
         $view->set('errors', $errors, false);
         $view->set('content', $users, false);     
         $this->template->title = "users register page";  
         $this->template->content = $view; 
      }

      public function action_add() { 

         $errors = [];
         $users = Users::forge();
         if (Input::param() != array()) { 
            $users->username = Input::param('username'); 
            $users->password = Input::param('password'); 
            $users->email = Input::param('email');  

            $val = Validation::forge(); 
            $val->add_callable('MyValidation');
            $val->add('username', 'Username')->add_rule('required')->add_rule('min_length', 3)->add_rule('unique_username', $users); 
            $val->add('password', 'Password')->add_rule('required')->add_rule('min_length', 6);
            $val->add_field('password_confirm', 'Password confirm', 'required|trim|match_field[password]'); 
            $val->add('email', 'Email')->add_rule('required')->add_rule('valid_email')->add_rule('unique_email', $users);        
           
            if($val->run()){
               try { 
                  Auth::create_user($users->username,$users->password,$users->email,1);
                  Response::redirect('/admin/user'); 
               } catch (Orm\ValidationFailed $e) { 
                  $errors = $e->getMessage(); 
               }
            }else{ 
               $errors = $val->error();
            }      
         }
         $view = View::forge('admin/users/add'); 
         $view->set('errors', $errors, false);
         $view->set('content', $users, false); 
         $this->template->breadcrumb = MyBreadcrumb::create();    
         $this->template->title = "users add page";  
         $this->template->content = $view; 
      }
      
      public function action_edit($id = false) 
      {
         if(!($users = Users::find($id))) { 
            throw new HttpNotFoundException(); 
         }
         $errors = [];
         if (Input::param() != array()) { 
            $users->password = Input::param('password'); 
            $users->email = Input::param('email');
            $old_password = Input::param('old_password'); 

            $val = Validation::forge(); 
            $val->add_callable('MyValidation'); 
            $val->add('old_password', 'Old password')->add_rule('required');
            $val->add('password', 'Password')->add_rule('required')->add_rule('min_length', 6);
            $val->add_field('password_confirm', 'Password confirm', 'required|trim|match_field[password]'); 
            $val->add('email', 'Email')->add_rule('required')->add_rule('valid_email')->add_rule('unique_email', $users);        
            if($val->run()){
               try { 
                  Auth::update_user(array('email' => $users->email,'password' => $users->password,'old_password' => $old_password), $users->username);
                  Response::redirect('/admin/user'); 
               } catch (Orm\ValidationFailed $e) { 
                  $errors = $e->getMessage(); 
               }
            }else{ 
               $errors = $val->error();
            }      
         }
         $view = View::forge('admin/users/edit'); 
         $view->set('errors', $errors, false);
         $view->set('user', $users, false); 
         $this->template->breadcrumb = MyBreadcrumb::create();    
         $this->template->title = "users edit page";  
         $this->template->content = $view;
      }

      public function action_delete($id = null)
      { 
         if ( ! ($users = Users::find($id))) { 
            throw new HttpNotFoundException(); 
      
         }  
         $view = View::forge('admin/users/delete',array('user' => $users)); 
         if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
            Auth::delete_user($users->username); 
            Response::redirect('admin/user'); 
         }          
         $this->template->title = "Users delete page"; 
         $this->template->content = $view;
         $this->template->breadcrumb = MyBreadcrumb::create();
      } 
   } 