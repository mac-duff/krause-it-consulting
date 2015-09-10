
<div class="projects">
<div class="content_header">
 <h1>Das kostenlose HobbyAthletes.com Rating Widget ist da!</h1>
   <div id="hobbyathletes"></div>
   <div>
	<p>Das HobbyAthletes Rating Widget wurde entwickelt um auf der offiziellen Webseite eines Sportevents genutzt zu werden, z.B. Triathlon, Marathon, Halbmarathon und andere L&auml;ufe, Radrennen (Strasse oder Mountainbike). Es kann aber auch in Blogs oder Artikeln &uuml;ber eine bestimmte Verantstaltung eingebaut werden. Das Widget zeigt immer die aktuelle Bewertung der Veranstaltung auf HobbyAthletes.com an.</p> 

	<p>Hier ist eine <span class="highlighted">DEMO INSTALLATION</span> f&uuml;r die Veranstaltung <a href="http://hobbyathletes.com/tools/event-rating-widget" target="_blank" class="highlighted" title="Install rating widget for 6. SWISS Int. Seelandtriathlon Murten 2011">6. SWISS Int. Seelandtriathlon Murten 2011</a>. Eine Installation auf Ihrer Seite muss angepasst werden. Wenn Sie das Widget f&uuml;r eine andere Veranstaltung installieren, wovon wir ausgehen, achten Sie besonders auf die Zeile in BLAU (in dem HTML Code Abschnitt unten), da diese Zeile je nach Event angepasst werden muss.</p>
	<p>Den unten ROT markierten Code muessen Sie auf Ihrer Webseite einbauen.</p>
   </div>
<h3>Schauen wir uns jede ROTE Zeile genauer an:</h3>
<p><span class="highlighted">1. Die CSS Datei:</span> Diese Zeile sollte in dem &lt;head&gt; Abschnitt Ihrer Webseite (zwischen &lt;head&gt; und &lt;/head&gt;) ihren Platz finden</p>
<p><span class="highlighted">2. Der Rating Widget Platzhalter:</span> Hier wird sp&auml;ter das Widget angezeigt und hier kann der Besucher der Webseite draufklicken um eine Bewertung abzugeben. Eine Eingabemaske wird aufpoppen und der Besucher kann diese ausf&uuml;llen und dann abschicken.</p>
<p><span class="highlighted">3. Die jQuery Datei:</span> jQuery (ein JavaScript Framework) ist evtl. bereits auf Ihrer Webseite geladen. Bevor Sie diese Zeile hinzuf&uuml;gen, vergewissern Sie sich, dass diese oder eine &auml;hnliche nicht bereits vorhanden ist. Suchen Sie einfach ob irgendwas mit <code>jquery</code> in Ihrem HTML Code bereits existiert. Wenn das der Fall ist, brauchen Sie diese Zeile nicht hinzuzuf&uuml;gen. Die Version der geladenen jQuery Datei muss mindestens 1.6.x oder h&ouml;her sein. In unserem Beispiel ist es Version 1.11.1. Sollten Sie Hilfe ben&ouml;tigen, lassen Sie es uns wissen.</p>
<p><span class="highlighted">4. Die Rating Widget JavaScript Datei:</span> W&auml;hrend von erfahrenen Web-Designern die CSS Datei und auch die jQuery Datei vom lokalen Server geladen werden kann, muss die Rating Widget JavaScript Datei immer von dem HobbyAthletes.com Server geladen werden.<br />
Sollte der vorige Satz keinen Sinn f&uuml;r Sie machen, kein Problem, einfach ignorieren und wie im Beispiel die Datei auf Ihrer Seite einbauen (mit der richtigen Versionsnummer HA-Rating-xxxx.js ). Den richtigen Namen der Datei finden Sie auf der <a href="http://hobbyathletes.com/tools/event-rating-widget" target="_blank" class="highlighted" title="Install rating widget for 6. SWISS Int. Seelandtriathlon Murten 2011">Installationsseite auf HobbyAthletes.com</a>. Stellen Sie sicher, dass Sie dort die richtige Veranstaltung ausgew&auml;hlt haben.</p> 

<p>WICHTIG: Die jQuery Datei und die Rating Widget JavaScript Datei Zeilen k&ouml;nnen auch in dem <code>&lt;head&gt;</code> Teil des Codes eingebaut werden, wie die CSS Datei. Die Reihenfolge der Zeilen muss jedoch immer die Gleiche bleiben.</p>

 		   
 <h3>Lassen Sie uns nun den Code begutachten</h3>
</div>
           <div class="code_snippet">
 			<pre>
<?php echo htmlentities('  <!DOCTYPE html> 
  <html lang="en">         
   <head>
    <meta charset="UTF-8">
    <link rel="canonical" href="http://krause-it-consulting.com/rating-widget.php"/>
    <title>Krause IT Consulting</title>
    <link rel="stylesheet" type="text/css" href="/css/main-03-2014.css" />
    <link rel="stylesheet" type="text/css" href="/jquery/jquery-ui.min.css" />
    ').'<span style="color: red;">'.htmlentities('<link rel="stylesheet" type="text/css" href="http://hobbyathletes.com/widget/ha_rating_widget.css" />').'</span>'.htmlentities('
   </head>
   <body>
    <header>
     <img src="img/logo-no-font-white.png" alt="White logo of Krause IT Consulting"/>
     <h1>Krause IT Consulting Rating Widget</h1>
     <a href="/impressum.php" title="Impressum of Krause IT Consulting">Impressum</a>
     <a href="/" title="Impressum of Krause IT Consulting">Home</a>
    </header>
    <div class="bodyDiv">
     <h1>The free HobbyAthletes.com Rating Widget is here!</h1>
     ').'<span style="color: red;">'.htmlentities('<div id="hobbyathletes"></div>').'</span>'.htmlentities('
    <div>
     <p>The HobbyAthletes Rating Widget has been developed to be used on the official website of an event, like triathlon, marathon, 
     half marathon other runs, cycling races (road bike or mountain bike), but also in blogs or articles, where you write about a 
     particular event.</p> 
     <p>This is a <span class="highlighted">demo installation</span> for event <span class="highlighted">6. SWISS Int. Seelandtriathlon
      Murten 2011</span> to make it easier for you to implement the widget into your site. If you are intending to install the widget 
      for some other event, which we are assuming, please pay special attention to the filename in blue (in the code section), as it 
      will be a different for your installation.</p>
    </div>
    <p> We are intending to make this process as easy as possible or you, if you have questions, remarks, ideas, please 
     <a href="mailto:info@krause-it-consulting.com" title="Feedback to Krause IT-Consulting">let us know</a></p>
   </div>
   <footer>    
    <h2>Footer text</h2>
   </footer>
   ').'<span style="color: red;">'.htmlentities('<script src="http://hobbyathletes.com/widget/jquery-1.11.1.js"></script>').'</span>'.htmlentities('
   <script src="/jquery/jquery-ui.min.js"></script>
   ').'<span style="color: red;">'.htmlentities('<script src="http://hobbyathletes.com/widget/').'<span style="color: blue;">'.htmlentities('ha-rating-25.js').'</span>'.htmlentities('"></script>').'</span>'.htmlentities(' 
   </body>
  </html>'); 
 ?>			</pre>
 		   </div>
 		   <p> Wir versuchen diesen Prozess so einfach wie m&ouml;glich zu machen. Wenn Sie dennoch Probleme, Fragen oder Anmerkungen haben, lassen Sie es <a href="mailto:info@krause-it-consulting.com" title="Feedback to Krause IT-Consulting">uns wissen</a></p>
</div>
