<?php

header('Content-Type: text/xml; charset=utf-8');

?>
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
    <loc><?php echo $_SERVER['REQUEST_SCHEME']; ?>://<?php echo $_SERVER['HTTP_HOST']; ?>/</loc>
    <lastmod><?php echo date('Y-m-d'); ?></lastmod>
  </url>
</urlset>
