<?php

require_once "../vendor/autoload.php";

use ThomasHurst\Term\Term;
use ThomasHurst\PHPbase\File;

Term::in($filename, "What should I call the file?");
$file = new File($filename);

Term::in($contents, "What should the file contain?");
$file->write($contents);

Term::out($file->read());

Term::in($delete, "Ready to delete?");

if (str_contains(strtolower($delete), "y")) {
    $file->delete();
}