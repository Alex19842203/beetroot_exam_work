<?php

    require_once 'DBAccess.php';

class Auth
{

    public function emailUnique($link, $email){ // проверяет адрес эл. почты на уникальность (существует или нет) в БД
            if (isset($email) && $email != "") {
                $query = mysqli_query($link, "SELECT `email` FROM `users` WHERE `email` = '".$email."'");
                $result = mysqli_fetch_array($query);
                if ($result['email'] == $email) {
                    $status = true;
                } else {
                    $status = false;
                }
            } else {
                echo "Required parameter is not received";
            }
            return $status;
    }



    public function passCheck(){

    }

    public function emailValidation($email){
        if ($t = preg_match("/^[a-zA-Z0-9_\-.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-.]+$/", $email)) {
            return $t;
        } else {
            return $t;
        }
    }

    public function passValidation(){

    }
}



// $e = new Auth();
// print_r($e->emailUnique($__conn, ""));

?>


