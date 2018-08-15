var title, content, duration, exam;

document.getElementById('asterix').style.color = "#F44336";

function processPhase() {
	document.getElementById("tab1").style.display = "block";
	document.getElementById("tab2").style.display = "none";
	document.getElementById("status").innerHTML  = "Step 1 of 2";
}

function processPhase1() {
	title    = document.getElementById("c_title").value;
	content  = document.getElementById("textarea2").value;
	duration = document.getElementById("c_time").value;
	exam = document.getElementById("c_exam").value;

	if(title != "" && content != "") {
		document.getElementById("tab1").style.display = "none";
		document.getElementById("tab2").style.display = "block";
		document.getElementById("status").innerHTML  = "Step 2 of 2";
	} else {
		alert("Please fill up the mandatory field");
	}
}

function processPhaseSubmit() {
	document.getElementById("multiphase").method = "post";
	document.getElementById("multiphase").action = "course_upload";
	document.getElementById("multiphase").submit();
}
