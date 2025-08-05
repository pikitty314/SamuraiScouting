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
				<input id="scouter-name-input" class="w3-input" type="text">
				<br>
				
				<label>Match Number</label>
				<input id="match-number-input" class="w3-input" type="text">
				<br>
				
				<label>Robot Number</label>
				<input id="robot-number-input" class="w3-input" type="text">
				<br>
				
				<button id="login-btn" class="w3-btn w3-cobalt">Scout Robot</button>
			</form>
		</div>
		
		<div id="scouting">
			<h1 id="match-title"></h1>
		</div>
		
		<script>
			// Class to contain scouting reports
			class ScoutingReport {
				constructor(robotNumber, matchNumber) {
					this.robotNumber = robotNumber;
					this.matchNumber = matchNumber;
				}
			}
			
			var currentReport;
			
			document.getElementById("scouting").style.display = "none"; // hide scouting form to start
			
			const welcomeForm = document.getElementById("login-form");
						
			function startScouting() {
				document.getElementById("welcome").style.display = "none";
				document.getElementById("scouting").style.display = "block";
				
				currentReport = new ScoutingReport(document.getElementById("robot-number-input").value, document.getElementById("match-number-input").value);
				console.log("Scouting " + currentReport.robotNumber + " in match " + currentReport.matchNumber);
				document.getElementById("match-title").innerHTML = "Scouting " + currentReport.robotNumber + " in match " + currentReport.matchNumber;
			}
			
			
			document.getElementById("login-btn")
				.addEventListener("click", function (event) {
					event.preventDefault();
					startScouting();
				});
		</script>
	</body>
</html>
