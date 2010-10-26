<?foreach($threads as $thread):?>
<div><?=link_to($thread->title, "/thread/show/".$thread->threadid)?></div>
<?endforeach;?>