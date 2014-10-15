<?php 
include(__DIR__.'/config.php'); 


// Add style for csource
$prot['stylesheets'][] = 'css/source.css';


// Create the object to display sourcecode
//$source = new CSource();
$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..'));


$prot['title'] = "Visa källkod";

$prot['main'] = "<h1>Visa källkod</h1>\n" . $source->View();


include(PROT_THEME_PATH);
