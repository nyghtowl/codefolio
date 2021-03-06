<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Member Dashboard | Codefolio</title>

    <?php include "header.php" ?>

</head>
<body>
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

<?php include "navbar.php" ?>

    <div class="container-fluid">
        <h1>Dashboard</h1>
        <div class="row-fluid">
            <div class="span3">
                <div href="#" class="thumbnail">
                    <img src="img/neo.jpg" alt="">
                </div>
            </div>
            <div class="span6">
                <h2>Neo</h2>
                <p><a href="#">neo@twitter.com</a></p>
                <p><a href="#">linkedin.com/neo</a></p>
            </div>
            <div class="span3">
                <div class="well">
                    <h3>Badges</h3>
                </div>
                <img style="width:60%" src="img/friends.png" />
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <div class="well">
                    <button class="btn btn-large"><i class="icon-eye-open"></i> <b>50</b> Followers</button>
                    <button class="btn btn-large"><i class="icon-eye-open"></i> <b>12</b> Following</button>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span6">
                <div class="well">
                    <img style="width:60%" src="img/PersonPie.png" />
                </div>
            </div>
            <div class="span6">
                <div class="well">
                    <img src="img/committhing.png" />
                </div>
            </div>
        </div>
        <hr>
        <footer>
            <p>&copy; Codefolio 2012</p>
        </footer>
    </div> <!-- /container -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')</script>

<script src="js/libs/bootstrap/bootstrap.min.js"></script>
<script src="js/libs/highcharts/highcharts.js"></script>
<script src="js/script.js"></script>
<script>
	var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
</body>
</html>
