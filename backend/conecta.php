<?php

//===========conecta PHP =============
$conn = new mysqli("localhost","aquiseuusuario","aquisenhaaqui","nomedobanco"); //banco localhost
$fuso = new DateTimeZone('America/Sao_Paulo');
$data = new DateTime();
$data->setTimezone($fuso);
$dataatual =  $data->format('d-m-Y H:i:s');