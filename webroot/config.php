<?php

//raportera error
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly


//path 
define('PROT_INSTALL_PATH', __DIR__ . '/..');
define('PROT_THEME_PATH', PROT_INSTALL_PATH . '/theme/render.php');


//bootstrapping
include(PROT_INSTALL_PATH . '/src/bootstrap.php');


session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();


$prot = array();


/**
 * Site wide settings.
 *
 */
$prot['lang']         = 'sv';
$prot['title_append'] = ' | Protein en webbtemplate';

$prot['header'] = <<<EOD
<img class='sitelogo' src='img/prot.jpg' alt='Prot Logo'/>
<span class='sitetitle'>Protein webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;

$prot['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Mikael Roos (me@mikaelroos.se) | <a href='https://github.com/mosbth/Anax-base'>Anax på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;

$prot['stylesheets'] = array('css/style.css');
$prot['favicon']    = 'favicon.ico';

$prot['navbar'] = array(
  'class' => 'nb-plain',
  'items' => array(
    'hem'         => array('text'=>'Hem',         'url'=>'me.php',          'title' => 'Min presentation om mig själv'),
    'redovisning' => array('text'=>'Redovisning', 'url'=>'report.php', 'title' => 'Redovisningar för kursmomenten'),
    'kallkod'     => array('text'=>'Källkod',     'url'=>'source.php',      'title' => 'Se källkoden'),
  ),
  'callback_selected' => function($url) {
    if(basename($_SERVER['SCRIPT_FILENAME']) == $url) {
      return true;
    }
  }
);
