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
	$canonicalURL = "http://krause-it-consulting.com";
	$meta_description="Company profile of Krause IT-Consulting. Developing solutions based on Lotus Notes and Web technologies";
	$pagetitle = "Krause IT Consulting";
	$de_link = "/de/";
	$de_title = "Krause IT-Consulting";
}else{
	switch($content){
		case "en_projects":
			$canonicalURL = "http://krause-it-consulting.com/en/projects/";
			$meta_description="Projects of Krause IT-Consulting. Developed solutions based on Lotus Notes and Web technologies";
			$pagetitle = "Krause IT Consulting - Our Expertise";
			$de_link = "/de/projekte/";
			$de_title = "Krause IT-Consulting - Was wir k&ouml;nnen";			
		break;
		case "en_rating-widget":
			$canonicalURL = "http://krause-it-consulting.com/en/rating-widget/";
			$meta_description="The HobbyAthletes.com Rating Widget. Here is a DEMO Installation of the widget including Installation guide";
			$pagetitle = "Krause IT Consulting - Rating Widget";
			$de_link = "/de/rating-widget/";
			$de_title = "Krause IT-Consulting - Rating Widget";
		break;
	}
}

?>
<!DOCTYPE html> 
<html lang="en">         
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="wot-verification" content="de592d4c8fd97a7bca3f"/>
        <link rel="canonical" href="<?php echo $canonicalURL; ?>"/>
        <link rel="shortcut icon" href="/krauseITC.ico" type="image/x-icon">
        <link rel="icon" href="/krauseITC.ico" type="image/x-icon">
        <meta name="keywords" content="Programming, Development, Optimizing, Lotus Script, Lotus Formula, PHP, JavaScript, JS, jquery, consultant, Information Technology, CRM, ORM, Content Management"/>
		<meta name="description" content="<?php echo $meta_description; ?>"/>
		<meta name="Robots" content="INDEX,FOLLOW"/>
        <title><?php echo $pagetitle; ?></title>
        <link rel="stylesheet" type="text/css" href="/css/main-01-2015.css" />
        <link rel="stylesheet" type="text/css" href="/jquery/jquery-ui.min.css">
<?php IF($content=="de_rating-widget" or $content=="en_rating-widget"): ?>
		<link rel="stylesheet" type="text/css" href="http://hobbyathletes.com/widget/ha_rating_widget.css" />
<?php ENDIF; ?>
    </head>
    <body>
     <div class="container">
    	<div class="language_switcher">
    		<a href="<?php echo $de_link; ?>" title="<?php echo $de_title; ?>"><i class="deutsch"></i>Deutsch</a>
    		<span><i class="english"></i>English</span>
    	</div>
        <header>
            <img src="/img/logo-no-font-white.png" alt="White logo of Krause IT Consulting" class="greylogo"/>
            <a href="javascript:;" onclick="openMenue();" class="menuebutton"> </a>
            <h1><?php echo $pagetitle; ?></h1>
            <nav class="mm" id="mm">
            <a href="/" title="Home" <?php if($content==""){echo "class=\"active\"";}; ?>>Home</a>
            <a href="/en/projects/" title="Our Expertise" <?php if($content=="en_projects"){echo "class=\"active\"";}; ?>>Our Expertise</a>
            <a href="/en/rating-widget/" title="The HobbyAthletes.com Rating Widget" <?php if($content=="en_rating-widget"){echo "class=\"active\"";}; ?>>Rating Widget</a>
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
             <h1>What we do:</h1>
             <p>With over 10 year of experience with Lotus Notes in all areas like development, engineering and support, we provide excellent well-performing, individual Lotus Notes / Domino solutions. With our knowledge grown over the past decade, we know how to take the IBM Domino plattform to it's limits.</p>
             <p><span style="color: rgb(17, 100, 24);font-weight: bold;">The word "Impossible" is not to be found in our dictionary.</span></p>
            </div>
            <div class="services">
            	<div><i><img id="image-1" src="/img/check.png" alt="checked"/></i>Lotus Notes Application development (Lotus Script, Lotus Formula, Xpages)</div>
            	<div><i><img id="image-2" src="/img/check.png" alt="checked"/></i>Web Application development (PHP, HTML, CSS, JavaScript, MySQL)</div>
            	<div><i><img id="image-3" src="/img/check.png" alt="checked"/></i>Preferred Framework for web-based applications <a href="http://laravel.com/" title="Laravel - The PHP framework for web artisans.">Laravel 4</a> </div>
            	<div><i><img id="image-4" src="/img/check.png" alt="checked"/></i>Additions and improvements with <a href="http://jquery.com/" title="The Write Less, Do More, JavaScript Library">jQuery</a>, <a href="http://www.dropzonejs.com/" title="DropzoneJS is an open source library that provides beautiful and easy to use drag'n'drop file uploads with image previews.">Dropzone</a> and other JavaScript based plug-ins.</div>
            	<div><i><img id="image-5" src="/img/check.png" alt="checked"/></i>Modifications and bug-fixing for existing applications based on any framework or without.</div>
            	<div><i><img id="image-6" src="/img/check.png" alt="checked"/></i>Adding responsive CSS3 designs on existing websites</div>
            </div>
            <br/><a href="mailto:info@krause-it-consulting.com">Contact us</a> today to get your estimate.
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
            <h2>Our Expertise:</h2>
            <p><a href="/en/projects/" title="Krause IT Consulting - Our Expertise">Next page</a></p>
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