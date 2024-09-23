function llenarTablaAlmacen(id_categoria) {
	if(id_categoria==0) {
		var cadena="sql=SELECT * FROM tb_almacen ORDER BY nombre";
	}else{
		var cadena="sql=SELECT * FROM tb_almacen where id_categoria="+id_categoria+" ORDER BY nombre";

	}

	$.ajax({
		type:"POST",
		url:"../com/tablaAlmacen.php",
		data:cadena,
		success:function(r){
			$('#tabla').html(r);
		},
		error:function(r) {
			alertify.error("Error al cargar los productos" +r);
		}
	});

} 

function datosEditar(datos) {
	
	d=datos.split('||');
	$('#txtIdProducto').val(d[0]);
	$('#txtSku').val(d[1]);
	$('#txtNombreP').val(d[2]);	

}



function modificarProducto() {
	var id_producto=$('#txtIdProducto').val();
	
	var sku=$('#txtSku').val();
	var nombre=$('#txtNombreP').val();
	var precio_meli=$('#txtPrecioMeli').val();
	var fyh_actualizacion=$('#txtFyhActualizacion').val();
	var id_categoria=$('#listaCategorias option:selected').val();


	var sql="UPDATE tb_almacen_meli SET sku='"+sku+"',fyh_actualizacion="+fyh_actualizacion+" WHERE id_producto="+id_producto;
	var cadena="sql="+sql+"&operacion=1";


	$.ajax({
		type:"POST",
		url:"../com/registrosProducto.php",
		data:cadena,
		success:function(r){
			llenarTablaAlmacen(id_categoria);
			alertify.success("El producto ha sido modificado");
		},
		error:function(r){
			alertify.error("Error "+r);
		}
	});


}