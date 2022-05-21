@csrf

<div clas="row">
    <div class="col-12">
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="nombre"
                value="{{(isset($cliente))?$cliente->nombre:old ('nombre')}}" required>
        </div>
    </div>

    <div clas="row">
        <div class="col-12">
            <div class="form-group">
                <label for="">Apelldo Paterno</label>
                <input type="text" class="form-control" name="apellidoPaterno"
                    value="{{(isset($cliente))?$cliente->apellidoPaterno:old ('apellidoPaterno')}}" required>
            </div>
        </div>

        <div clas="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="">Apellido Materno</label>
                    <input type="text" class="form-control" name="apellidoMaterno"
                        value="{{(isset($cliente))?$cliente->apellidoMaterno:old ('apellidoMaterno')}}" required>
                </div>
            </div>

            <div clas="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="">RFC</label>
                        <input type="text" class="form-control" name="rfc"
                            value="{{(isset($cliente))?$cliente->rfc:old ('rcf')}}" required>
                    </div>
                </div>

                <div clas="row">
    <div class="col-12">
        <div class="form-group">
            <label for="">Teléfono</label> 
            <input type="tel" class="form-control" name="telefono" placeholder="formato 000-000-0000" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                value="{{(isset($cliente))?$cliente->telefono:old ('telefono')}}" required>
                
        </div>
    </div>

    <div clas="row">
    <div class="col-12">
        <div class="form-group">
            <label for="">Correo</label>
            <input type="email" class="form-control" name="correo"
                value="{{(isset($cliente))?$cliente->correo:old ('correo')}}" required>
        </div>
    </div>

    <div clas="row">
    <div class="col-12">
        <div class="form-group">
            <label for="">Dirrección</label>
            <input type="text" class="form-control" name="direccion"
                value="{{(isset($cliente))?$cliente->direccion:old ('direccion')}}" required>
        </div>
    </div>


    <div clas="row">
    <div class="col-12">
        <div class="form-group">
            <label for="">Producto</label>
            <input type="number" class="form-control" name="idProducto"
                value="{{(isset($cliente))?$cliente->idProducto:old ('idProducto')}}" required>
        </div>
    </div>