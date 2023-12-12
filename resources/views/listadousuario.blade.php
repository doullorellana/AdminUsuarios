<div>
    <table>
        <tr>
            <th>No.</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
        </tr>
        {{$contador = 1}}
        @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $contador++}}</td>
                <td>{{ $usuario->nombre }}</td>
                <td>{{ $usuario->apellido }}</td>
                <td>{{ $usuario->correo }}</td>
            </tr>
        @endforeach
    </table>
</div>
