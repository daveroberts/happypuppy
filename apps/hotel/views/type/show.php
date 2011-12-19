<?= link_to("Back to hotel list", "/hotel") ?>

<h2><?= ucfirst($type->name) ?> Rooms</h2>
<?= partial("room/_list", "rooms", $type->rooms) ?>
