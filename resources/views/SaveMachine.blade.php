<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 <form action="/save-machine" method="POST">
    @csrf
    <label for="serial_name">Numero de Serie</label>
    <input type="text" name="serial_name" id="serial_name">
    <br>
    <label for="type">tipo de maquina</label>
    <input type="text" name="type" id="type">
    <br>
    <label for="model">Modelo de la maquina</label>
    <input type="text" name="model" id="model">
    <br>
    <button type="submit">Save</button>
</form>

</body>
</html>
