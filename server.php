<?php
/**
 * @param массив $_POST
 * @return записывает данные в переменные
 */
$postArray = $_POST;
 class UserData 
 {
    public $lastname;
    public $phone;

    public function checkData($postArray){
       if(isset($_POST) == ''){
          $lastname = $_POST['lastname'];
          $this->lastname = $newLastneme;
          $phone = $_POST['phone'];
          $this->phone = $newPhone;
       }
    }
 }
 $usData = new UserData();
 $usData->checkData($postArray);
 var_dump($usData);