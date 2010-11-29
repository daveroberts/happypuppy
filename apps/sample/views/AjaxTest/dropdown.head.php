<script type="text/javascript">
	 $(document).ready(function() {
		$('#AjaxNewOptionButton').click(AjaxNewOptionButtonClick);
	});
	function AjaxNewOptionButtonClick(){
		$.ajax({url : "/sample/AjaxTest/CreateOption.ajax", success : fillSelectAjax , dataType: 'json',  type : 'POST', data: "option="+$("#option").val() });
		return false;
	}
	function fillSelectAjax(data){
		if (data.success) {
			$('#tags').find('option').remove();
			$.each(data.options, function(i, opt){
				$('#tags').append('<option value="'+i+'">'+opt+'</option>');
			});
			$('#option').val("");
		}
		$('#flash').slideUp('slow', function(){
			$('#flash').text(data.flash);
			$('#flash').slideDown('slow');
		});
	}
</script>