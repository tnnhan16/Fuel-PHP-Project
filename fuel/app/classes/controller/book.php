<?php

use Fuel\Core\Request;
use \Model\Book;

class Controller_Book extends Controller_Template {

      public $template = 'admin/layout/layout'; 

      public function action_index( $page = 1) { 
         
         $view = View::forge('admin/book/index');          
         $config = array(
            'pagination_url' => 'http://fuel-test.local/admin/book',
            'total_items'    => Book::count(),
            'per_page'       => 10,
            'uri_segment'    => $page,
        );
        
        $pagination = Pagination::forge('mypagination', $config);
        
        $data = Book::query()
                     ->rows_offset($pagination->offset)
                     ->rows_limit($pagination->per_page)
                     ->get();
         $view->set('books', $data);  
         // set the template variables
         $this->template->breadcrumb = MyBreadcrumb::create();
         $this->template->title = "Book index page"; 
         $this->template->content = $view;  
      }
      
      public function action_add() { 

         $errors = [];
         $book = Book::forge();
         if (Input::param() != array()) { 
            $val = Validation::forge(); 
            $val->add('title', 'Title book')->add_rule('required')->add_rule('min_length', 5); 
            $val->add('author', 'Author book')->add_rule('required'); 
            $val->add('price', 'Price book')->add_rule('required')->add_rule('numeric_min', 1000) ->add_rule('numeric_max', 999999);            
            $book->title = Input::param('title'); 
            $book->author = Input::param('author'); 
            $book->price = Input::param('price');  
            if($val->run()){
               try { 
                  $book->save();  
                  Response::redirect('admin/book'); 
               } catch (Orm\ValidationFailed $e) { 
                  $errors = $e->getMessage(); 
               }
            }else{ 
               $errors = $val->error();
            }      
         }
         // create a new fieldset and add book model 
         $fieldset = Fieldset::forge('book')->add_model('Model\Book'); 
         $fieldset->populate($book);          
         // get form from fieldset 
         $form = $fieldset->form();  
         // add submit button to the form
         $form->add('Submit', '', array('type' => 'submit', 'value' => 'Submit'));   
         // build the form  and set the current page as action  
         $formHtml = $fieldset->build(Uri::create('admin/book/add'));  
         $view = View::forge('admin/book/add'); 
         $view->set('form', $formHtml, false);
         $view->set('errors', $errors, false);
         $this->template->breadcrumb = MyBreadcrumb::create();   
         $this->template->title = "Book add page";  
         $this->template->content = $view; 
      }
      
      public function action_edit($id = false) 
      {
         if(!($book = Book::find($id))) { 
            throw new HttpNotFoundException(); 
         }
         $errors = []; 
         if (Input::param() != array()) {
            $val = Validation::forge(); 
            $val->add('title', 'Title book')->add_rule('required')->add_rule('min_length', 5); 
            $val->add('author', 'Author book')->add_rule('required'); 
            $val->add('price', 'Price book')->add_rule('required')->add_rule('numeric_min', 1000) ->add_rule('numeric_max', 999999);
            $book->title = Input::param('title'); 
            $book->author = Input::param('author'); 
            $book->price = Input::param('price');
            if($val->run()){
               try {  
                  $book->save(); 
                  Response::redirect('admin/book'); 
               } catch (Orm\ValidationFailed $e) { 
                  $errors =  $e->getMessage(); 
               }
            }else{
               $errors = $val->error();
            }
         }
         // create a new fieldset and add book model 
         $fieldset = Fieldset::forge('book')->add_model('Model\Book'); 
         $fieldset->populate($book);          
         // get form from fieldset 
         $form = $fieldset->form();  
         // add submit button to the form
         $form->add('Submit', '', array('type' => 'submit', 'value' => 'Submit'));   
         // build the form  and set the current page as action  
         $formHtml = $fieldset->build(Uri::create('admin/book/edit/' . $id));  
         $view = View::forge('admin/book/add'); 
         $view->set('form', $formHtml, false);
         $view->set('errors', $errors, false);
         $this->template->breadcrumb = MyBreadcrumb::create();  
         $this->template->title = "Book edit page"; 
         $this->template->content = $view; 
      }

      public function action_delete($id = null)
      { 
         if ( ! ($book = Book::find($id))) { 
            throw new HttpNotFoundException(); 
      
         }  
         $view = View::forge('admin/book/delete',array('book' => $book)); 
         if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
            $book->delete(); 
            Response::redirect('admin/book'); 
         } 
         $this->template->breadcrumb = MyBreadcrumb::create();         
         $this->template->title = "Book delete page"; 
         $this->template->content = $view; 
      } 
   } 