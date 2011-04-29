<style type="text/css">
	#newform{ display: none; }
	#newform-load{ display: none; }
	.person_show{ display: none; }
	.person_edit{ display: none; }
	#ajax_error{ display: none; }
	.person_name_area{ float: left; width: 7em; }
</style>
<script type="text/javascript">
	$(document).ready(function() {
		var newform_loaded = false;
		$('#newPersonLink').click(function(){
			if (!newform_loaded)
			{
				$('#newform-load').show();
				// get the add person partial from the server
				$('#newform').load("/sample/personAjax/new", {},
				function(){
					$('#newform-load').hide();
					$('#newform').slideDown();
				});
			}
			else
			{
				$('#newform').slideUp('normal', function(){ $('#newform').empty(); });
			}
			newform_loaded = !newform_loaded;
			return false;
		});
		$('.person_show_link').click(function(e){
			var person_id = e.target.id.replace(/person_show_link_/, "");
			$('.person_show,.person_edit').hide();
			$('.show_person_detail,.edit_person_detail').remove();
			$('#person_ajax_loading_'+person_id).show();
			$.ajax({
				url: "/sample/personAjax/show/"+person_id,
				success: function(html)
				{
					$('#person_ajax_loading_'+person_id).hide();
					$("#person_show_"+person_id).empty();
					$("#person_show_"+person_id).append(html);
					$("#person_show_"+person_id).show();
				}
			});
			return false;
		});
		$('.person_edit_link').click(function(e){
			var person_id = e.target.parentNode.id.replace(/person_edit_link_/, "");
			$('.person_show,.person_edit').hide();
			$('.show_person_detail,.edit_person_detail').remove();
			$('#person_ajax_loading_'+person_id).show();
			$.ajax({
				url: "/sample/personAjax/edit/"+person_id,
				success: function(html)
				{
					$('#person_ajax_loading_'+person_id).hide();
					$("#person_edit_"+person_id).empty();
					$("#person_edit_"+person_id).append(html);
					$("#person_edit_"+person_id).show();
				}
			});
			return false;
		});
		$('.edit_link').live('click', function(e){
			$('.edit_person_detail').slideToggle('normal', function(){$(this).remove();});
			return false;
		});
		$('.cancel_edit_link').live('click', function(e){
			$('.edit_person_detail').slideToggle('normal', function(){$(this).remove();});
			return false;
		});
		$('.person_delete_link').live('click', function(e){
			$("#ajax_error").hide();
			if (confirm('Are you sure you want to delete this person?'))
			{
				var person_id = this.id.replace(/person_delete_link_/, "");
				$.post("/sample/personAjax/destroy", {id: person_id }, function(html){
					var success = html.substring(0,1);
					var message = html.substring(1);
					if (success == 1)
					{
						$('#person_'+person_id).slideUp('normal', function(){$(this).remove();});
					}
					else
					{
						$("#ajax_error").hide();
						$("#ajax_error").empty();
						$("#ajax_error").append(message);
						$("#ajax_error").slideDown();
					}
				});
			}
			return false;
		});
	});
</script>