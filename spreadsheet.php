<?php 
	$action = $_GET["action"];
	if(isset($action) && $action == "getJsonData"){
		$shareLink="https://docs.google.com/spreadsheets/d/e/2PACX-1vQUIc9q8kWBVNBjKT94QbWdAS5foUnUnyl8eVZJk_PQ7tR-BLLDr0JW7ZurLkKCeAiKI0OsIYAx3uJ7/pub?gid=2129746393&single=true&output=csv";
		$csv= file_get_contents($shareLink);
		$array = array_map("str_getcsv", explode("\n", $csv));
		$json = json_encode($array);
		echo $json;
		exit;
	}
?>

<html class="no-js" lang="">
	<head>
		
		<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Meine Stadt</title>
	 <meta name="description" content="Trinkwasserqualität in NRW">
	 <meta name="author" content="Entezari, Kasakowskij, Mariami, Weber">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/owl.theme.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/prettyPhoto.css">
	<link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/transitions.css">
	<link rel="stylesheet" href="css/color.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="icon" href="images\tropfen.png" />
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
		
		<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  
	</head>
	<style type="text/css">
<!--.tabel  {border-collapse:collapse;border-spacing:0;}
.tab td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tab th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
!-->
.tableResults {
    border-collapse: collapse;
    width: 50%;
}

.tableResults th, td {
    text-align: center;
    padding: 8px;
}
.tableResults th {
    background-color: #4071b4;
    color: white;
    font-size: 16px;
    font-weight: bold;
}

.tableResults tr:nth-child(even){background-color: #f2f2f2}

</style>
	<body>
		
<body>
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div class="preloader-bg">
		<div class="preloader">
			<div class="preloader-top">
				<div class="preloader-top-sun">
					<div class="preloader-top-sun-bg"></div>
					<div class="preloader-top-sun-line preloader-top-sun-line-0"></div>
					<div class="preloader-top-sun-line preloader-top-sun-line-45"></div>
					<div class="preloader-top-sun-line preloader-top-sun-line-90"></div>
					<div class="preloader-top-sun-line preloader-top-sun-line-135"></div>
					<div class="preloader-top-sun-line preloader-top-sun-line-180"></div>
					<div class="preloader-top-sun-line preloader-top-sun-line-225"></div>
					<div class="preloader-top-sun-line preloader-top-sun-line-270"></div>
					<div class="preloader-top-sun-line preloader-top-sun-line-315"></div>
				</div>
			</div>
			<div class="preloader-bottom">
				<div class="preloader-bottom-line preloader-bottom-line-lg"></div>
				<div class="preloader-bottom-line preloader-bottom-line-md"></div>
				<div class="preloader-bottom-line preloader-bottom-line-sm"></div>
				<div class="preloader-bottom-line preloader-bottom-line-xs"></div>
			</div>
		</div>
	</div>
	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="wrapper" class="tg-haslayout">
		<!--************************************
				Header Start
		*************************************-->
		<header id="header" class="tg-header tg-haslayout">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<strong class="logo">
							<a href="index.html"> <img src="images/logo222.png" alt="image description"></a>
						</strong>
						<div class="tg-rightarea">
							<nav id="tg-nav" class="tg-nav">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									<ul class="navbar-right">
										<li ><a href="index.html">Trinkwasserqualität</a>
										
									</li>
									<li><a href="karte.html">&uuml;bersichtskarte NRW</a></li>
									<li class="active"><a href="#">Trinkwasserwerte</a>
									 <ul>
											<li><a href="stadt.html">Stadtauswahl</a></li>
											<li><a href="vergleich2.html">Städtevergleich</a></li>
										</ul>
									</li>
                              <li>
                                 <a href="#">Eigenschaften</a>
                                 <ul>
                                    <li><a href="info.html">Inhaltsstoffe</a></li>
                                    <li><a href="grenzwerte.html">Grenzwerte</a></li>
                                 </ul>
                              </li>
									<li> <a href="#">About</a>
				                         <ul>
											<li><a href="team.html">Das Team</a></li>
											<li><a href="impressum.html">Impressum</a></li>
											<li><a href="lizenzen.html">Lizenzen</a></li>
											<li><a href="daten.html">Daten</a></li>
										</ul>
									</li>
                              
									
									<!--<li>
										<a href="#"><span>pages</span><i class="fa fa-navicon"></i></a>
										<ul>
											<li><a href="team.html">team</a></li>
											<li><a href="contactus.html">contact us</a></li>
										</ul>
									</li> !-->
									</ul>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Banner Start
		*************************************-->
		<div class="tg-main-section tg-banner tg-haslayout parallax-window" data-parallax="scroll" data-bleed="100" data-speed="0.2" data-image-src="images/slider/img1.jpg">
			<div class="container">
			<ul class="tg-breadcrumb">
				<li>Werte</li>
				<li>Meine Stadt</li>
			</ul>
			</div>
		</div>
		<!--************************************
				Banner End
		*************************************-->
		<!--************************************

		
		<!--************************************
				Main Start
		*************************************-->
		<main id="main" class="tg-haslayout">
			
		<section class="tg-main-section tg-haslayout">
        <div class="container">
         <div class="row">
          <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
            <div class="tg-section-head">
            	<h2>Trinkwasserwerte meiner Region</h2>
					  </div>
					  						
					  <div class="tg-description">
						<p>
						
					<script type="text/javascript">
						var x = document.location;
						x = x.toString();
						x = x.split('=')[1];;
						x = decodeURIComponent(x);
						document.write("<p>Gewählt wurde die Stadt: " + x.bold()+ "</p>");
					</script>
					
						<br><br>
						Auf der folgenden Tabelle sind alle Trinkwasserwerte deiner Region aufgelistet. 
						<br><br>
						Mehr Informationen zu den wichtigsten Parametern erhälst du auf unserer <a href="info.html">Informationsseite</a>.
						<br><br>
						<p align="center"><a href="stadt.html"><b>Zurück zur Stadtauswahl</b></a></p>
						
						</p><br>

					  </div>

		<table id="tableResults" class="tableResults">
		<tr><th>Parameter</th><th>Einheit</th><th>Messwerte</th></tr>
		</table>
		
		<p align="center"><i><b>Legende:</b> <br>	
        Härte: 1= weich, 2 = mittel, 3 = hart	 <br>	
        TOC = Organisch gebundener Kohlenstoff <br>
        n.a = nicht angegeben <br>
        n.n = nicht nachgewiesen </i></p>
		<br><br>
		<p align="center"><a href="stadt.html"><b>Zurück zur Stadtauswahl</b></a></p>
		
		</div>
        </div>
      </div>
      </div>
      </section>
		
		</main>
		<!--************************************
				Main End
		*************************************-->
		
			<script src="js/vendor/jquery-pulgin.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/prettyPhoto.js"></script>
	<script src="js/isotope.pkgd.js"></script>
	<script src="js/hoverdir.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/parallax.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/countTo.js"></script>
	<script src="js/swiper.min.js"></script>
	<script src="js/nicescroll.js"></script>
	<script src="js/handlebars.min.js"></script>
	<script src="js/gmap3.js"></script>
	<script src="js/main.js"></script>
		
		
			<script type="text/javascript">
			$(document).ready(function(){
				if($.urlParam("stadt") == undefined){
					document.location.href = "stadt.html";
					return;
				}
				
				$.ajax({
					url: document.location.href.split('?')[0] + "?action=getJsonData",
					success: gotSpreadsheetData,
					dataType:"json",
					contentType: "text/json",
					error: function(a,b,c){
						alert("Fehler beim Abfragen der Daten\n" + a);
					}
				});
			});
			
			function gotSpreadsheetData(response){
				
				var cityIndex = 2;
				var cityColumn = -1;
				var cityRow = response[cityIndex];
				var resultTable = $("#tableResults");
				for(var i = 0; i < cityRow.length; i++){
					if(cityRow[i].toLowerCase() == $.urlParam("stadt").toLowerCase()){
						cityColumn = i;
						break;
					}
				}
				
				for(var x = 16; x < response.length -3; x++){
					var currentRow = response[x];
					var headerColumnData = currentRow[0];
					var unitColumnData = currentRow[1];
					var cityColumnData = currentRow[cityColumn];
					
					resultTable.append("<tr><td>" + headerColumnData + "</td><td>" + unitColumnData + "</td><td>" + cityColumnData + "</td></tr>");
					
					if(x == 3) {
						x += 11;
					}
				}
			}
			
			$.urlParam = function(name){
				var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
				if (results==null){
				   return null;
				}
				else{
				   return decodeURI(results[1]) || 0;
				}
			}
		</script>

<!--************************************
				Footer Start
		*************************************-->
		<footer id="footer" class="tg-haslayout">
			<div class="four-columns haslayout">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-6 width-footercol">
							<div class="col aboutus">
								<strong class="logo">
									<a href="index.html"><img src="images/logo222.png" alt="image description"></a>
								</strong>
								<div class="tg-description">
									<p>
									<!-- Bei der "Drinking Water Quality Group" <br>handelt es sich um ein studentisches Gruppenprojekt,
									dass im Rhamen des Masterseminars "Wissensrepräsentation und Wissensmanagement" entstanden ist.
									<!--Für die "Drinking Water Quality Group" ist die Qualität des Trinkwasser besonders wichtig und
									möchte dies in Form von Graphiken, Karten und informativen Texten näher bringen.-->
									</p>
								</div>
								<!--<ul class="tg-socialicon">
									<li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul> -->
							</div>
						</div>
						
						<div class="col-md-3 col-sm-6 col-xs-6 width-footercol">
                          <div class="col tg-recent-post">
                         <!-- <div class="tg-heading-border">
                            <!-- <h3>Über uns</h3> -->
                       <!--  </div> -->
                         <div class="tg-description">
									<p>
									Bei der "Drinking Water Quality Group" <br>handelt es sich um ein studentisches <br>Gruppenprojekt,
									dass im Rhamen des <br>Masterseminars "Wissensrepräsentation <br>und Wissensmanagement" entstanden ist.
									</p>
								</div>
                          </div>
                           </div>
						
						
						<div class="col-md-3 col-sm-6 col-xs-6 width-footercol">
            <div class="col tg-recent-post">
              <div class="tg-heading-border">
                <h3>Über uns</h3>
              </div>
              <ul>
                <li> <a href="team.html">
                  <p>Unser Team</p>
                  </a> </li>
                <li> <a href="team.html#projekt">
                  <p>Das Projekt</p>
                  </a> </li>
              </ul>
            </div>
          </div>
          
          <div class="col-md-3 col-sm-6 col-xs-6 width-footercol">
            <div class="col tg-tags">
              <div class="tg-heading-border">
                <h3>Lizenz & Recht</h3>
              </div>
              <ul>
                   <li><a href="impressum.html">Impressum</a></li>
				<li><a href="lizenzen.html">Lizenzen</a></li>
                <li><a href="daten.html">Daten</a></li>
              </ul>
            </div>
          </div>
          
					<!--	<div class="col-md-3 col-sm-6 col-xs-6 width-footercol">
							<div class="col tg-flicker">
								<div class="tg-heading-border">
									<h3>Flickr Stream</h3>
								</div>
								<ul>
									<li>
										<a href="images/thumbs/thumb-04.jpg" data-rel="prettyPhoto[flickr]"><img src="images/flickr/img0123.jpg" alt="image description"></a>
									</li>
									<li>
										<a href="images/thumbs/thumb-05.jpg" data-rel="prettyPhoto[flickr]"><img src="images/flickr/img1.jpg" alt="image description"></a>
									</li>
									<li>
										<a href="images/thumbs/thumb-06.jpg" data-rel="prettyPhoto[flickr]"><img src="images/flickr/1.jpg" alt="image description"></a>
									</li>
									<li>
										<a href="images/thumbs/thumb-07.jpg" data-rel="prettyPhoto[flickr]"><img src="images/flickr/2.jpg" alt="image description"></a>
									</li>
									<li>
										<a href="images/thumbs/thumb-08.jpg" data-rel="prettyPhoto[flickr]"><img src="images/flickr/3.jpg" alt="image description"></a>
									</li>
									<li>
										<a href="images/thumbs/thumb-09.jpg" data-rel="prettyPhoto[flickr]"><img src="images/flickr/4.jpg" alt="image description"></a>
									</li>
								</ul>
							</div>
						</div>-->
					</div>
				</div>
			</div>
			<div class="bottom-bar haslayout">
				<div class="container">
					<div class="copyright"><p>Copyright 2016 &copy; <a href ="http://freecssthemes.com/" target="_blank" title="Click to get this template!"/>FreeCssThemes</a> | All Rights Reserved</p></div>
				</div>
			</div>
		</footer>
		<!--************************************
				Footer End
		*************************************-->
			</div>
	<!--************************************
			Wrapper End
	*************************************-->

	
	</body>
</html>
