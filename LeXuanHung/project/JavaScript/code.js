
$(document).ready(function() {
	
	$('#List1').selectable({
		filter : ".A",
		selected: function () {
			var data = ""
			$('#List1 .ui-selected').each(function() {
				data += " ; " + $(this).attr("data");
			});
			alert(data);
		}
	});

});
