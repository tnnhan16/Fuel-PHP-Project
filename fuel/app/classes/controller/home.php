<?php

class Controller_Home extends Controller_Template {

      public $template = 'admin/layout/layout'; 

      public function action_index() { 

         $view = View::forge('admin/home/index');          
         // set the template variables
         $this->template->title = "Home index page"; 
         $this->template->content = $view;  
      }

      public function action_login() { 

         $view = View::forge('admin/home/login');          
         // set the template variables
         $this->template->title = "Login"; 
         $this->template->content = $view;  
      }

   } 