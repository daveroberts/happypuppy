<?=$f->start("/company/occurrence/create")?>
<?=\HappyPuppy\HtmlHidden::make("violation_id", $violation->id)?>
<?=$f->label("date", "Date")?>
<?=$f->input("date")?>
<?=$f->end()?>