<div>
    <h1>Hola Mundo {{$usuario. ' y esta es mi contraseña' .$pass}}</h1>
    @if ($usuario === "Doull")
        Bienvenido {{$usuario}}
        <ul>
            <form action="api/usuarios" method="POST">
                <li>Nombre <input type="text" name="nombre"></li>
                <li>Apellido <input type="text" name="apellido"></li>
                <li>Correo <input type="text" name="correo"></li>
                <li>Fecha Registro <input type="date" name="fecha_registro"></li>
                <li><input type="submit"></li>
            </form>
        </ul>
    @else
        Usted no tiene permiso para ver esta pantalla.
    @endif
</div>
