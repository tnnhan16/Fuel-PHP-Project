<?php
namespace Model;
use Orm\Model;

class UploadFile extends Model { 
      protected static $_connection = 'development'; 
      protected static $_table_name = 'upload_file'; 
      protected static $_primary_key = array('id'); 
      
      protected static $_properties = array ( 
         'id',  
         'image',
      );  
      protected static $_observers = array('Orm\\Observer_Validation' => array ( 
         'events' => array('before_save') 
      )); 
   }