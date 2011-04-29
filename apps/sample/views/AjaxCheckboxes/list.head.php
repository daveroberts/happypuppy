<script type="text/javascript">
	$(document).ready(function() {
		$('#AjaxNewOptionButton').click(AjaxNewOptionButtonClick);
	});
	function AjaxNewOptionButtonClick(){
		$.ajax({url : "/sample/AjaxCheckboxes/CreateOption", success : fillSelectAjax , dataType: 'json',  type : 'POST', data: "option="+$("#option").val() });
		return false;
	}
	function fillSelectAjax(data){
		if (data.success) {
			$('#tags').append('<div><input id="chk'+data.new_option+'" type="checkbox" checked="checked" name="tag[]" value="'+data.new_option+'" /><label for="chk'+data.new_option+'">'+data.new_option+'</label></div>');
		}
		$('#flash').slideUp('slow', function(){
			$('#flash').text(data.flash);
			$('#flash').slideDown('slow');
		});
	}
</script>