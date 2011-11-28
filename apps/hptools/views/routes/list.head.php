

<style type="text/css">
	.apptable { border-collapse: collapse; border: 1px solid black; font-size: 0.8em; }
	.apptable th { /*border: 1px solid black;*/ border-bottom: 1px solid black; }
	.apptable td { /*border: 1px solid black;*/ padding: 2px; }
</style>
<script type="text/javascript">
	$(document).ready(function(){
		resizeTable();
	});
	$(window).resize(resizeTable);
	function resizeTable(){
		var maxwidth = 0;
		$('.apptable_route').width('');
		$('.apptable_controller').width('');
		$('.apptable_action').width('');
		$('.apptable_route').each(function(){
			if ($(this).width() > maxwidth)
			{
				maxwidth = $(this).width();
			}
		});
		$('.apptable_route').width(maxwidth);
		maxwidth = 0;
		$('.apptable_controller').each(function(){
			if ($(this).width() > maxwidth)
			{
				maxwidth = $(this).width();
			}
		});
		$('.apptable_controller').width(maxwidth);
		maxwidth = 0;
		$('.apptable_action').each(function(){
			if ($(this).width() > maxwidth)
			{
				maxwidth = $(this).width();
			}
		});
		$('.apptable_action').width(maxwidth);
	}
</script>
