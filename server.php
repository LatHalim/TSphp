<?php

/**
 * @param массив $_POST
 * @return записывает данные в переменные
 */

function isValid($value)
{
  return isset($value) && $value !== '';
}

class UserData
{
  private $lastname;
  private $phone;

  public function __construct($lastname,  $phone)
  {
    $this->lastname = $lastname;
    $this->phone    = $phone;
  }

  public function isDataOk()
  {

    return isValid($this->lastname) && isValid($this->phone);
  }
  public function getLastname()
  {
    return $this->lastname;
  }
  /* public function getPhone()
  {
   return $this->phone =  preg_replace('#[^0-9]#', '', $this->phone);

    // $s = '89278564234';
    // $new_s = preg_replace('/^8/', '7', $s);
  } */
  public function getPhone()
  {
    $this->phone = trim($this->phone);

    $validPhone = preg_replace(
      array(
        '/[\+]?([7|8])[-|\s]?\([-|\s]?(\d{3})[-|\s]?\)[-|\s]?(\d{3})[-|\s]?(\d{2})[-|\s]?(\d{2})/'
      ),
      array(
        '+7$2$3$4$5'
      ),
      $this->phone
    );
    return $validPhone;
  }
}

$userData = new UserData($_POST['lastname'], $_POST['phone']);

if ($userData->isDataOk()) {
  header('location: /thanks.php?name=' . $userData->getLastname() . $userData->getPhone());
} else {
  header('location: /');
}
