<?= link_to("Back to hotel list", "/hotel") ?>

<h1><?= $hotel->name ?></h1>
<h2>Rooms</h2>
<?= partial("room/_list", "rooms", $hotel->rooms) ?>
