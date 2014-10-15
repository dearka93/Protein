<?php 
include(__DIR__.'/config.php'); 


$prot['title'] = "Redovisning";



$prot['main'] = <<<EOD
<h1>Redovisning</h1>
<p>Detta är en exempelsida som visar hur Anax ser ut och fungerar.</p>
EOD;



include(PROT_THEME_PATH);
