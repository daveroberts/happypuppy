<h2><?= $name ?></h2>

<?= $f->start("/article/create") ?>
	<div><?= $f->input("name") ?></div>
	<div><?= $f->input("body", array("style"=>"width: 800px; height: 500px;")) ?></div>
	<?= submit("Create Article") ?>
<?= form_end() ?>