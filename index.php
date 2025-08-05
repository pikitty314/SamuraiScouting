<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Samurai Scouting System</title>
		 <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css"> 
		 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
		 
		 <style>
			body {
				font-family: Roboto, sans-serif;
			}
		 </style>
	</head>
	<body class="w3-container w3-asphalt">
		<div id="welcome">
			<h1>Log In For Scouting</h1>
			
			<form id="login-form">
				<label>Name</label>
				<input id="scouter-name-input" class="w3-input w3-round" type="text">
				<br>
				
				<label>Match Number</label>
				<input id="match-number-input" class="w3-input w3-round" type="number">
				<br>
				
				<label>Robot Number</label>
				<input id="robot-number-input" class="w3-input w3-round" type="number">
				<br>
				
				<button id="login-btn" class="w3-btn w3-cobalt">Scout Robot</button>
			</form>
		</div>
		
		<div id="scouting">
			<h1 id="match-title"></h1>
			
			<label>Auton Notes</label>
			<textarea id="auton-notes" class="w3-input w3-round" rows="4" autofocus></textarea>
			<br>
			
			<label>Teleop Notes</label>
			<textarea id="teleop-notes" class="w3-input w3-round" rows="8"></textarea>
			<br>
			
			<label>Endgame Notes</label>
			<textarea id="endgame-notes" class="w3-input w3-round" rows="3" autofocus></textarea>
			<br>
			
			<button id="save-report-btn" class="w3-btn w3-cobalt">Save Report</button>
		</div>
		
		<script src="script.js"></script>
	</body>
</html>
