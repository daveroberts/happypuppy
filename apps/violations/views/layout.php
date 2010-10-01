<h1>Violations</h1>
<div>
	<span><?=link_to("Violations", '/violation')?></span>
	<span><?=link_to("Macros", '/macro')?></span>
</div>
<? if (hasflash()) { ?>
<div id="flashMessage"><?=getflash()?></div>
<? }?>
<?=$content?>