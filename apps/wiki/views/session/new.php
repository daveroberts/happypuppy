<h1>Login</h1>
<form action="<?php echo rawurl_from_action('create') ?>" method="post">
<table>
	<tbody>
		<tr>
			<td>Username</td>
			<td><?php echo textbox('username') ?></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><?php echo password('plain_password') ?></td>
		</tr>
		<tr>
			<td></td>
			<td><?php echo submit('Login') ?></td>
		</tr>
	</tbody>
</table>
</form>
