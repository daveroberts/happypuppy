<form method="post">
	<table>
		<tbody>
			<tr>
				<td>Username</td>
				<td><?php echo textbox("username") ?></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><?php echo password("password") ?></td>
			</tr>
		</tbody>
	</table>
	<?php echo submit("Login") ?>
</form>