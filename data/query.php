<?php
   header('Content-type: application/json; charset=utf-8"');

   require_once './function/function_json.php';
   require_once './function/function_query.php';
   require_once './function/function_foreach.php';
   require_once '../config/modules/module_query_config.php';

   
   if ($Anti_switch){
      exit(http_response_code(503));
   }
   exit(query(getTypeForeach(array_keys($QueryType_array))));

   function query($tmp){

      global $QueryType_array;

      $json_arr = array("Version" => $QueryType_array[$tmp]);
    
      exit(formatJson($json_arr));
    
   }
?>