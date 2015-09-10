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
		<link rel="stylesheet" type="text/css" href="http://dev.hobbyathletes.com/widget/ha_rating_widget.css" />
<?php ENDIF; ?>
    </head>
    <body>
     <div class="container">
        <header>
            <img src="/img/logo-no-font-white.png" alt="White logo of Krause IT Consulting" class="greylogo"/>
            <a href="javascript:;" onclick="openMenue();" class="menuebutton"> </a>
            <h1><?php echo $pagetitle; ?></h1>
            <nav class="mm" id="mm">
            <a href="/" title="Home" <?php if($content==""){echo "class=\"active\"";}; ?>>Home</a>
            <a href="/about/project-examples" title="Our Expertise" <?php if($content=="en_projects"){echo "class=\"active\"";}; ?>>Our Expertise</a>
            <a href="/tools/rating-widget" title="The HobbyAthletes.com Rating Widget" <?php if($content=="en_rating-widget"){echo "class=\"active\"";}; ?>>Rating Widget</a>
            </nav>
        </header>
        <div class="bodyDiv">
<div>Angaben gemäß § 5 TMG:</div>
            <br/>
            <br/>
            <h2>Firma:</h2>
            <p>Edwin Krause<br />
            Krause IT Consulting<br />
            Im Reipert 2<br />
            D-54316 Lampaden<br />
            Germany<br />
            </p>
            <p>
            <h2>Kontakt:</h2>
            <table style="margin-left:0px;">
             <tr>
              <td>Telefon:</td>
              <td>+49 157 56713883</td>
             </tr>
             <tr>
              <td>E-Mail:</td>
              <td>info@krause-it-consulting.com</td>
             </tr>
            </table>
            </p>
            <p> </p>
            <h2>Umsatzsteuer-ID:</h2>
            <p>Umsatzsteuer-Identifikationsnummer gemäß §27 a Umsatzsteuergesetz:<br />
            DE-291778361</p>
            <p> </p>
            <!-- Disclaimer -->
            <h1>Haftungsausschluss (Disclaimer)</h1>
            <p> </p>
            <p><strong>Haftung für Inhalte</strong></p> <p>Als Diensteanbieter sind wir gemäß § 7 Abs.1 TMG für eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich. Nach §§ 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht verpflichtet, übermittelte oder gespeicherte fremde Informationen zu überwachen oder nach Umständen zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen. Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon unberührt. Eine diesbezügliche Haftung ist jedoch erst ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung möglich. Bei Bekanntwerden von entsprechenden Rechtsverletzungen werden wir diese Inhalte umgehend entfernen.</p> <p><strong>Haftung für Links</strong></p> <p>Unser Angebot enthält Links zu externen Webseiten Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich. Die verlinkten Seiten wurden zum Zeitpunkt der Verlinkung auf mögliche Rechtsverstöße überprüft. Rechtswidrige Inhalte waren zum Zeitpunkt der Verlinkung nicht erkennbar. Eine permanente inhaltliche Kontrolle der verlinkten Seiten ist jedoch ohne konkrete Anhaltspunkte einer Rechtsverletzung nicht zumutbar. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Links umgehend entfernen.</p> <p><strong>Urheberrecht</strong></p> <p>Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der Grenzen des Urheberrechtes bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers. Downloads und Kopien dieser Seite sind nur für den privaten, nicht kommerziellen Gebrauch gestattet. Soweit die Inhalte auf dieser Seite nicht vom Betreiber erstellt wurden, werden die Urheberrechte Dritter beachtet. Insbesondere werden Inhalte Dritter als solche gekennzeichnet. Sollten Sie trotzdem auf eine Urheberrechtsverletzung aufmerksam werden, bitten wir um einen entsprechenden Hinweis. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Inhalte umgehend entfernen.</p><p> </p>
            
            <!-- Datenschutz -->
            <h1>Datenschutzerklärung:</h1>
            <p> </p>
            <p><strong>Datenschutzerklärung für die Nutzung von Facebook-Plugins (Like-Button)</strong></p> <p>Auf unseren Seiten sind Plugins des sozialen Netzwerks Facebook (Facebook Inc., 1601 Willow Road, Menlo Park, California, 94025, USA) integriert. Die Facebook-Plugins erkennen Sie an dem Facebook-Logo oder dem "Like-Button" ("Gefällt mir") auf unserer Seite. Eine Übersicht über die Facebook-Plugins finden Sie hier: <a href="http://developers.facebook.com/docs/plugins/" target="_blank">http://developers.facebook.com/docs/plugins/</a>.<br /> Wenn Sie unsere Seiten besuchen, wird über das Plugin eine direkte Verbindung zwischen Ihrem Browser und dem Facebook-Server hergestellt. Facebook erhält dadurch die Information, dass Sie mit Ihrer IP-Adresse unsere Seite besucht haben. Wenn Sie den Facebook "Like-Button" anklicken während Sie in Ihrem Facebook-Account eingeloggt sind, können Sie die Inhalte unserer Seiten auf Ihrem Facebook-Profil verlinken. Dadurch kann Facebook den Besuch unserer Seiten Ihrem Benutzerkonto zuordnen. Wir weisen darauf hin, dass wir als Anbieter der Seiten keine Kenntnis vom Inhalt der übermittelten Daten sowie deren Nutzung durch Facebook erhalten. Weitere Informationen hierzu finden Sie in der Datenschutzerklärung von facebook unter <a href="http://de-de.facebook.com/policy.php" target="_blank"> http://de-de.facebook.com/policy.php</a></p> <p>Wenn Sie nicht wünschen, dass Facebook den Besuch unserer Seiten Ihrem Facebook-Nutzerkonto zuordnen kann, loggen Sie sich bitte aus Ihrem Facebook-Benutzerkonto aus.</p><p> </p>
            <p><strong>Datenschutzerklärung für die Nutzung von Google +1</strong></p> <p><i>Erfassung und Weitergabe von Informationen:</i><br /> Mithilfe der Google +1-Schaltfläche können Sie Informationen weltweit veröffentlichen. über die Google +1-Schaltfläche erhalten Sie und andere Nutzer personalisierte Inhalte von Google und unseren Partnern. Google speichert sowohl die Information, dass Sie für einen Inhalt +1 gegeben haben, als auch Informationen über die Seite, die Sie beim Klicken auf +1 angesehen haben. Ihre +1 können als Hinweise zusammen mit Ihrem Profilnamen und Ihrem Foto in Google-Diensten, wie etwa in Suchergebnissen oder in Ihrem Google-Profil, oder an anderen Stellen auf Websites und Anzeigen im Internet eingeblendet werden.<br /> Google zeichnet Informationen über Ihre +1-Aktivitäten auf, um die Google-Dienste für Sie und andere zu verbessern. Um die Google +1-Schaltfläche verwenden zu können, benötigen Sie ein weltweit sichtbares, öffentliches Google-Profil, das zumindest den für das Profil gewählten Namen enthalten muss. Dieser Name wird in allen Google-Diensten verwendet. In manchen Fällen kann dieser Name auch einen anderen Namen ersetzen, den Sie beim Teilen von Inhalten über Ihr Google-Konto verwendet haben. Die Identität Ihres Google-Profils kann Nutzern angezeigt werden, die Ihre E-Mail-Adresse kennen oder über andere identifizierende Informationen von Ihnen verfügen.<br /> <br /> <i>Verwendung der erfassten Informationen:</i><br /> Neben den oben erläuterten Verwendungszwecken werden die von Ihnen bereitgestellten Informationen gemäß den geltenden Google-Datenschutzbestimmungen genutzt. Google veröffentlicht möglicherweise zusammengefasste Statistiken über die +1-Aktivitäten der Nutzer bzw. gibt diese an Nutzer und Partner weiter, wie etwa Publisher, Inserenten oder verbundene Websites. </p><p> </p>
            <p><strong>Datenschutzerklärung für die Nutzung von Twitter</strong></p> <p>Auf unseren Seiten sind Funktionen des Dienstes Twitter eingebunden. Diese Funktionen werden angeboten durch die Twitter Inc., Twitter, Inc. 1355 Market St, Suite 900, San Francisco, CA 94103, USA. Durch das Benutzen von Twitter und der Funktion "Re-Tweet" werden die von Ihnen besuchten Webseiten mit Ihrem Twitter-Account verknüpft und anderen Nutzern bekannt gegeben. Dabei werden auch Daten an Twitter übertragen.</p> <p>Wir weisen darauf hin, dass wir als Anbieter der Seiten keine Kenntnis vom Inhalt der übermittelten Daten sowie deren Nutzung durch Twitter erhalten. Weitere Informationen hierzu finden Sie in der Datenschutzerklärung von Twitter unter <a href="http://twitter.com/privacy" target="_blank">http://twitter.com/privacy</a>.</p> <p>Ihre Datenschutzeinstellungen bei Twitter können Sie in den Konto-Einstellungen unter <a href="http://twitter.com/account/settings" target="_blank">http://twitter.com/account/settings</a> ändern.</p> <p> </p>
            <p><i>Quellenangaben: <a rel="nofollow" href="http://www.e-recht24.de/artikel/datenschutz/6590-facebook-like-button-datenschutz-disclaimer.html" target="_blank">Facebook Disclaimer</a>, <a rel="nofollow" href="http://www.google.com/intl/de/+/policy/+1button.html" target="_blank">Google +1 Datenschutzerklärung</a>, <a rel="nofollow" href="http://twitter.com/privacy" target="_blank">Datenschutzerklärung für Twitter</a></i></p>
        </div> 
       
        <footer>    
            <a href="/impressum.php" title="Impressum of Krause IT Consulting">Impressum</a>
        </footer>
      </div>
     <script src="/js/jquery-1.10.2/jquery.min.js"></script>
     <script src="/jquery/jquery-ui.min.js"></script>
<?php IF($content=="de_rating-widget" or $content=="en_rating-widget"): ?>
     <script src="http://dev.hobbyathletes.com/widget/HA-Rating-25.js"></script>
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