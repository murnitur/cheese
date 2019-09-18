<?php
  class Admin_Model {

    private $db;

    public function __construct() {

      $this->db = new Database;
    }

    public function getUserByEmail($email) {
      $this->db->query("SELECT * FROM admin WHERE email=:email");
      $this->db->bind(':email',$email);
      $row = $this->db->single();
      if($this->db->rowCount() > 0){
        return $row;
      }else{
        return false;
      }
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

    public function register($data) {
      $this->db->query("INSERT INTO admin (name,email,password,role) VALUES (:name,:email,:password,:role);");
      // Bind VALUES
      $this->db->bind(':name',$data['username']);
      $this->db->bind(':email',$data['email']);
      $this->db->bind(':password',$data['pwd']);
      $this->db->bind(':role',"Admin");
      //Run Query
      if($this->db->execute()){
        return true;
      } else{
        return false;
      }
    }

    public function login($email, $password) {
      $this->db->query("SELECT * FROM admin WHERE email=:email");
      $this->db->bind(':email',$email);
      $row = $this->db->single();
      $hashedPwd = $row->password;
      if(ch_dehash($password, $hashedPwd)){
        return $row;
      }else{
        return false;
      }
    }

  }
