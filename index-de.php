<?php 
$canonicalURL = "";
$meta_description = "";
$pagetitle = "";

if(!isset($_REQUEST["content"])){
	$content = "";
}else{
	$content = $_REQUEST["content"];
}
if(!$content){
	$canonicalURL = "http://krause-it-consulting.com/de/";
	$meta_description="Firmenprofil der Krause IT-Consulting. Wir entwickeln L&ouml;sungen basierend auf Lotus Notes oder modernen Webtechnologien";
	$pagetitle = "Krause IT-Consulting";
	$en_link = "/";
	$en_title = "Krause IT-Consulting";
}else{
	switch($content){
		case "de_projekte":
			$canonicalURL = "http://krause-it-consulting.com/de/projekte/";
			$meta_description="Projekte der Krause IT-Consulting. Eine Auswahl der implementierten L&ouml;sungen auf Basis Lotus Notes oder Webtechnologien";
			$pagetitle = "Krause IT Consulting - Was wir k&ouml;nnen";
			$en_link = "/en/projects/";	
			$en_title = "Krause IT-Consulting - Our Expertise";
		break;
		case "de_rating-widget":
			$canonicalURL = "http://krause-it-consulting.com/de/rating-widget/";
			$meta_description="Das HobbyAthletes.com Stern Bewertungs Widget. DEMO Installation des Stern Bewertungs Widget mit Installation Anleitung";
			$pagetitle = "Krause IT-Consulting - Rating Widget (de)";
			$en_link = "/en/rating-widget/";
			$en_title = "Krause IT-Consulting - Rating Widget";
		break;
	}
}

?>
<!DOCTYPE html> 
<html lang="de">         
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="<?php echo $canonicalURL; ?>"/>
        <link rel="shortcut icon" href="/krauseITC.ico" type="image/x-icon">
        <link rel="icon" href="/krauseITC.ico" type="image/x-icon">
        <meta name="keywords" content="Entwicklung, Programmierung, Optimierung, Lotus Script, Lotus Formula, PHP, JavaScript, JS, jquery, consultant, Information Technology, CRM, ORM, Content Management Systeme, CMS"/>
		<meta name="description" content="<?php echo $meta_description; ?>"/>
		<meta name="Robots" content="INDEX,FOLLOW"/>
        <title><?php echo $pagetitle; ?> - DE</title>
        <link rel="stylesheet" type="text/css" href="/css/main-01-2015.css" />
        <link rel="stylesheet" type="text/css" href="/jquery/jquery-ui.min.css">
<?php IF($content=="de_rating-widget" or $content=="en_rating-widget"): ?>
		<link rel="stylesheet" type="text/css" href="http://hobbyathletes.com/widget/ha_rating_widget.css" />
<?php ENDIF; ?>
    </head>
    <body>
     <div class="container">
    	<div class="language_switcher">
    		<span><i class="deutsch"></i>Deutsch</span>
    		<a href="<?php echo $en_link; ?>" title="<?php echo $en_title; ?>"><i class="english"></i>English</a>
    	</div>
        <header>
            <img src="/img/logo-no-font-white.png" alt="Weisses Logo der Krause IT Consulting" class="greylogo"/>
            <a href="javascript:;" onclick="openMenue();" class="menuebutton"> </a>
            <h1><?php echo $pagetitle; ?></h1>
            <nav class="mm" id="mm">
            <a href="/de/" title="Home" <?php if($content==""){echo "class=\"active\"";}; ?>>Home</a>
            <a href="/de/projekte/" title="Was wir k&ouml;nnen" <?php if($content=="de_projekte"){echo "class=\"active\"";}; ?>>Was wir k&ouml;nnen</a>
            <a href="/de/rating-widget/" title="The HobbyAthletes.com Rating Widget" <?php if($content=="de_rating-widget"){echo "class=\"active\"";}; ?>>Rating Widget</a>
            </nav>
        </header>
        <div class="bodyDiv">
<?php IF($content):

   $filename= "includes/".$content.".php";
   
   if (file_exists($filename)):
		include $filename;
   else:
   
		echo "<h4>-------------------------------------------------------------<br />
			Something went wrong here.... or feature not implemented yet<br />
			-------------------------------------------------------------</h4>";
   endif;

	
ELSE:?>
            <div class="content_header projects">
             <h1>Was wir tun:</h1>
             <p>Mit mehr als 10 Jahren Erfahrung mit Lotus Notes in allen Bereichen (Entwicklung, KPlanung und Instandhalting von Umgebungen mit 10000+ Benutzern und Support), ertellen wir herausragende, performante, individuell auf den Kunden abgestimmte Loesungen . Mit unserem ueber ein Jahrzehnt angereichertem Wissen reizen wir die Lotus Domino Plattform bis an ihre Grenzen aus.</p>
             <p><span style="font-weight: bold; color: rgb(17, 100, 24);">Das Wort "Unm&ouml;glich" ist uns nicht bekannt.</span></p>
            </div>
            <div class="services">
            	<div><i><img id="image-1" src="/img/check.png" alt="checked"/></i>Lotus Notes Applikation (Lotus Script, Lotus Formula, Xpages)</div>
            	<div><i><img id="image-2" src="/img/check.png" alt="checked"/></i>Entwicklung von Web Applikationen (PHP, HTML, CSS, JavaScript, MySQL)</div>
            	<div><i><img id="image-3" src="/img/check.png" alt="checked"/></i>Bevorzugtes Framework f&uuml;r web-basierende Applikationen: <a href="http://laravel.com/" title="Laravel - The PHP framework for web artisans.">Laravel 4</a> </div>
            	<div><i><img id="image-4" src="/img/check.png" alt="checked"/></i>Erg&auml;nzungen und Verbesserungen mit <a href="http://jquery.com/" title="The Write Less, Do More, JavaScript Library">jQuery</a>, <a href="http://www.dropzonejs.com/" title="DropzoneJS is an open source library that provides beautiful and easy to use drag'n'drop file uploads with image previews.">Dropzone</a> und anderen JavaScript Plugins. Wenn's kein Plugin f&uuml;r Ihre Idee gibt, machen wir eins.</div>
            	<div><i><img id="image-5" src="/img/check.png" alt="checked"/></i>&Auml;nderungen und Fehlerbehebung bei existierenden Applikationen, ob basierend auf einem Framework, CMS oder auch nicht.</div>
            	<div><i><img id="image-6" src="/img/check.png" alt="checked"/></i>Hinzufuegen der heute so wichtigen sogenannten "Responsive CSS3 Designs" f&uuml;r Telefone und Tablets auf bereits existierende Webseiten, ohne das bestehende Design zu &auml;ndern</div>
            </div>
            <br/><a href="mailto:info@krause-it-consulting.com">Schreiben Sie uns</a> f&uuml;r Preisanfragen.
            <hr />
            <img class="logo" src="/img/logo-kitc-1.png" alt="Logo of Krause IT Consulting"/>
            <div class="content_header">
             <strong>Krause IT Consulting</strong>
             <br/>Im Reipert 2
             <br/>D-54316 Lampaden
             <br/>Germany
             <br/>+49 157 56713883 / +34 600 058654
             <br/><a href="mailto:info@krause-it-consulting.com">info@krause-it-consulting.com</a>
             <br/><a href="http://krause-it-consulting.com">http://krause-it-consulting.com</a>
            </div>
            <hr />
            <h2>Was wir k&ouml;nnen:</h2>
            <p><a href="/de/projekte/" title="Krause IT Consulting - Was wir k&ouml;nnen">N&auml;chste Seite</a></p>
            <div style="height:50px;"> </div>
<?php ENDIF; ?>
        </div> 
       
        <footer>    
            <a href="/impressum.php" title="Impressum of Krause IT Consulting">Impressum</a>
        </footer>
      </div>
     <script src="/js/jquery-1.10.2/jquery.min.js"></script>
     <script src="/jquery/jquery-ui.min.js"></script>
<?php IF($content=="de_rating-widget" or $content=="en_rating-widget"): ?>
     <script src="http://hobbyathletes.com/widget/HA-Rating-25.js"></script>
<?php ENDIF; ?>
        <script>
		$( document ).ready(function() {
			showChecks(1);	
		});
		
		function showChecks(a){
			if(a<=6){
				$("#image-" + a ).delay(1000).show('blind',{ direction: "left" },500, function(){ showChecks(a + 1); });
			}	
		}
		
        
            // google tracking code
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        
          ga('create', 'UA-47465085-1', 'krause-it-consulting.com');
          ga('send', 'pageview');
          
        $('.menuebutton').click(function(){
        	if($('#mm').css('display')=="none"){
				$('#mm').css('display','block');
			}else{
				$('#mm').css('display','none');
			}
        });

     </script>
    </body>
</html>