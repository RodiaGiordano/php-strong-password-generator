<?php  
$last_input = isset($_GET['length']) ? (int)$_GET['length'] : '';


function generated_random_str($last_input){
    if($last_input <= 12){
        
        $alphanumeric_and_symbols = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_?*+&%!@>-:,/';
        
        
        $password_generated = '';
        
        for($i = 0; $i < $last_input; $i++){
            
            $random_character = substr($alphanumeric_and_symbols, mt_rand(0, strlen($alphanumeric_and_symbols)-1), 1);
            
            $password_generated .= $random_character;        
        }
        
        return $password_generated;
    } else{
        return 'La password non può essere più lunga di 12 caratteri';
    }
}

$password_generated = generated_random_str($last_input);


?>