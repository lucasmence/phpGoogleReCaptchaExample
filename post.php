<?php

    include_once 'recaptcha.php';

    $msg = null;
 
    if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {

        $secretKey = 'your-secretkey-here';

        $recaptcha = new ReCaptcha($secretKey);
        
        $valid = $recaptcha->verify($_POST['g-recaptcha-response']);

        if ($valid) {
            $msg = '1';
        } else {
            $msg = '2';
        }

    } else {
        $msg = '3';
    }

    if (!empty($msg)) {
        $msg = '?msg=' . $msg;
    }

    header('Location: index.php' . $msg);
