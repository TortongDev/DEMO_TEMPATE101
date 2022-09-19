<?php

$store_password = '1234';
$passwordHash = password_hash($store_password,  PASSWORD_BCRYPT,array(10));
echo $passwordHash;

$validPassword = password_verify(1234, $passwordHash);
if($validPassword){
    echo "true";
}else{
    echo "false";
}
?>