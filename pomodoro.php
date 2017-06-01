<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initialscale=1">

	<title>Pomodoro Clock</title>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/pomodoro.css">
</head>
<body>

<div id="wrapper">
	<div id="header"><h3>Free Code Camp</h3></div>
	<div id="clock">
		<div>
			<div>
				<div id="timer"><h1>25:00</h1></div>
				<div >
					<button id="action" class="btn btn-default">Start</button>
				</div>
			</div>
		<div class="container-fluid">
		<div id="row" id="timings">
			<div id="break" class="col-md-4 option"><button class="chgbreak">+</button>5<button class="chgbreak">-</button></div>
			<div id="total" class="col-md-4 option"><button class="chgtotal">+</button>25<button  class="chgtotal">-</button></div>
			<div id="number" class="col-md-4 option"><button class="chgcycle">+</button>1<button class="chgcycle">-</button></div>
		</div>
		</div>		
	</div>
	</div>
	
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/pomodoro.js"></script>

</body>
</html>