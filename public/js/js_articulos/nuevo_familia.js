$("#familia_id").change(function(event){
	$.get("/sub_familia_id/"+event.target.value+"", function(response, familias){
		$("#sub_familias").empty();
		$("#sub_familias").append("<option value = '0'>Seleccione</option>");
		var i;
		for(i = 0; i <= response.length; i++)
		{
			if(response[i].estatus == 1)
			{
				$("#sub_familias").append("<option value='"+response[i].id+"'>"+response[i].nombre_sub_familia+"</option>");
			}
		}
	});
});