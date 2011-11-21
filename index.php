<?php
session_start();
// docroot is one directory up from happypuppy directory
$_ENV["docroot"] = getcwd().DIRECTORY_SEPARATOR;
require 'happypuppy/HappyPuppy.php';
\HappyPuppy\run();
?>
