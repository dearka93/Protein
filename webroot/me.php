<?php 
include(__DIR__.'/config.php'); 


$prot['title'] = "Om mig";



$prot['main'] = <<<EOD
<article>
<h1>Om mig själv</h1>
  <figure class="pic">      
<img id="minbild" src="img/me.jpg" width="240" alt="Bild på mig"> 
    </figure>
  <p>Hejsa Mitt namn är Guanglei Huang, är 21år gammal och bor i Göteborg. Tycker allmänt att det är kul om IT, speciell om Webbprogrammering, eftersom man kan visa upp sina webbsidor för alla besökare vart man än befinner sig. </p>
<p>Utöver denna kurs så läser jag även Systemvetenskap på Göteborgs Universitet, vilket är ganska relaterad till webbprogrammering.</p>
<p>På min fritid så brukar jag umgås med vänner, träna på gym, titta på filmer... och självkalrt mat! Min nya hobby är att lära mig åka Pennyboard!</p>
</article>
EOD;



include(PROT_THEME_PATH);
