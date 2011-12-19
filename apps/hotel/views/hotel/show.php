<h1><?= $hotel->name ?></h1>
<h2>Rooms</h2>
<?= partial("room/_list", "rooms", $hotel->rooms) ?>
