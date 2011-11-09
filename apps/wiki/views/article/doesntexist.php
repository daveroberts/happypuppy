<h2><?= $name ?></h2>

Page doesn't exist yet

<?= $f->start("/article/create") ?>
	<?= $f->input("name") ?>
	<?= $f->input("body") ?>
	<?= submit("Create Article") ?>
<?= form_end() ?>