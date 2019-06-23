<?php


    class ReCaptcha {

        public function __construct($secretKey) {
            $this->secretKey = $secretKey;
        }

        public function verify($captchaResponse) {
            $valid = false;
    
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify'.
                                                '?secret='.$this->secretKey.'&response='.$captchaResponse);
    
            $responseData = json_decode($verifyResponse);
    
            $valid = ($responseData->success);
            
            return $valid;
        }

    }