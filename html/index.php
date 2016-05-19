<!DOCTYPE html>
<?php

	include("connect.php"); 	
	
	$link=Connection();

	$result=mysql_query("SELECT * FROM `tempLog` ORDER BY `timeStamp` DESC",$link);
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free coming soon template with jQuery countdown">
    <meta name="author" content="http://bootstraptaste.com">
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <title>WebuildGreenHouse</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/bootstrap-theme.css" rel="stylesheet">

    <!-- siimple style -->
    <link href="assets/css/style.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

	<div id="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<h1>WeBuildGreenHouse</h1>
					<h2 style="font-weight:bold;" class="subtitle">Powered By RaspberryPi 3</h2>
					<h2  class="subtitle">We're working hard to improve our website and we'll ready to launch after</h2>
					<!--<div id="countdown"></div>-->
					
					<h1>Arduino Data</h1>
							
					<table style="background-color:#fff;" border="1" cellspacing="1" cellpadding="1">
					<tr>
						<td>&nbsp;Timestamp&nbsp;</td>
						<td>&nbsp;Temperature &nbsp;</td>
						<td>&nbsp;Moisture &nbsp;</td>
						<td>&nbsp;Luminosity &nbsp;</td>
					</tr>

				  <?php 
					  if($result!==FALSE){
						 while($row = mysql_fetch_array($result)) {
							printf("<tr><td> &nbsp;%s </td><td> &nbsp;%s&nbsp; </td><td> &nbsp;%s&nbsp; </td><td> &nbsp;%s&nbsp; </td></tr>", 
							   $row["timeStamp"], $row["temperature"], $row["humidity"], $row["luminosity"]);
						 }
						 mysql_free_result($result);
						 mysql_close();
					  }
				  ?>

			   </table>
					
					<h1>Opensprinler</h1>
					<iframe class="arduino" style="width:80%;height:600px;" src="http://nickarm.noip.me:81"></iframe>
					
					<!--
					<form class="form-inline signup" role="form">
					  <div class="form-group">
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email address">
					  </div>
					  <button type="submit" class="btn btn-theme">Get notified!</button>
					</form>		
					-->
				</div>
				
			</div>
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
						<p class="copyright">Copyright &copy; 2016. Al rights reserved. MonitorYourGreenHouse by Leisos</p>
                        <!-- 
                            All links in the footer should remain intact. 
                            Licenseing information is available at: http://bootstraptaste.com/license/
                            You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=WeBuild
                        -->
				</div>
			</div>		
		</div>
	</div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.countdown.min.js"></script>
	<script type="text/javascript">
  $('#countdown').countdown('2016/08/08', function(event) {
    $(this).html(event.strftime('%w weeks %d days <br /> %H:%M:%S'));
  });
</script>
  </body>
</html>