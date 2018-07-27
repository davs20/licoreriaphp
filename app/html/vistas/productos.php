


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div id="row panel panel-default ">
        <h1>Productos</h1>
    </div>
	

    <div class="row panel panel-default">


		<table id="table_id" class="display">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Existencia</th>
            <th>Categoria</th>
            <th>Opciones</th>

        </tr>
    </thead>
    
</table>


		
	</div>
</div>

<script type="text/javascript">
   $(document).ready(function() {
    var tabla=$('#table_id').DataTable( {
      "ajax": "http://localhost/licoreria/Productos",
       "dataSrc": "",    
        columns: [
        { data: 'id_producto'},
        { data: 'nombre_producto' },
        { data: 'descripcion_producto' },
        { data: 'existencia_producto'},
        { data: 'nombre_categoria'},
        { data: 'id_producto',render: function ( data, type, row ) {
    return '<button type="button"   class="btn btn-primary" onclick="edit('+data+')" data-toggle="modal" data-target="#exampleModal">Editar</button><button class="btn btn-danger" type="button" >Desabilitar</button>';
  }}
    
    ]    
  });

     
  
});

   
 
	
</script>
<div id="modal">
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button></div><div class="modal-body">
            <form>
              <div class="form-group"><label>Id</label>
                <input type="text" disabled="" name="id" class="form-control"></div>
                <div class="form-group"><label>Nombre</label>
                  <input type="text" name="nombre" class="form-control"></div><div class="form-group">
                    <label>Marca</label>
                    <select class="form-control"w name="marca">
                     
                   
                    
                    </select>
                  </div><div class="form-group"><label>Existencia</label>
                    <input type="number" class="form-control" name="existencia"></div>
                    <div class="form-group"><label>Categoria</label>
                      <select name="categoria" class="form-control" selected="">
                      </select>
                      </div><div class="form-group">
                        <label>Proveedor</label>
                        <select name="proveedor" class="form-control">
                          <option>Seleccione Proveedor</option>
                        </select></div>
                        <div class="form-group">
                          <label>Descripcion</label>
                          <textarea class="form-control" name="descripcion"></textarea>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                      <button type="button" class="btn btn-primary">Guardar Cambios</button></div></div></div></div>
  
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $.ajax({
      url:"http://localhost/licoreria/Categorias",
      success:function(data){
        var datos=jQuery.parseJSON(data);
         //console.log(datos["data"][0]["id_categoria"]);
         $("[name='categoria']").append("<option>Seleccione Categoria</option>");
        for (var i = 0; i < datos["data"].length; i++) {
         $("[name='categoria']").append("<option value='"+datos["data"][i]["id_categoria"]+"'>"+datos["data"][i]["nombre_categoria"]+"</option>");
         //console.log( datos["data"].length);
        }
        

      }

    });

    $.ajax({
      url:"http://localhost/licoreria/Marcas",
      success:function(data){
        var datos = jQuery.parseJSON(data);
        $("[name='marca']").append(" <option >Seleccione una Marca</option>");
        for (var i = 0; i < datos["data"].length; i++) {
          $("[name='marca']").append("<option value='"+datos["data"][i]["id_marca"]+"'>"+datos["data"][i]["nombre_marca"]+"</option>");
        }
      }
    });
  });

</script>
<script type="text/javascript">

  function edit(id){
    $.ajax({
      url:"http://localhost/licoreria/Producto/"+id,
      data:id,
      success:function(data){
        console.log(data);
        var producto=jQuery.parseJSON(data);
        $("[name='nombre']").val(producto["nombre_producto"]);
        $("[name='existencia']").val(producto["existencia_producto"]);
        $("[name='id']").val(producto["id_producto"]);
        $("[name='descripcion']").val(producto["descripcion_producto"]);
        $("[name='marca']").val(producto["marca_producto"]);
        $("[name='proveedor']").val(producto["id_proveedor"]);
        $("[name='categoria']").val(producto["categoria_id"]);


     
      }


    });
  


  }
</script>

