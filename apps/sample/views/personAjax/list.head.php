<style type="text/css">
	.person_show{ display: none; }
	.person_edit{ display: none; }
</style>
<script type="text/javascript">
	$(document).ready(function() {
		var newform_loaded = false;
		$('#newform-load').hide();
		$('#newPersonLink').click(function(){
				if (!newform_loaded)
				{
					// get the add person partial from the server
					$('#newform').hide();
					$('#newform-load').show();
					$('#newform').load("/sample/personAjax/new.ajax", {},
					function(){
						$('#newform-load').hide();
						$('#newform').slideToggle();
					});
				}
				else
				{
					$('#newform').empty();
				}
				newform_loaded = !newform_loaded;
				return false;
			}
		);
		$('.person_show_link').click(function(e){
			clearAjaxDetails();
			var person_id = e.target.id.replace(/person_show_link_/, "");
			$('#person_ajax_loading_'+person_id).show();
			$.ajax({
				url: "/sample/personAjax/show/"+person_id+".ajax",
				success: function(html)
				{
					$('#person_ajax_loading_'+person_id).hide();
					$("#person_show_"+person_id).append(html);
					$("#person_show_"+person_id).slideDown('normal');
				}
			});
			return false;
		});
		$('.person_edit_link').live('click', function(){
			clearAjaxDetails();
			var person_id = this.id.replace(/person_edit_link_/, "");
			$('#person_ajax_loading_'+person_id).show();
			$.ajax({
				url: "/sample/personAjax/edit/"+person_id+".ajax",
				success: function(html)
				{
					$('#person_ajax_loading_'+person_id).hide();
					$("#person_edit_"+person_id).append(html);
					$("#person_edit_"+person_id).slideDown('normal');
				}
			});
			return false;
		});
		$('.cancel_edit_link').live('click', function(e){
			$('.edit_person_detail').slideToggle('normal', function(){$(this).remove();});
			return false;
		});
		$('.edit_link').live('click', function(e){
			$("#ajax_error").hide();
			var person_id = this.id.replace(/edit_link_/, "");
			// Use JQuery Form plugin to submit form
			$('.edit_ajax_form').ajaxSubmit({
				success : function(html){
					var success = html.substring(0,1);
					var message = html.substring(1);
					if (success == 1)
					{
						$('#person_top_'+person_id).empty();
						$('#person_top_'+person_id).append(message);
						$('#person_edit_'+person_id).empty();
					}
					else
					{
						$("#ajax_error").hide();
						$("#ajax_error").empty();
						$("#ajax_error").append(message);
						$("#ajax_error").slideToggle();
					}
				}
			});
			return false;
		});
		$('.person_delete_link').live('click', function(e){
			$("#ajax_error").hide();
			if (confirm('Are you sure you want to delete this person?'))
			{
				var person_id = this.id.replace(/person_delete_link_/, "");
				$.post("/personAjax/destroy.ajax", {id: person_id }, function(html){
					var success = html.substring(0,1);
					var message = html.substring(1);
					if (success == 1)
					{
						$('#person_'+person_id).slideToggle('normal', function(){$(this).remove();});
					}
					else
					{
						$("#ajax_error").hide();
						$("#ajax_error").empty();
						$("#ajax_error").append(message);
						$("#ajax_error").slideToggle();
					}
				});
			}
			return false;
		});
		function clearAjaxDetails(callback)
		{
			$('.show_person_detail').slideUp('normal', function(){ $('.show_person_detail').remove(); });
			$('.edit_person_detail').slideUp('normal', function(){ $('.edit_person_detail').remove(); });
		}
	});
</script>