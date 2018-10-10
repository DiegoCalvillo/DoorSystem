$('#familias').change(function(event){
	$.get('/busqueda_articulos/'+event.target.value+'', function(response){
		$('#tabla_articulos').empty();
		$(response).each(function(key, value){
			$('#tabla_articulos').append('<tr><td>'+value.id+'</td><td><a>'+value.descripcion+'</a></td></tr>');
		});
	});

	$.get('/sub_familia_id/'+event.target.value+'', function(res){
		$('#sub_familias').empty();
		$('#sub_familias').append("<option value='0'>Seleccione</option>");
		for(var i = 0; i <= res.length; i++) {
			if(res[i].estatus == 1) {
				$('#sub_familias').append("<option value='"+res[i].id+"'>"+res[i].nombre_sub_familia+"</option>");
			}
		}
	});
});

$('#sub_familias').change(function(event){
	console.log("Este se activa");
});