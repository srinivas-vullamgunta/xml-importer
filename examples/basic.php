<?php

require_once '../vendor/autoload.php';

use srinivas-vullamgunta\XML\XML;

$notes = XML::import('notes.xml')->get();

// Use the xml here... e.g $notes->attribute('count');
