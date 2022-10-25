
    <?php
    print "<h1 style=text-align:center> FEEDBACK-2 ENTORNO SERVIDOR </h1>";
print " <h2 style=background:gold;color:blue;padding:10px;border-radius:20px;text-align:center;> Dada la siguiente frase: “PHP es el lenguaje de programación de entorno
servidor” realizar un programa que resuelva los siguientes apartados:</h2>";

print "<p style=background:lightgray;margin-left:20px><strong>a) Indicar la posición de la palabra “programación”.</strong></p>";
$frase = "<p style=margin-left:20px>PHP es el lenguaje de programacion de entorno servidor</p>";
$palabra = explode(" ", $frase);
$num = -1;
print $frase;
for ($i =0; $i < sizeof($palabra); $i++) {
       if ($palabra[$i] == "programacion") {
        echo "<p style=margin-left:20px> palabra encontrada en posicion $i</p> " ;
    }
}


print "<p style=background:lightgray;margin-left:20px><strong>b) Reemplazar “entorno servidor” por “DES” y presentar la nueva frase
en la página web.</strong></p>";
$cadena = "<p style=margin-left:20px>PHP es el lenguaje de programación de entorno
servidor</p>";
echo $cadena;

$resultado = str_replace("entorno", "DES", $cadena);
echo "<p style=margin-left:20px>La cadena resultante es: $resultado </p>";

print "<p style=background:lightgray;margin-left:20px><strong>c) Indicar si existe (SI EXISTE) o no existe (NO EXISTE) la palabra “PHP”
en la frase anterior.</strong></p>";
$frase = "<p style=margin-left:20px> PHP es el lenguaje de programacion de entorno servidor</p>";
$palabra = explode(" ", $frase);
print $frase;
for ($i = 0; $i < sizeof($palabra); $i++) {
    if ($palabra[$i] == "PHP") {
        echo " <p style=margin-left:20px>(SI EXISTE)</p>";
    }
}


print "<p style=background:lightgray;margin-left:20px><strong>c) Indicar cuantas letras “a” hay en la frase inicial del enunciado.</strong></p>";
$frase="PHP es el lenguaje de programación de entorno
servidor";
$palabra="a";
$contador=0;
for($a=0; $a<strlen($frase); $a++){

    if($frase[$a]=="a"){
        $contador++;
    }
   
}
echo "<p style=margin-left:20px>Hay $contador letras a en la frase en las posiciones </p>" ;


print "<h2 style=margin-top:150px;background:black;color:white>Tabajo de: Victor Villalon Truillo<h2>"
?>
