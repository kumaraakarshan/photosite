<?php

class WebsiteController {
	public function index() {
		require($_SERVER['DOCUMENT_ROOT'].'controller/index.php');
	}

	public function babyfotos() {
		require($_SERVER['DOCUMENT_ROOT'].'controller/babyfotos.php');
	}

	public function neugeborenenfotos() {
		require($_SERVER['DOCUMENT_ROOT'].'controller/neugeborenenfotos.php');
	}

	public function schwangerschaftsfotos2() {
		require($_SERVER['DOCUMENT_ROOT'].'controller/schwangerschaftsfotos-2.php');
	}

	public function price() {
		require($_SERVER['DOCUMENT_ROOT'].'controller/price.php');
	}

	public function ueberuns() {
		require($_SERVER['DOCUMENT_ROOT'].'controller/ueber-uns.php');
	}

	public function photoshoot() {
		require($_SERVER['DOCUMENT_ROOT'].'controller/photoshoot.php');
	}

	public function tag_show() {
		require($_SERVER['DOCUMENT_ROOT'].'controller/tag_show.php');
	}
	public function blog_show($slug) {
		require($_SERVER['DOCUMENT_ROOT'].'controller/blog_show.php');
	}
	/* #################################################################### */
	public function terms() {
		require($_SERVER['DOCUMENT_ROOT'].'controller/terms.php');
	}

	public function privacy() {
		require($_SERVER['DOCUMENT_ROOT'].'controller/privacy.php');
	}

	public function contact($success = false) {
		require($_SERVER['DOCUMENT_ROOT'].'controller/contact.php');
	}
	public function footerlink() {
		require($_SERVER['DOCUMENT_ROOT'].'controller/footerlink.php');
	}

	/* #################################################################### */
	public function robots() {
		require($_SERVER['DOCUMENT_ROOT'].'controller/robots.php');
	}

	public function sitemap() {
		require($_SERVER['DOCUMENT_ROOT'].'controller/sitemap.php');
	}

	public function manifest() {
		require($_SERVER['DOCUMENT_ROOT'].'controller/manifest.php');
	}

	/* #################################################################### */
	public function error404() {
		require($_SERVER['DOCUMENT_ROOT'].'controller/error404.php');
	}
}
