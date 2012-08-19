<?php
phpinfo(); die;
include('vendor/httpful.phar');

/*extract($_GET);

$url = 'http://www.ohloh.net/accounts/'.$account_id.'.xml?api_key=xbtJiPKjbBMgpz79ftYIcA';

$response = \Httpful\Request::get($url)->send();*/
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title></title>
    <?php include "header.php" ?>
</head>
<body>
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

    <?php include "navbar.php" ?>

    <div class="container">

      <div class="row">
        <div class="span12">
            <div id="pie-container"></div>
          <h1>Codefolio API Crawler</h1>
            <h2>Response</h2>
            <?php
            var_dump($url);
            var_dump($response->body);
            ?>
            <pre>
            <?php
            print_r($response->body);
                //var_dump((array)$response->body->result->account->languages);
                foreach ((array)$response->body->result->account->languages as $language) {
                    //$languages[] = arra('name'=> $language )
                    foreach ($language as $language2) {
                        var_dump($language2);
                        var_dump($language2->name);
                        $languages[] = array((string)$language2->name, number_format((string)$language2->total_lines_changed, 2, '.', ''));
                    }
                }
            var_dump($languages);
            $json = json_encode($languages, JSON_NUMERIC_CHECK);
                echo $json;
            ?>
            </pre>
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
<script>
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'pie-container',
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: 'Browser market shares at a specific website, 2010'
            },
            tooltip: {
                formatter: function() {
                    return '<b>'+ this.point.name +'</b>: '+ this.percentage +' %';
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        color: '#000000',
                        connectorColor: '#000000',
                        formatter: function() {
                            return '<b>'+ this.point.name +'</b>: '+ this.percentage +' %';
                        }
                    }
                }
            },
            series: [{
                type: 'pie',
                name: 'Browser share',
                data: <?=$json?> /*[
                    ['Firefox',   45.0],
                    ['IE',       26.8],
                    {
                        name: 'Chrome',
                        y: 12.8,
                        sliced: true,
                        selected: true
                    },
                    ['Safari',    8.5],
                    ['Opera',     6.2],
                    ['Others',   0.7]
                ]*/
            }]
        });
    });
</script>
</body>
</html>
