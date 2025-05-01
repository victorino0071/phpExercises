<?php

$cookieName = 'Lembrar_Usuario';
$cookieValue = 'victor emmanuel';
$cookieTime = time() + (60*5);
$cookiePath = "/79";


$cookieResult = setcookie($cookieName, $cookieValue, $cookieTime, $cookiePath);
