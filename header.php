<!DOCTYPE HTML>
<html lang="en">
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>transathletes.org</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap-cerulean.min.css" rel="stylesheet" media="screen" />
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet" media="screen" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css' />

    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="../excanvas.min.js"></script><![endif]-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/jquery.flot.js"></script>
    <script language="javascript" type="text/javascript" src="js/jquery.flot.dashes.js"></script>
    <script language="javascript" type="text/javascript" src="js/jquery.flot.JUMlib.js"></script>
    <script language="javascript" type="text/javascript" src="js/jquery.flot.mouse.js"></script>
    <script language="javascript" type="text/javascript" src="js/jquery.flot.candlestick.js"></script>
    <script language="javascript" type="text/javascript" src="js/jquery.flot.time.js"></script>
    <script language="javascript" type="text/javascript" src="js/bootstrap.min.js"></script>
    <script language="javascript" type="text/javascript">
			$(function() {
				var url = window.location.pathname;
				url.replace(/http:\/\/transathletes.org/,'');
				url.replace(/http:\/\/127.0.0.1/,'');
		
				console.log("url is " + url);
				console.log($('ul.nav li a[href="'+ url +'"]'));
				// Will only work if string in href matches with location
				$('ul.nav li a[href="'+ url +'"]').parent().addClass('active');
				$('.tooltip').tooltip();
			});
		</script>
    <style type="text/css">
    	body {
/*     		height: 100%; */
				font-size: 120%;
				line-height: 140%;
    	}
    	p {
    		margin-bottom: 25px;
    	}
			.alert-default {
				border-color: #bce8f1;
			}

    	ol li {
    		margin-bottom: 15px;
    		margin-left: 40px;
    	}
			#content-container p 
			{
				margin: 10px 0px;
			}
    	#graph, #hormone-graph {
    		width: 50%;
    		height: 400px;
    		margin: 20px;
    	}
    	#content-container {
    		margin-bottom: 20px;
    		margin-top: 20px;
    	}
    	footer {
    		background-color: #f5f5f5;
    		height: 60px;
    	}
    	.choice-item {
    		margin-left: 10px;
    	}
    	h2 {
    		margin-top: 30px;
    	}
     @media (max-width: 767px) {
        footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
				#graph, #hormone-graph {
					width: 400px;
					height: 400px;
				}
      }
      .faq-question {
      	font-family: 'Noto Sans', sans-serif;
      	color: #b0b0b0;
      	font-size: 150%;
      	line-height: 1.5em;
      }	
      .lead a {
      	color: #202020;
      }
      
      .alert.sidebar ol {
      	margin: 0 0 10px 0;
      }
      .alert.sidebar ol li {
      	margin-left: 25px;
      }
      
      .alert.sidebar {
      	border: 1px solid #444;
      	background-color: #ffffff;
      	color: #555;
      	font-size: 80%;
      	padding: 8px 12px;
      }
      .alert.sidebar h4 {
      	color: #000;
      	margin-bottom: 10px;
      	font-size: 16px;
      }
    </style>
 </head>
    <body>
    <div class="container-fluid">
			<div class="navbar navbar-inverse">
				<div class="navbar-inner">
					<a class="brand" href="/">transathletes.org</a>
					<ul class="nav">
						<li><a href="/">Home</a></li>
						<li><a href="/skeletal.php">Body structure</a></li>
						<li><a href="/hormones.php">Hormones</a></li>
						<li><a href="/genetics.php">Genetics</a></li>
<!-- 
						<li><a href="brain.php">Brain</a></li>
						<li><a href="puberty.php">Puberty</a></li>
						<li><a href="prenatal.php">Before birth</a></li>
 -->
						<li><a href="/socialization.php">Socialization</a></li>
						<li><a href="/faq.php">FAQ</a></li>
					</ul>
					<a class="btn btn-primary pull-right" target="_blank" href="https://twitter.com/TransAthletes">
						<i class="icon-twitter-sign icon-large"></i>
						Follow us on Twitter for updates!	
					</a>
				</div>
			</div> <!-- .navbar -->
			<div id="content-container">
<!-- 
				<div class="alert alert-info">
					<p>This site is under construction. We are building it out as we continue our research.</p>
					<p>If you would like to help, please contact us on Twitter: <a href="http://twitter.com/TransAthletes">@TransAthletes</a>.</p>
				</div>
 -->
			<!-- end of header template -->