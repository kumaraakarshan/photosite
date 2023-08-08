<?php

// variable header fields
$TITLE = 'Fotos zum Verlieben – Neugeborenen Fotoshooting, Baby Fotoshooting, Schwangerschafts Fotoshooting Wien';
$DESCRIPTION = 'My index page of my website';
$KEYWORDS = 'index,website,page,photos';

require($_SERVER['DOCUMENT_ROOT'].'tmpl/inc.head.php');
require($_SERVER['DOCUMENT_ROOT'].'tmpl/index.php');
require($_SERVER['DOCUMENT_ROOT'].'tmpl/inc.foot.php');

$sql = "SELECT * FROM `keywords` WHERE term_id ="a"";
mysqli_query ( $GLOBALS['link'], $sql );

