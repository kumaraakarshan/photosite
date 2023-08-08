<?php

require($_SERVER['DOCUMENT_ROOT'].'init.php');
require($_SERVER['DOCUMENT_ROOT'].'classes/WebsiteController.php');

$routes = [
	'~^/$~' 						=> ['WebsiteController', 'index'],
	
	'~^/babyfotos/$~' 		=> ['WebsiteController', 'babyfotos'],
	'~^/neugeborenenfotos/$~' 		=> ['WebsiteController', 'neugeborenenfotos'],
	'~^/schwangerschaftsfotos-2/$~' 		=> ['WebsiteController', 'schwangerschaftsfotos2'],
	'~^/info-preise/$~' 		=> ['WebsiteController', 'price'],


	'~^/ueber-uns/$~' 		=> ['WebsiteController', 'ueberuns'],
	
	'~^/kontakt/$~' 			=> ['WebsiteController', 'contact'],
	'~^/contact/success/$~' => ['WebsiteController', 'contact', true],
	'~^/photoshoot/$~' 			=> ['WebsiteController', 'photoshoot'],
	'~^/footerlink/$~' 			=> ['WebsiteController', 'footerlink'],

	'~^/tag/$~' 			=> ['WebsiteController', 'tag_show'],
	'~^/([^/]+)/$~' 			=> ['WebsiteController', 'blog_show'],
	'~^/privacy/$~'			=> ['WebsiteController', 'privacy'],
	'~^/terms/$~'				=> ['WebsiteController', 'terms'],

	'~^/robots.txt$~'			=> ['WebsiteController', 'robots'],
	'~^/sitemap.xml$~'		=> ['WebsiteController', 'sitemap'],
	'~^/manifest.json$~'		=> ['WebsiteController', 'manifest'],
];
 
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

foreach($routes as $pattern => $handler) {
	if(preg_match($pattern, $path, $matches)) {

		// Remove the first match (the full path)
		array_shift($matches);

		$controller = new $handler[0];
		$method = $handler[1];

		// for success pages
		if(empty($matches) && !empty($handler[2])) {
			$matches[] = $handler[2];
		}

		call_user_func_array([$controller, $method], $matches);
		exit;
	}
}

// ERROR 404 is here
(new WebsiteController())->error404();
