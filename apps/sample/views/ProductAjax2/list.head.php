<script type="text/javascript">
	$(document).ready(function(){
		if(window.location.hash) {
			if (window.location.hash.substring(0,2) == '#!'){
				var ajaxURL = "" + window.location;
				ajaxURL = ajaxURL.replace('#!', '?');
				$.ajax({url : ajaxURL, success : newProducts , dataType: 'html',  type : 'POST', data: "" });
			}
		}
		relinkObjects();
		function newProducts(data){
			$('#products').empty();
			$('#products').html(data);
			relinkObjects();
			// need to rebind the new links on the page to new javascript click functions
			// the jquery live method binds the new links to the old methods (might be a bug in jQuery)
		}
		function relinkObjects(){
			bindLink($('#<?php echo $pg->prefix ?>_name'));
			bindLink($('#<?php echo $pg->prefix ?>_price'));
			bindLink($('#<?php echo $pg->prefix ?>_prev'));
			bindLink($('#<?php echo $pg->prefix ?>_next'));
		}
		function bindLink(link){
			link.click(function(){
				$.ajax({url : link.attr('href'), success : newProducts , dataType: 'html',  type : 'POST', data: "" });
				var strParams = link.attr('href').substring(link.attr('href').indexOf('?') + 1);
				/*var aParams = new Array();
				var pairs = strParams.split('&');
				for(i in pairs){
					var tuple = pairs[i].split('=');
					aParams[tuple[0]] = tuple[1];
				}*/
				window.location.hash = "#!" + strParams;
				return false;
			});
		}
	});
</script>