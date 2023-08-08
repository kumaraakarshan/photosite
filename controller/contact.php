<?php
$TITLE = 'Kontakt – Fotos zum Verlieben';
$DESCRIPTION = 'My index page of my website';
$KEYWORDS = 'contact photosite';

// success page and stop
if($success) {
	require($_SERVER['DOCUMENT_ROOT'].'tmpl/inc.head.php');
	require($_SERVER['DOCUMENT_ROOT'].'tmpl/contact_success.php');
	require($_SERVER['DOCUMENT_ROOT'].'tmpl/inc.foot.php');
	exit;
}

// checking error if form is posted
$ERR = '';
if(!empty($_POST)) {
	if(empty($_POST['name'])) {
		$ERR = 'You need to enter your name';
	}
	
	if(empty($ERR) && empty($_POST['email'])) {
		$ERR = 'You need to enter your email';
	}
	
	if(empty($ERR) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$ERR = 'You need to enter a valid email';
	}
	
	if(empty($ERR) && empty($_POST['subject'])) {
		$ERR = 'You need to enter a subject';
	}
	
	if(empty($ERR) && empty($_POST['message'])) {
		$ERR = 'You need to enter your message';
	}
	
	if(empty($ERR)) {
		
		$name      = _MS($_POST['name']);
		$email     = _MS($_POST['email']);
		$subject   = _MS($_POST['subject']);
		$message   = _MS($_POST['message']);
		
		mysqli_query($GLOBALS['link'], "INSERT INTO contactus (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message')");
		
		redirect('/contact/success/');
	}
	
}

require($_SERVER['DOCUMENT_ROOT'].'tmpl/inc.head.php');
require($_SERVER['DOCUMENT_ROOT'].'tmpl/contact.php');
require($_SERVER['DOCUMENT_ROOT'].'tmpl/inc.foot.php');
