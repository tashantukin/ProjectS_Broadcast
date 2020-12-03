<!DOCTYPE html>
<html lang="en">
<head>
<?php 
// error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
// ini_set('display_errors', '0');
// error_reporting(0);
?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tashmanian DEVil</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
</head>
<body>
<!--- Two Column Section -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 col-lg-4">
			<h2>Fight No. ---</h2>
			<!-- MERON CARD -->
			<!-- <div class="col-md-12-col-md-6"> -->
				<div class="card" id ="merondiv">
					<!-- <div class="card-body"> -->
						<!-- <div class="container-fluid padding"> -->
							<div class="row padding">
								<div class="col-md-6">
									<h1 class="display-3 card-title lead">MERON</h1>
									<h1 class="display-3 card-title lead">ODDS</h1>
								</div>	
								<!-- BET COUNT -->
							
								<!-- <div class="col-md-6">
										
								</div> -->
								<!-- ODDS COUNT -->
								<div class="col-md-6">
								<h1 id= "oddsMeron" class="display-1 lead">    
											<script type ="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
											// $('#count').prepend("-");
											</script>
											<script type ="text/javascript">
												$(document).ready(function() {
													setInterval(function() {                           
														$('#oddsMeron').load('./ajax/betOddsMeron.php')
														
													},3000);
												});
											</script>
								</h1>
								</div>
							</div>
						<!-- </div> -->
					</div>
				<!-- </div> -->
			<!-- </div> -->


			<!-- <div class="col-md-12-col-md-6"> -->
					<div class="card" id = "waladiv">
						<!-- <div class="card-body"> -->
							<!-- <div class="container-fluid padding"> -->
								<div class="row">
									<div class="col-md-6">
										<h1 class="display-3 card-title lead">WALA</h1>
										<h1 class="display-3 card-title lead">ODDS</h1>
									</div>	
									<!-- BET COUNT -->
									
									<!-- ODDS COUNT -->
									<div class="col-md-6">
									<h1 id= "oddsWala" class="display-1 card-title lead">    
											<script type ="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
											// $('#count').prepend("-");
											</script>
											<script type ="text/javascript">
												$(document).ready(function() {
													setInterval(function() {                           
														$('#oddsWala').load('./ajax/betOddsWala.php')
														
													},3000);
												});
											</script>
									</h1>
									</div>
								</div>
					</div>
					<hr>
					<div class="card" id="announcement">
				
					<h1 class="display-3 card-title">PREVIOUS FIGHTS:</h1>
					</div>	

							<!-- PREVIOUS FIGHTS CARDS -->
					<div class="row">
					<?php
							include("./db.php");
							$sql = "SELECT FightNo, FightWinner,TotalBetCount,TotalBetAmount, TotalWinner, TotalWinningAmount, TotalClaimed, TotalUnclaimed FROM tblFight where Status != 1 order by FightID desc limit 3";
							$resultset = mysqli_query($conn, $sql);// or die("database error:". mysqli_error($conn));  
							while( $record = mysqli_fetch_assoc($resultset)) { ?>
						<div class="col-lg-4">									
							<div class="card" id="announcement">
									<h1 class=""><?php echo  $record['FightNo'] ?></h1> 
									<h2 class=""><?php echo  $record['FightWinner'] ?></h2>
							</div>
						</div>
							
							<?php } ?>
					</div>
						<!-- 						
						<div class="card" id="announcement">
							<h1 class="display-4 card-title">ANNOUNCEMENT:</h1>
						</div>				 -->
					</div>							

<div class="col-md-8 col-lg-8"> 
			<img src="img/sampling.jpg" style="width:100% height:50%" class="img-fluid" >

		</div>
			</div><!--/.col-->

		<!-- second column -->

		

		<div class="col-md-12 col-lg-12"> 
				<marquee behavior="scroll" direction="left" class="display-3 card-title">Your scrolling text goes here</marquee>
		 </div>


<!--- Footer -->

</body>
</html>

<!-- View in Browser: Drew's #1 Trending YouTube Tutorial -->
<!-- <div class="youtube-tutorial">
	<a href="http://bit.ly/build-4-websites" target="_blank">
    <img src="https://www.w3newbie.com/wp-content/uploads/nuno-youtube-banner-img.png">
  </a>
</div> -->
<!-- End View in Browser: Drew's #1 Trending YouTube Tutorial -->


