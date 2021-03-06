<?php

if (is_file('vendor/autoload.php')) {
  require 'vendor/autoload.php';
}

$styleguide = new cultusrego(array(
  'source' => '../css/avalanche.css',
  'title' => '',
  'description' => 'a modular SASS framework',
  'asset_path' => 'theme/',
  'template_folder' => array(__DIR__ . '/theme/template', __DIR__ . '/theme/vendor/cultusrego_theme_default/template'),
  'twig_cache' => FALSE,
));
$styleguide->render();
