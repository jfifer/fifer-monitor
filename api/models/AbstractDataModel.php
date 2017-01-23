<?php
require_once 'db/config.php';

abstract class AbstractDataModel {

   private $dbh_upenn = null;

   private $row_limit = 50;

   function __construct() {

   }

   public function get_row_limit() {
      return $this->row_limit;
   }
   
   function connect_upenn_db() {
      // Establish a connection to the database server.
      if($this->dbh_upenn == null) {
         $this->dbh_upenn = mysqli_connect(DB_SERVER_UPENN, DB_USER_UPENN, DB_PASS_UPENN, DB_NAME_UPENN, DB_PORT_UPENN);
         if (mysqli_connect_errno()) {
            $err_params = array();
            $err_params['sql_error'] = mysqli_connect_error($this->dbh_upenn);
            $err_params['db_host'] = DB_SERVER_UPENN;
            $err_params['db_name'] = DB_NAME_UPENN;
            return false;
         }
      }
      return true;
   }
   function get_dbh_upenn() {
      if($this->dbh_upenn == null) {
         $this->connect_upenn_db();
      }
      return $this->dbh_upenn;
   }
   
   function convert_to_array2($dataResource) {
      $newArray = array();
      $var_type = gettype($dataResource);
      if ($var_type == "object") {
         for ($i = 0; $i < mysqli_num_rows($dataResource); $i++) {
            $data = mysqli_fetch_assoc($dataResource);
            foreach ($data as $key => $value) {
               $newArray[$i][$key] = $value;
            }
         }
      }
      return $newArray;
   }
   
   function last_insert_id() {
        return $this->get_dbh_upenn()->insert_id;
    }
};