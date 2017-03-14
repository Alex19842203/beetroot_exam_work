


<?php
        function emailValidation($email)

        {
            if ($t = preg_match("/^[a-zA-Z0-9_\-.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-.]+$/", $email)) {
                return $t;
            } else {
                return $t;
            }
        }

    $e = "slavko.alex@gmail.com";
    print_r(emailValidation($e));



?>



