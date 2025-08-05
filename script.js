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
	
	document.getElementById("robot-number-input").value = "";
	document.getElementById("match-number-input").value = "";
}


function saveReport() {
	document.getElementById("scouting").style.display = "none";
	document.getElementById("welcome").style.display = "block";
	
	currentReport.autonNotes = document.getElementById("auton-notes").value;
	currentReport.teleopNotes = document.getElementById("teleop-notes").value;
	currentReport.endgameNotes = document.getElementById("endgame-notes").value;
	
	document.getElementById("auton-notes").value = "";
	document.getElementById("teleop-notes").value = "";
	document.getElementById("endgame-notes").value = "";
}

function saveArrayToLocalStorage(key, array) {
	const string = JSON.stringify(array);
	localStorage.setItem(key, string)
}

function getArrayFromLocalStorageOrReturnEmpty(key) {
	
}


document.getElementById("login-btn")
	.addEventListener("click", function (event) {
		event.preventDefault();
		startScouting();
	});
	
document.getElementById("save-report-btn")
	.addEventListener("click", function (event) {
		event.preventDefault();
		saveReport();
	});
