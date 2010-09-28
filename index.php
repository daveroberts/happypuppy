<?php
session_start();
$_ENV["docroot"] = getcwd().DIRECTORY_SEPARATOR;
require 'happypuppy/HappyPuppy.php';
\HappyPuppy\run();
?>