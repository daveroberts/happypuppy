<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title><?if($title==""){?>Happy Puppy<?}else{?><?=$title?><?}?></title>
  <link rel="stylesheet" href="/css/reset.css" type="text/css" />
  <link rel="stylesheet" href="/css/style.css" type="text/css" />
  <link rel="stylesheet" href="/css/positioning.css" type="text/css" />
  <link rel="stylesheet" href="/css/color.css" type="text/css" />
  <script type="text/javascript" src="/js/jquery.js"></script>
  <script type="text/javascript" src="/js/jquery.json.js"></script>
  <script type="text/javascript" src="/js/jquery.form.js"></script>
  <script type="text/javascript" src="/js/jquery-ui.js"></script>
  <?=$head?>
</head>
<body>
<div id='page'>
<h1>Happy Puppy</h1>
<div id='sidebar'>
<img src="/images/happypuppy.jpg" alt="A very happy puppy" />
<ul>
<li><?= link_to_controller("Home", "doc") ?></li>
<li><?= link_to_controller("Basics", "basics") ?></li>
<li><?= link_to_controller("Filters", "filters") ?></li>
<li><?= link_to_controller("Basic MVC example", "person") ?></li>
<li><?= link_to_controller("AJAX MVC example", "personAjax") ?></li>
</ul>
</div>
<div id='content'>
<?= flash(); ?>
<?=$content?>
</div>
</div>
</body>
</html>
