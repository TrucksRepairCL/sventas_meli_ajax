<style>
  #div_date {
    display: none;
  } 

</style>


<!-- Modal -->
<div class="modal fade" id="modalModificar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar Producto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <input id="txtIdProducto" value="txtIdProducto" type="hidden">


        <div class="form-group">
          <input type="text" class="form-control" disabled id="txtNombreP">
        </div>

        <div class="form-group mt-2">
          <label for="txtSku">SKU</label>
          <input type="text" class="form-control" id="txtSku">
        </div>


        <div class="form-group mt-2">
          <label for="txtPrecioMeli">IMG</label>          
          <input type="text" class="form-control" id="txtPrecioMeli">
        </div>
  


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="modificarProducto()">Modificar</button>
      </div>
    </div>
  </div>
</div>
