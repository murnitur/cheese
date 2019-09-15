<?php
  class Admin_Model {

    private $db;

    public function __construct() {

      $this->db = new Database;
    }

    public function hasUsers(){
      $this->db->query("SELECT * FROM admin");
      $this->db->resultSet();
      if($this->db->rowCount() > 0) {
        return false;
      } else{
        return true;
      }
    }
  }
