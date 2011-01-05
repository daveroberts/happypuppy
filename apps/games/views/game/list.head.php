<script type="text/javascript">
	$(document).ready(function(){
		$("#gamesTable").tableDnD({
			onDrop: function(table, row){
				var rows = table.tBodies[0].rows;
				var dataString = ''
				for (var i=0; i<rows.length; i++) {
					var id = rows[i].id.substring(5);
					dataString = dataString + 'IDS[]=' + id + "&";
				}
				dataString = dataString.substring(0, dataString.length - 1);
				$.ajax({
					url: '/games/game/reorder',
					type: 'POST',
					data: dataString,
					dataType: 'json',
					success:
						function(data) {
						if (!data.success){
							// post an error message on the page somewhere
						}
				}});
			}
		});
	});
</script>
<style type="text/css">
	#gamesTable{ border-style: collapse; }
	#gamesTable td{ border: 1px solid transparent; }
	.tDnD_whileDrag{ background-color: #F5F5FF; }
	.tDnD_whileDrag td{ border-top: 1px dashed black !important; border-bottom: 1px dashed black  !important; }
	.tDnD_whileDrag .firstCol{ border-left: 1px dashed black !important; }
	.tDnD_whileDrag .lastCol{ border-right: 1px dashed black !important; }
</style>