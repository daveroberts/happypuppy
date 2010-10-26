<div>Title: <?=$thread->title?></div>
<div><input type="text" id="txtFilter" /><input type="button" id="btnFilter" value="Filter" /></div>
<div><input type="text" id="txtHide" /><input type="button" id="btnHide" value="Minimize First X posts" /></div>
<div>Hiding first <span id="spanNumHidden"></span> elements</div>
<div id="postCount">
	<span>Page <?=$page?></span>
	<? $pages = ceil($total_posts / 50); ?>
	<? for($x = 1; $x <= $pages; $x++): ?><?=link_to($x, "/thread/show/".$thread->threadid."?page=".$x)?>&nbsp;<? endfor; ?>
</div>
<div id="posts">
<?foreach($posts as $post):?>

<? $isredclass = '';  if ($post->isred){ $isredclass="redpost"; } ?>

<div class="post">
	<a href="#" class="toggleLink">Min</a>
	<?
		$content = $post->postcontenthtml;
		$pattern = '/<a href="showthread.php(.)*a>/';

		preg_match($pattern, $content, $matches);
		foreach($matches as $match){ if ($match != "/") {$content = str_replace($match, "", $content); } }
	?>
	<div class="postbody <?=$isredclass?>" style="max-width: 800px; padding: 3px;">
		<table>
			<tbody style="width: 100%;">
				<tr>
					<td></td>
					<td><?=$post->timestamp?></td>
				</tr>
				<tr>
					<td>
						<table>
							<tbody>
								<tr><td><?=$post->username?></td></tr>
								<tr><td><img src="xxxhttp://leagueoflegends.com/board/<?=$post->photourl?>" /></td></tr>
								<tr><td><?=$post->position?></td></tr>
							</tbody>
						</table>
					</td>
					<td>
						<?=$content?>
					<td>
				</tr>
				<tr>
					<td></td>
					<td style="text-align: right;"><?=$post->postrating?></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<?endforeach;?>
</div>