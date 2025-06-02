<h1>Reporte mensual - {{ $provincia->name }}</h1>
<table width="100%" border="1" cellspacing="0" cellpadding="5">
    <thead>
        <tr>
            <th>Nombre de la Obra</th>
            <th>Fecha</th>
        </tr>
    </thead>
    <tbody>
        @foreach($obras as $obra)
            <tr>
                <td>{{ $obra->name }}</td>
                <td>{{ $obra->created_at->format('d/m/Y') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
