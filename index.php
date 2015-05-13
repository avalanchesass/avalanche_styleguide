<?php

if (is_file('vendor/autoload.php')) {
  require 'vendor/autoload.php';
}

$styleguide = new cultusrego(array(
  'source' => '../css/avalanche.css',
  'title' => '',
  'description' => 'a modular SASS framework',
  'template_folder' => __DIR__ . '/theme/template',
  'twig_cache' => FALSE,
));
$styleguide->render();
