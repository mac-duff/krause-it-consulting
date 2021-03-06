
<div class="projects">
<div class="content_header">
 <h1>The free HobbyAthletes.com Rating Widget is here!</h1>
   <div id="hobbyathletes"></div>
   <div>
	<p>The HobbyAthletes Rating Widget has been developed to be used on the official website of an event, like triathlon, marathon, half marathon other runs, cycling races (road bike or mountain bike), but also in blogs or articles, where you write about a particular event.</p> 

	<p>This is a <span class="highlighted">DEMO INSTALLATION</span> for event <a href="http://hobbyathletes.com/tools/event-rating-widget" target="_blank" class="highlighted" title="Install rating widget for 6. SWISS Int. Seelandtriathlon Murten 2011">6. SWISS Int. Seelandtriathlon Murten 2011</a> to make it easier for you to implement the widget into your site. If you’re intending to install the widget for some other event, which we are assuming, please pay special attention to the filename in blue (in the code section), as it will be a different for your installation.</p>
	<p>Below highlighted code in red is what you need to implement into your website.</p>
   </div>
<h3>Let’s go through each red line in detail:</h3>
<p><span class="highlighted">1. The CSS file:</span> This code should be added in the &lt;head&gt; section of your website (between &lt;head&gt; and &lt;/head&gt;)</p>
<p><span class="highlighted">2. The Rating Widget Placeholder:</span> This is where the widget is displayed and where you will click to fill and send the popping-up rating form.</p>
<p><span class="highlighted">3. The jQuery file:</span> A similar file may already be on your website. Before adding this line, check if there is anything with <code>jquery</code> in your code. If jQuery is already on your side, you don't need to add this line. Keep in mind that we need jQuery Version 1.6.x or higher. In this Example we have 1.11.1. If you need help with this, please let us know.</p>
<p><span class="highlighted">4. The Rating Widget JavaScript file:</span> While experienced web designers can transfer the CSS file and the jQuery file to their webserver and reference the link locally, the Rating Widget JavaScript file needs to remain with the provided path and so loaded from the hobbyathletes.com webserver.<br />
If you don’t understand the sentence above, don’t worry, ignore it and copy the code from the example (with the correct version of the file HA-Rating-xxxx.js )</p> 

<p>Important: The jquery file and the Rating Widget JavaScript file lines can be also added to the header section like the CSS file. It is although compulsory to remain the order of the files.</p>

 		   
 <h3>Let’s have a look at the example code</h3>
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
 		   <p> We are intending to make this process as easy as possible or you, if you have questions, remarks, ideas, please <a href="mailto:info@krause-it-consulting.com" title="Feedback to Krause IT-Consulting">let us know</a></p>
</div>
