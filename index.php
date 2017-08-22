<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sign up for the Steam Game Giveaway">
    <meta name="author" content="Allen McNichols">
	<link rel="shortcut icon" href="favicon.jpg" />
    <title>Steam Game Giveaway</title>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" media="all"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<style>
	img.steam { max-width:500px; }
	img.register { max-width:500px; }
	.googForm {width:100%;height: 1040px;}
	header.header-image {
		background: url("./header.jpeg") no-repeat center center scroll !important;
	}
	body.bg {
		background-image: url("./paper.jpg");
	}
	.announce {
		font-size: 2rem;
		color: #F00;
	}
	.YouTube { text-align: center; }
	</style>
	<script>
		$(document).ready(function(){
			$('#games').DataTable();
		});
	</script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/one-page-wonder.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
</head>

<body class="bg">
    <!-- Navigation -->
	<marquee class="announce">This Weeks Game: <?php $game = file_get_contents("thisweek.txt"); echo $game; ?></marquee>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#steam">Steam</a>
                    </li>
                    <li>
                        <a href="#register">Register</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Full Width Image Header -->
    <header class="header-image">
        <div class="headline">
            <div class="container">
                <h1>Steam Game Giveaway</h1>
                <h2>Winners Every Week!</h2>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <hr class="featurette-divider">
		<!-- This weeks game YouTube Trailer -->
		<div class="YouTube">
		<h3>This weeks game is <?php echo $game; ?></h3>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/hkidRykOGOA" frameborder="0" allowfullscreen></iframe>
		</div>
        <!-- First Featurette -->
        <div class="featurette" id="about">
		<h2 class="featurette-heading">Available Games</h2>
		<?php
	$games = file_get_contents("games.json");
	$games = json_decode($games,1);
	?>
	<table id="games">
		<thead>
		<tr>
			<th>Title</th>
		</tr>
		</thead>
	<?php
	foreach($games as $game) {
		echo "<tr><td>$game</td></tr>";
	}
	?>
	</table>
	<?php
	/*$json = json_encode($games,1);
	var_dump($json);
	file_put_contents("games.json", $json); */
?>

        </div>

        <hr class="featurette-divider">

        <!-- Second Featurette -->
        <div class="featurette" id="steam">
            <img class="featurette-image img-circle img-responsive pull-left steam" src="steam.png">
            <h2 class="featurette-heading">Games Redeemed By Key
                <span class="text-muted">using your Steam account.</span>
            </h2>
            <p class="lead">All of the games in this list will be awarded by their activation key. You will need a Steam account in order to redeem these and play the games. If you don't have an account go to: <a href="https://store.steampowered.com/join/" target="_new">Steam: Create an Account</a>. Be sure to add <a href="http://steamcommunity.com/profiles/76561198113646187/" target="_new">ME</a> to your friends list! </p>
        </div>

        <hr class="featurette-divider">

        <!-- Third Featurette -->
        <div class="featurette" id="register">
            <img class="featurette-image img-responsive pull-right register" src="register.png">
            <h2 class="featurette-heading">Fill out the form
            </h2>
            <p class="lead">Winners will be drawn at random once per week on Friday. Only one entry is necessary and you can quit anytime you want (just let me know). Winners will be announced by email to registrants.</p>
			<iframe src="https://docs.google.com/forms/d/e/1FAIpQLScMe4FuaaXY0-U7qQf33-CtADSdWTGKSzdZvX-O2_j5mvInwA/viewform?embedded=true" frameborder="0" marginheight="0" marginwidth="0" class="googForm">Loading...</iframe>
        </div>

        <hr class="featurette-divider">

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; DocMcStuffins 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <!--<script src="js/jquery.js"></script>-->

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
