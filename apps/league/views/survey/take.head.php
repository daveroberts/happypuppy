<style type="text/css">
	#championsTable{ border-style: collapse; text-align: center; }
	#championsTable td{ border: 1px solid black; }
	.bad{ background-color: #FFF4F4; }
	td.bad:hover{ border-color: red !important; }
	
	.meh{ background-color: #FFFFF4; }
	td.meh:hover{ border-color: yellow !important; }
	
	.ok{ background-color: #F4F4FF; }
	td.ok:hover{ border-color: purple !important; }
	
	.good{ background-color: #F4FFFF; }
	td.good:hover{ border-color: blue !important; }
	
	.op{ background-color: #F4FFF4; }
	td.op:hover{ border-color: green !important; }
	
</style>

<script type="text/javascript">
	$(document).ready(function(){
		$("#championsTable td").click(function(){
			toggleRadio($(this).children().first(), $(this));
		});
	});
	function toggleRadio(radio, td)
	{
		if (radio.attr("checked") == "checked")
		{
			radio.removeAttr("checked");
		}
		else
		{
			radio.attr("checked", "checked");
		}
	}
</script>