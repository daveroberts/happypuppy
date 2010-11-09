<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title><?php if($title==""){?>Happy Puppy<?php }else{?><?php echo $title?><?php }?></title>
  <link rel="stylesheet" href="/sample/css/reset.css" type="text/css" />
  <link rel="stylesheet" href="/sample/css/style.css" type="text/css" />
  <link rel="stylesheet" href="/sample/css/positioning.css" type="text/css" />
  <link rel="stylesheet" href="/sample/css/color.css" type="text/css" />
  <script type="text/javascript" src="/sample/js/jquery-1.4.2.min.js"></script>
  <script type="text/javascript" src="/sample/js/jquery.json-2.2.min.js"></script>
  <script type="text/javascript" src="/sample/js/jquery.form.js"></script>
  <?php echo  $head?>
</head>
<body>
<div id='page'>
<h1>Happy Puppy</h1>
<div id='sidebar'>
<img src="/sample/happypuppy.jpg.dontshow" alt="A very happy puppy" />
</div>
<div id='content'>
<?php if (hasflash()){ ?><div id="flash"><?php echo getflash()?></div><?php }?>
<div><?php echo link_to("Table of Contents", "/doc/index") ?></div>
<?php echo $content?>
</div>
</div>
</body>
</html>
