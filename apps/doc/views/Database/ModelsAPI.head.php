<script type="text/javascript">
	$(document).ready(function(){
		$('.member_title').click(function(){
			$(this).next().toggle();
			$(this).toggleClass('member_title_active');
			$(this).parent().toggleClass('member_box_active');
			if ($(this).hasClass('member_title_active')){
				$.scrollTo($(this).parent(), 1000);
			}
			return false;
		});
		$('#fields_relations_link').click(function(){
			$('#fields_relations').slideToggle();
			return false;
		});
		$('#other_methods_link').click(function(){
			$('#other_methods').slideToggle();
			return false;
		});
		$('#static_functions_link').click(function(){
			$('#static_functions').slideToggle();
			return false;
		});
		$('#member_methods_link').click(function(){
			$('#member_methods').slideToggle();
			return false;
		});
	});
</script>
<style type="text/css">
	h2{ font-size: 130%; text-align: center; }
	h3{ background-color: #F5F5FF; border-bottom: 1px solid blue; color: #444444; margin-top: 2em; margin-bottom: 1em; }
	.member_box{ }
	.member_box_active{ border: 1px solid black; margin-bottom: 2em; }
	.member_title_active{ font-weight: bold; background-color: #F0FFF0; }
	.member_title_active:hover{ border-color: transparent !important; }
	.member_title{ text-decoration: none; color: black; display: block; padding: 5px; font-family: monospace; font-size: 110%; border: 1px solid white; }
	.member_title:hover{color: blue; border-bottom: 1px solid black; }
	.member_details{ display:none; border-top: 1px dashed black; padding: 0.5em; }
	.section_title{ font-size: 120%; letter-spacing: 0.1em; }
	.member_synopsis { margin-top: 0.75em; }
	.member_signature { margin-top: 0.75em; }
	.member_information { margin-top: 0.75em; }
	#other_methods{ display: none; }
</style>