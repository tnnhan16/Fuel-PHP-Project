<?php

use Fuel\Core\Input;

class Controller_Login extends Controller_Template {

      public $template = 'admin/layout/layout-login'; 

      public function action_login() { 
         
         $view = View::forge('admin/home/login');          
         // set the template variables
         $this->template->title = "Login"; 
         $this->template->content = $view; 
         // login if we're not logged-in
         if (Auth::check())
         {
            Response::redirect('/admin');
         }
         if (Input::method() == 'POST'){
            $val = Validation::forge(); 
            $val->add('username', 'Username')->add_rule('required'); 
            $val->add('password', 'Password')->add_rule('required');
            if (Auth::login(Input::param('username'), Input::param('password')))
            {
               // the user is succesfully logged in
               Response::redirect('/admin');
            }
         }
 
      }

      public function action_logout() { 

            // login if we're not logged-in
            if (Auth::check())
            {
               Auth::logout();
               Response::redirect('/login');
            }
    
         }

   } 