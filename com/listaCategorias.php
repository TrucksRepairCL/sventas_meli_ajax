<div class="row">
  <div class="col-lg-4">
          <select id="listaCategorias" class="form-select" onchange="llenarTablaAlmacen($(this).val())">
                  <option value="0">TODAS LAS CATEGORIAS</option>
                  <?php 
                    require_once("../com/conexion.php");              
                    $conexion=mysqli_connect($host,$user,$password,$database);
                    $sql="SELECT * from tb_categorias ORDER BY nombre_categoria";
                    $resultado=mysqli_query($conexion,$sql);

                    while($registro=mysqli_fetch_array($resultado)){
                      echo "<option value='".$registro['id_categoria']."'>".$registro['nombre_categoria']."</option>";
                    }

                  ?>
          </select>      
      </div>
  <div class="col-lg-8"></div>
</div>



