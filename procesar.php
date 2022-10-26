<?php

//Get the name
$name = $_POST['name'];
if(preg_match("/^[a-zA-Z]{15}$/",$_POST['name'])){
 echo "EL NOMRBE NO CINCIDE CON EL FORMATO SOLICITADO";
 exit();
}else{
    echo "NOMBE: ". $name."</br>";
    
}
 
//Get the last name
$lastName = $_POST['lastName'];
if(preg_match("/^[a-zA-Z]{15}$/",$_POST['lastName'])){
    echo "EL APELLIDO NO CINCIDE CON EL FORMATO SOLICITADO";
    exit();
   }else{
       echo "APELLIDO: ". $lastName."</br>";
   }

//Get the telephon number
$telephon = $_POST['telephon'];
if(preg_match("/(\+34|0034|34)?[ -]*(8|9)[ -]*([0-9][ -]*){8}/",$_POST['telephon'])){
    echo "EL TELEFONO NO COINCICE CON EL PATORN SOLICITADO";
    exit();
}else{
    echo "TELEFONO: ".$telephon."</br>";
}

//get the date
$date = $_POST['date'];
if(preg_match("/^[0-31{2}]$/",$_POST['date'])){
    echo "LA FECHA NO COINCIDE CON EL PATRON SOLICITADO";
    
}else{
    echo "DATE: ".$date."</br>";
}
//get the email
$mail = $_POST['mail'];
if(preg_match("/^@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,9}$/",$_POST['mail'])){
    echo "EL MAIL NO COINCIDE CON EL PATRON SOLICITADO";
    exit();
}else{
    echo "EMAIL: ".$mail."</br>";
}

//get the address
$address = $_POST['address'];
if(preg_match("/^[40]$/",$_POST['address'])){
    echo "LA DIRECCION NO CINCIDE CON EL PATRON SOLICITADO";
    exit();
}else{
    echo "Address: ".$address."</br>";
}








