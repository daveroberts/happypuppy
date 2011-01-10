<script type="text/javascript">
	$(document).ready(function(){
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
				var aParams = new Array();
				var pairs = strParams.split('&');
				for(i in pairs){
					var tuple = pairs[i].split('=');
					aParams[tuple[0]] = tuple[1];
				}
				//$.bbq.pushState(aParams);
				// this will change the location in the browser's address bar
				// unfortunately, it only allows you to chang the hash, and not the query variables
				// since this is really a brand new page, and not a different anchor on the same page
				// I decided to leave it out
				// if you want to implement it, you'd also have to add a redirect to the hash change function
				// so it would produce query variables and navigate to the appropriate page when loaded
				// this would cause a double reload, which is not desirable, and defeats the purpose of ajax IMO (small sections of pages loaded, not entire DBs of snippets loaded and hidden, to be called when the back button is pressed)
				return false;
			});
		}
	});
</script>