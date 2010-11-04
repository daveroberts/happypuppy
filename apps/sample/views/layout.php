<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title><?if($title==""){?>Happy Puppy<?}else{?><?=$title?><?}?></title>
  <link rel="stylesheet" href="/sample/css/reset.css" type="text/css" />
  <link rel="stylesheet" href="/sample/css/style.css" type="text/css" />
  <link rel="stylesheet" href="/sample/css/positioning.css" type="text/css" />
  <link rel="stylesheet" href="/sample/css/color.css" type="text/css" />
  <script type="text/javascript" src="/sample/js/jquery-1.4.2.min.js"></script>
  <script type="text/javascript" src="/sample/js/jquery.json-2.2.min.js"></script>
  <script type="text/javascript" src="/sample/js/jquery.form.js"></script>
  <?=$head?>
</head>
<body>
<div id='page'>
<h1>Happy Puppy</h1>
<div id='sidebar'>
<img src="/sample/happypuppy.jpg.dontshow" alt="A very happy puppy" />
<ul>
<li><?= link_to("Home", "/doc") ?></li>
<li><?= link_to("Basics", "/basics") ?></li>
<li><?= link_to("Filters", "/filters") ?></li>
<li><?= link_to("Basic MVC example", "/person") ?></li>
<li><?= link_to("AJAX MVC example", "/personAjax") ?></li>
</ul>
</div>
<div id='content'>
<? if (hasflash()){ ?><div id="flash"><?=getflash()?></div><? }?>
<?=$content?>
</div>
</div>
</body>
</html>
