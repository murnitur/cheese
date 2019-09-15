<?php
/**
 * Cheese
 * The MIT License (MIT)
 * Copyright (c) 2014 - 2019, British Columbia Institute of Technology
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:

 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.

 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NON INFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * , WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

/**
* Class Admin
* Do not delete this controller.
* It serves as the default administration panel for users of cheese.
* Follow these instructions:
* 1. Configure your database params in the config.php file
* 2. Head to the database directory and open the data.sql file to run the schema in your MYSQL database
* 3. Make sure you do not change any column from the schema (as cheese uses the default columns)
* Incase of name conflict rename your custom admin.
*/

class Admin extends Controller{

  /**
  * Username
  * @var string
  */
  private $username = "";

  /**
  * Firstname
  * @var string
  */
  private $firstname = "";

  /**
  * Lastname
  * @var string
  */
  private $lastname = "";

  /**
  * Email
  * @var string
  */
  private $email = "";

  /**
  * Password
  * @var mixed
  */
  private $password = "";

  public function __construct() {
    $this->adminModel = $this->model('Admin_Model');
  }

  /**
  * Index method
  * @return view
  */

  public function index(){
    $this->view('admin/index');
  }

  public function register(){
    if(!$this->adminModel->hasUsers()){
      redirect(CONTROLLER);
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

      $this->view('admin/register');
    }else {
      $data = [
        'username' => '',
        'email' => '',
        'pwd' => '',
        'r_pwd' => '',
        'pwd_err' => '',
        'r_pwd_err' => ''
      ];
      $this->view('admin/register',$data);
    }
  }
}
