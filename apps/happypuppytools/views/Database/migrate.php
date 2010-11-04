<h2>Migrate</h2>

<div>DB Version: <?=$DBVersion?></div>
<div>Max Version: <?=$MaxVersion?></div>
<? if ($MaxVersion == 0) { ?>
	<div>Migrations are searched for in /apps/<?=$app?>/db/migrations.php</div>
	<div>The file must contain a class named <?=$app?>Migrations</div>
	<div>The class must contain static methods named From0To1 and From1To0 (for down migrations)</div>
<? } ?>

<? if ($MaxVersion > $DBVersion) { ?>
<div>Your database can be updated to the latest version!<div>
<div><?=\HappyPuppy\Form::start('/database/migrateTo/'.$app) ?><input type="hidden" name="version" value="<?=$MaxVersion?>" /><input type="submit" value="Update Database" /></form></div>
<? } ?>
<? if ($MaxVersion > 0) { ?>
<div><?=\HappyPuppy\Form::start('/database/migrateTo/'.$app) ?>Change database version to <input type="text" name="version" value="<?=$MaxVersion?>" /><input type="submit" value="Change Database Version" /></form></div>
<? }?>