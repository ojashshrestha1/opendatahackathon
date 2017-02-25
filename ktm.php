<?php 
ob_start();
include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Guardian of Health</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/hosp.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css" type="text/css" media="screen">

    <!-- CSS Page Style -->
    <link rel="stylesheet" href="assets/css/pages/page_invoice.css">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="assets/css/themes/default.css" id="style_color">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <script type="text/javascript">
window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer",
	{
		title:{
			text: "Candle Stick chart using risingColor property"
		},
		zoomEnabled: true,
		axisY: {
			includeZero:false,
			title: "Prices",
			prefix: "$ "
		},
		axisX: {
			interval:2,
			intervalType: "month",
			valueFormatString: "MMM-YY",
			labelAngle: -45
		},
		data: [
		{
			type: "candlestick",
			risingColor: "#F79B8E",
			dataPoints: [
				{x: new Date(2012,01,01),y:[5198, 5629, 5159, 5385]},
				{x: new Date(2012,02,01),y:[5366, 5499, 5135, 5295]},
				{x: new Date(2012,03,01),y:[5296, 5378, 5154, 5248]},
				{x: new Date(2012,04,01),y:[5254, 5279, 4788, 4924]},
				{x: new Date(2012,05,01),y:[4910, 5286, 4770, 5278]},
				{x: new Date(2012,06,01),y:[5283, 5348, 5032, 5229]},
				{x: new Date(2012,07,01),y:[5220, 5448, 5164, 5258]},
				{x: new Date(2012,08,01),y:[5276, 5735, 5215, 5703]},
				{x: new Date(2012,09,01),y:[5704, 5815, 4888, 5619]},
				{x: new Date(2012,10,01),y:[5609, 5885, 5548, 5879]},
				{x: new Date(2012,11,01),y:[5878, 5965, 5823, 5905]}
			]
		}
		]
	});
	chart.render();
}
    </script>
    <script src="assets/script/canvasjs.min.js"></script>
</head>

<body>
    <!--=== Style Switcher ===-->
    <i class="style-switcher-btn fa fa-cogs hidden-xs"></i>
    <div class="style-switcher animated fadeInRight">
        <div class="theme-close"><i class="icon-close"></i></div>
        <div class="theme-heading">Theme Colors</div>
        <ul class="list-unstyled">
            <li class="theme-default theme-active" data-style="default" data-header="light"></li>
            <li class="theme-blue" data-style="blue" data-header="light"></li>
            <li class="theme-orange" data-style="orange" data-header="light"></li>
            <li class="theme-red" data-style="red" data-header="light"></li>
            <li class="theme-light last" data-style="light" data-header="light"></li>

            <li class="theme-purple" data-style="purple" data-header="light"></li>
            <li class="theme-aqua" data-style="aqua" data-header="light"></li>
            <li class="theme-brown" data-style="brown" data-header="light"></li>
            <li class="theme-dark-blue" data-style="dark-blue" data-header="light"></li>
            <li class="theme-light-green last" data-style="light-green" data-header="light"></li>
        </ul>
        <div style="margin-bottom:18px;"></div>
        <div class="theme-heading">Layouts</div>
        <div class="text-center">
            <a href="javascript:void(0);" class="btn-u btn-u-green btn-block active-switcher-btn wide-layout-btn">Wide</a>
            <a href="javascript:void(0);" class="btn-u btn-u-green btn-block boxed-layout-btn">Boxed</a>
        </div>
    </div><!--/style-switcher-->
    <!--=== End Style Switcher ===-->

    <div class="wrapper">
        <!--=== Header ===-->


        <div class="header">

            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="fa fa-bars"></span>
                        </button>
                        <a class="navbar-brand" href="index-2.html">
                        </a>
                    </div>

                   <div class="collapse navbar-collapse navbar-responsive-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown active">
                            <a href="index.php">
                                Home
                            </a>
                            
                        </li>
                        
                        <li class="dropdown">
                              <a href="hospitalList.php">

                              Hospital List

                                </a>

                            
                           
                        </li>
                        <li class="dropdown">
                            <a href="graph.php" >
                                Hospital Status
                            </a>
                            
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                About Us
                            </a>
                            
                        </li>         
                        <li>
                            <i class="search fa fa-search search-btn"></i>
                            <div class="search-open">
                                <div class="input-group animated fadeInDown">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">
                                        <button class="btn-u" type="button">Go</button>
                                    </span>
                                </div>
                            </div>    
                        </li>
                    </ul>
                </div>
                </div>
            </div>

        </div>
        <!--=== End Header ===-->
        <!--=== Breadcrumbs ===-->
        <div class="breadcrumbs">
            <div class="container">
                <h1 class="pull-left">Types of Health Institutions</h1>
                <ul class="pull-right breadcrumb">
                    <li><a href="index-2.html">Home</a></li>
                    <li><a href="#">Health Institutions</a></li>
                    <li class="active">Pie Charts</li>
                </ul>
            </div><!--/container-->
        </div><!--/breadcrumbs-->
        <!--=== End Breadcrumbs ===-->
        <!--=== Content Part ===-->
        <div class="container content">
            <!--Invoice Header-->
            <div class="row invoice-header">
                <div class="col-xs-6">
                    <!--<img src="assets/img/img.jpg" alt="">-->
                    <!-- You also can use a title instead of image
                    <h2 class="pull-left">Product Invoice</h2>
                    -->
                </div>
                <div class="col-xs-6 invoice-numb">
                    Listed Today / 25, February 2017
                    <span>Click on the Institute</span>
                </div>
            </div>
            <!--End Invoice Header-->
            <!--Invoice Table-->
            <div class="panel panel-grey margin-bottom-40">
                <div class="panel-heading">
                    <h3 class="panel-title">2017 Data</h3>
                </div>
                <div class="panel-body">
                    <p>
                    
                   </p>
                </div>
              
                <table class="table table-striped invoice-table">
                   
                   
                    <thead>
                        <tr>
                           
                            <th>SN</th>
                            <th>Hospital Name</th>
                            <th>Location</th>
                            <th>District</th>
                                                
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php  $i=1;
$query="select * from allhospital_list where District='ktm' ";
$result=mysqli_query($connect,$query);
while($res=mysqli_fetch_array($result))
{
?>    <tr>
<td><?php echo $i ?> </td>
<td><?php echo $res['name'] ?> </td>
<td><?php echo $res['location'] ?> </td>
<td><?php echo $res['District'] ?> </td>

<?php 
$i++;
}
?>
                                              

                    </tbody>
                </table>
                <div class="panel-body">
                    <p>
                    
                   </p>
                </div>
            </div>
            <!--End Invoice Table-->


        </div><!--/container-->
        <!--=== End Content Part ===-->
        
            
            <!-- JS Global Compulsory -->
            <script type="text/javascript" src="assets/plugins/jquery-1.10.2.min.js"></script>
            <script type="text/javascript" src="assets/plugins/jquery-migrate-1.2.1.min.js"></script>
            <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
            <!-- JS Implementing Plugins -->
            <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
            <script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>
            <!-- JS Page Level -->
            <script type="text/javascript" src="assets/js/app.js"></script>
            <script type="text/javascript">
                jQuery(document).ready(function () {
                    App.init();
                    App.initSliders();
                });
            </script>
            <!--[if lt IE 9]>
            <script src="assets/plugins/respond.js"></script>
            <script src="assets/plugins/html5shiv.js"></script>
        <![endif]-->
            <script type="text/javascript">
                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', 'UA-29166220-1']);
                _gaq.push(['_setDomainName', 'htmlstream.com']);
                _gaq.push(['_trackPageview']);

                (function () {
                    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                })();
            </script>
</body>

<!-- Mirrored from htmlstream.com/preview/unify-v1.5/page_invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Oct 2014 02:04:26 GMT -->
</html> 