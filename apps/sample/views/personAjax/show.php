<h2><?php echo  $person->name ?> #<?php echo  $person->id ?></h2>
<div><?php echo  link_to('Edit', '/personAjax/edit/'.$person->id) ?></div>
<div><?php echo  link_to('Person List', '/personAjax/list') ?></div>
