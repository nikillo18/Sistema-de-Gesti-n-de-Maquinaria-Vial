<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/save-work" method="POST">
        @csrf
        <label for="address">Direccion</label>
    <input type="text" name='address' id='address'>
    <br>
    <label for="name">Nombre de la obra</label>
    <input type="text" name="name" id="name">
    <br>
    <label for="province_id">Elegir Provincia</label>
   <select name="province_id" id="province_id">
    <br>
      @foreach($provinces as $province)
        <option value="{{ $province->id }}">{{ $province->name }}</option>
    @endforeach
    </select>
    <br>
    <label for="start_date">Fecha de inicio de la obra</label>
    <input type="date" name= start_date id='start_date'>
    <br>
    <label for="end_date">Fecha de fin de la obra</label>
    <input type="date" name= "end_date" id="end_date">
       <br>
    <button type= 'submit'>Guardar</button>
</form>
   

</body>
</html>