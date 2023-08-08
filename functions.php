<?php

function _LT($text) {
	return $text;
}

function makeSlug($title) {
	$ret = mb_strtolower($title);

	$ret = str_replace('î', 'i', $ret);
	$ret = str_replace('ç', 'c', $ret);

	$ret = str_replace('è', 'e', $ret);
	$ret = str_replace('é', 'e', $ret);
	$ret = str_replace('à', 'a', $ret);
	$ret = str_replace('á', 'a', $ret);
	$ret = str_replace('ó', 'o', $ret);
	$ret = str_replace('ò', 'o', $ret);

	$ret = str_replace('²', '2', $ret);
	$ret = str_replace('ß', 'ss', $ret);
	$ret = preg_replace('/[\s\r\n\ ]+/', '-', $ret);

	$ret = preg_replace('/[^A-Za-z0-9üäö\-]/', '', $ret);
	$ret = preg_replace('/\-+/', '-', $ret);

	$ret = str_replace('ü', 'ue', $ret);
	$ret = str_replace('ä', 'ae', $ret);
	$ret = str_replace('ö', 'oe', $ret);

	$ret = preg_replace('/[^\x00-\x7F]+/', '', $ret);

	$ret = trim($ret, '-');

	$ret = mb_substr($ret, 0, 211);
	return $ret;
}

function redirect($to) {
	header('Location: '.$to, true, 302);
	exit;
}

// ##############################################

function DEBUG($text) {
	
	if(is_array($text)) {
		echo '<pre>';
		print_r($text);
		echo '</pre>';
		return;
	}
	
	echo "$text<br>\n";
}
