<style>
	.hidden {
		display: none;
	}

</style>

<table class="table table-hover table sm">
	<thead>
		<tr class="table-success">
			<th class="hidden">ID</th>
			<th>SKU</th>
			<th>NOMBRE</th>
			<th>IMG</th>
			<th>ACC</th>
		</tr>
	</thead>
	<tbody>
		<?php
			require('conexion.php');
            $conexion=mysqli_connect($host,$user,$password,$database);
            if(!$conexion) die ("Error al conectar al servidor".mysql_error());

            $sql=$_POST['sql'];

            $resultado=mysqli_query($conexion,$sql) or die ("error en la consulta" .mysql_error());
            	while($registro=mysqli_fetch_array($resultado)) {
            		$datos=$registro['id_producto']." || ".$registro['sku']. "|| ".$registro['nombre']. "||".$registro['stock'];
            	
		?>
		<tr>
			<th class="hidden"><?php echo $registro['id_producto']; ?></th>
			<th><?php echo $registro['sku']; ?></th> 
			<td><?php echo $registro['nombre']; ?></td>
			<td></td>		
			<td>
				<button type="button" class="btn btn-outline-primary btn-sm" 
						data-bs-target="#modalModificar" 
						data-bs-toggle="modal" 
						onclick="datosEditar('<?php echo $datos ?>')">
					<i class="far fa-edit"></i>
				</button>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>