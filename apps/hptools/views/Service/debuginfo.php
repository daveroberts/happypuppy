<html>
	<head>
		<style type='text/css'>
			body{ background-color: #FFF0C0; border: 4px dashed black; padding: 1em; font-family: sans-serif; margin: 0.25em; }
			h1 { font-size: 120%; }
			p { margin: 0; }
		</style>
		<script type="text/javascript">
			function toggle_visibility(id)
			{
				var e = document.getElementById(id);
				if(e.style.display != 'none')
					e.style.display = 'none';
				else
					e.style.display = 'block';
				return false;
			}
		</script>
	</head>
	<body>
		<h1>Page Debug Information</h1>
		<div>
			<a href="#" onclick="toggle_visibility('files_used')">Files Used to generate this page</a>
			<div id="files_used" style="display: none;">
				<pre><?php echo $debug_info ?></pre>
				<pre><?php echo $flat_output ?></pre>
				<pre><?php echo $view_file_info ?></pre>
			</div>
		</div>
		
		<div>
			<a href="#" onclick="toggle_visibility('sql')">SQL</a>
			<div id="sql" style="display: none;">
				<pre><?php echo $sql_info ?></pre>
			</div>
		</div>

		<div id="warning">
			<p>Warning: This screen does not refresh on non-get requests.  You may be looking at outdated information</p>
			<p>To turn off this debug info screen, set <strong>\$_ENV['config']['show_debug_info'] = false</strong> in <strong>config/hpconf.php</strong></p>
			<p>This screen is only shown when <strong>\$_ENV['config']['env']</strong> is set to <strong>Environment::DEV</strong></p>
			<div><a href="#" onclick="toggle_visibility('warning')">Hide Warning</a></div>
		</div>
	</body>
</html>