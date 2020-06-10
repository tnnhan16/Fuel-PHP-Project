<?php
namespace Model;
use Orm\Model;
class Users extends Model { 
      protected static $_connection = 'development'; 
      protected static $_table_name = 'users'; 
      protected static $_primary_key = array('id'); 
      
      protected static $_properties = array ( 
         'id',  
         'username',  
         'password',
         'email',  
      );  
      protected static $_observers = array('Orm\\Observer_Validation' => array ( 
         'events' => array('before_save') 
      )); 
   }