<h2><?php echo $survey->name ?></h2>
<?php foreach($survey->champions as $champion):?>
<?php
PhpRender::render("champion/_stats", "champion", $champion)
?>
<?php endforeach; ?>