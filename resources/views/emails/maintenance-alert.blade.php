<h1>¡Atención!</h1>
<p>La máquina <strong>{{ $machine->serial_number }}</strong> ha superado el límite de kilómetros.</p>
<p><strong>Kilometraje actual:</strong> {{ $machine->kilometers_present }} km</p>
<p><strong>Límite de mantenimiento:</strong> {{ $machine->limit_km_maintenance }} km</p>

<p>Se recomienda llevarla a mantenimiento cuanto antes.</p>

<p>Gracias,<br>El sistema de gestión de máquinas.</p>
