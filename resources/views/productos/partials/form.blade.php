@csrf
<div clas="row">
    <div class="col-12">
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="nombre"
                value="{{(isset($producto))?$producto->nombre:old ('nombre')}}" required>
        </div>
    </div>

    <div clas="row">
    <div class="col-12">
        <div class="form-group">
            <label for="">Descripción</label>
            <input type="text" class="form-control" name="descripcion"
                value="{{(isset($producto))?$producto->descripcion:old ('descripcion')}}" required>
        </div>
    </div>

    <div clas="row">
    <div class="col-12">
        <div class="form-group">
            <label for="">Precio</label>
            <input type="text" class="form-control" name="precio"
                value="{{(isset($producto))?$producto->precio:old ('precio')}}" required>
        </div>
    </div>

    <div clas="row">
    <div class="col-12">
        <div class="form-group">
            <label for="">Expiración</label>
            <input type="date" class="form-control" name="expiracion"
                value="{{(isset($producto))?$producto->expiracion:old ('expiracion')}}" required>
        </div>
    </div>

    <div clas="row">
    <div class="col-12">
        <div class="form-group">
            <label for="">Stock</label>
            <input type="number" class="form-control" name="stock"
                value="{{(isset($producto))?$producto->stock:old ('stock')}}" required>
        </div>
    </div>

    <div clas="row">
    <div class="col-12">
        <div class="form-group">
            <label for="">Proveedor</label>
            <input type="text" class="form-control" name="idProveedor"
                value="{{(isset($idProveedor))?$idProveedor->idProveedor:old ('idProveedor')}}" required>
        </div>
    </div>