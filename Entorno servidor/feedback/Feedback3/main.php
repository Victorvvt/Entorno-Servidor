<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback-3</title>
    <link rel="stylesheet" href="style2.css">

</head>

<body>
<div class="main">
    <form action="procesar.php" method="post">

        <div class="title">
            <h1>FORMULARIO</h1>
        </div>
        <div class="grid-container">

            <div class="name"><label for="name">Name:</label></div>
            
            <div class="controls"><input type="text" name="name" required></div>

            <div class="name"><label for="apellido">Apellido:</label></div>

            <div class="controls"><input type="text" name="apellido" required></div>

            <div class="name"><label for="telefono">Telefono:</label></div>

            <div class="controls"><input type="tel" name="telefono" required></div>

            <div class="name"><label for="fecha">Fecha:</label></div>


            <div class="controls"><input type="date" name="fecha" required></div>

            <div class="name"> <label for="email">Mail:</label></div>
            <div class="controls"> <input type="mail" name="mail" required></div>

            <div class="name"><label for="direccion"> Direccion:</label></div>

            <div class="controls"><input class="direccion" type="text" name="direccion" required></div>
            
                
                <div class="controls">
                    <button type="submit" name="enviar" formtarget="_blank">Enviar</button>
                    <button type="reset" name="reset">Reset </div></button>

         
        </div>



    </form>
</div>




</body>

</html>