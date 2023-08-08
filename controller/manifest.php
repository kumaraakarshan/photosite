<?php

header('Content-Type: application/json');

$out = [];
$out['short_name'] = 'Title';
$out['name'] = 'Long title';
$out['display'] = 'standalone';
$out['scope'] = '/';
$out['start_url'] = '/';

echo json_encode($out);
