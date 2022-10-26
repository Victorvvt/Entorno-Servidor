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
            
            <div class="controls"><input type="text" name="name" required pattern="[a-zA-Z]{0,15}" maxlength="15" placeholder="Name">  </div>
              
            <div class="name"><label for="apellido">L.Name:</label></div>

            <div class="controls"><input type="text" name="lastName" required pattern="[a-zA-Z]{3,10}" maxlength="30" placeholder="Last Name"></div>

            <div class="name"><label for="telefono">Telephon:</label></div>

            <div class="controls"><input type="tel" name="telephon"  pattern="[0-9]{}" placeholder="Number Phone"></div>

            <div class="name"><label for="fecha">Date:</label></div>

            <div class="controls"><input type="date" name="date" required  pattern="[0-31{2}]+[0-12]{2}+/a[0-2{1}" ></div>

            <div class="name"> <label for="email">Mail:</label></div>

            <div class="controls"> <input type="mail" name="mail" required  pattern="/^*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,9}$/" maxlength="50" ></div>

            <div class="name"><label for="direccion"> Address:</label></div>

            <div class="controls"><textarea class="address" type="textarea" name="address" required  pattern="/^[40]$/" maxlength="40"></textarea></div>
            
                
                <div class="controls">
                    <button type="submit" name="enviar" formtarget="_blank">Enviar</button>
                    <button type="reset" name="reset">Reset </div></button>

                    
        </div>



    </form>
</div>




</body>

</html>