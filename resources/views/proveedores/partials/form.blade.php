@csrf
<div clas="row">
    <div class="col-12">
        <div class="form-group">
            <label for="">Razon social</label>
            <input type="text" class="form-control" name="razonSocial"
                value="{{(isset($proveedor))?$proveedor->razonSocial:old ('razonSocial')}}" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">Nombre completo</label>
            <input type="text" class="form-control" name="nombreCompleto"
                value="{{(isset($proveedor))?$proveedor->nombreCompleto:old ('nombreCompleto')}}" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">Dirrección</label>
            <input type="text" class="form-control" name="dirreccion"
                value="{{(isset($proveedor))?$proveedor->dirreccion:old ('dirreccion')}}" required>
        </div>
    </div>
    
    <div class="col-12">
        <div class="form-group">
            <label for="">Teléfono</label> 
            <input type="tel" class="form-control" name="telefono" placeholder="formato 000-000-0000" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                value="{{(isset($proveedor))?$proveedor->telefono:old ('telefono')}}" required>
                
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="">Correo</label>
            <input type="email" class="form-control" name="correo"
                value="{{(isset($proveedor))?$proveedor->correo:old ('correo')}}" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">RFC</label>
            <input type="text" class="form-control" name="rfc"
                value="{{(isset($proveedor))?$proveedor->rfc:old ('rfc')}}" required>
        </div>
    </div>


</div>