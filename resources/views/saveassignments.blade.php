<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/save-assignment" method="POST">
        @csrf
        <label for="machine_id">Elegir la maquinaria</label>
        <select name="machine_id" id="machine_id">
                @foreach($machines as $machine)
        <option value="{{ $machine->id }}">{{ $machine->serial_number }}</option>
    @endforeach
        </select>
        <br>
        <label for="work_id">Elegir la obra</label>
        <select name="work_id" id="work_id">
             @foreach($works as $work)
        <option value="{{ $work->id }}">{{ $work->name }}</option>
    @endforeach
        </select>
        <br>
        <label for="start_date">Fecha de inicio de la construcion</label>
        <input type="date" name="start_date" id="start date">
        <br>
        <label for="end_date">Fecha de fin</label>
        <input type="date" name="end_date" id="end_date">
        <br>
        <label for="end_reason">Razon de fin</label>
        <input type="text" name='end_reason' id='end_reason'>
        <br>
        <label for="kilometers">Kilometros recorridos</label>
        <input type="number" name='kilometers' id="kilometers">
        <br>
        <button type="submit">Guardar</button>

    </form>
</body>
</html>