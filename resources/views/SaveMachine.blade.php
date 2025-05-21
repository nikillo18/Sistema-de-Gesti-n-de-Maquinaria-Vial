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
    <label for="serial_number">Número de Serie</label>
    <input type="text" name="serial_number" id="serial_number">
    <br>
 <label for="type_id">Tipo de Maquina</label>
<select name="type_id" id="type_id">
    @foreach($types as $type)
        <option value="{{ $type->id }}">{{ $type->name }}</option>
    @endforeach
</select>

    <br>

    <label for="model">Modelo de la máquina</label>
    <input type="text" name="model" id="model">
    <br>

    <button type="submit">Guardar</button>
</form>

</body>
</html>
