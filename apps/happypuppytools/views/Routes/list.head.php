<style type="text/css">
	.apptable { border-collapse: collapse; }
	.apptable th { border: 1px solid black; }
	.apptable td { border: 1px solid black; }
</style>
<script type="text/javascript">
	$(document).ready(function(){
		var maxwidth = 0;
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
	});
</script>