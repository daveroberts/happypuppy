<script type="text/javascript">
	$(document).ready(function(){
		$('.toggleLink').click(function(){
			$(this).next().toggle();
			if ($(this).text() == "Min"){
				$(this).text("Max");
			} else {
				$(this).text("Min");
			}
			firstShowing();
			return false;
		});
		$('#btnFilter').click(function(){
			var filter = $('#txtFilter').val().toUpperCase();
			if (filter == ''){ $('.post').show(); return; }
			var count = 0;
			$('.post').each(function(i, p){
				count++;
				var pbtext = $(p).find('.postbody').text().toUpperCase();
				if (pbtext.indexOf(filter) == -1){
					$(p).hide();
				} else {
					$(p).show();
				}
			});
		});
		$('#btnHide').click(function(){
			var num = $('#txtHide').val();
			$('.postbody').show();
			$('.toggleLink').text('Min');
			if (num == ''){ $('.postbody').show(); return; }
			var count = 0;
			$('.post').each(function(i, p){
				if (count == num){ return false; }
				var pb = $(p).find('.postbody');
				$(pb).hide();
				var tl = $(p).find('.toggleLink');
				$(tl).text("Max");
				count++;
			});
			firstShowing();
		});
	});
	function firstShowing(){
		var count = 0;
		$('.post').each(function(i, p){
			var pb = $(p).find('.postbody');
			if ($(pb).is(":visible")){
				return false;
			}
			count++;
		});
		$('#spanNumHidden').text(count);
	}
</script>


<style type="text/css">
.redpost{ border: 1px solid red; }
</style>