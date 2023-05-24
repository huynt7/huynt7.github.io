window.onload = setup;
function setup(){
	document.getElementById("button").addEventListener("click", go);
	document.getElementById("output").addEventListener("click", copy);
}

function setStatus(status, error = false) {
	var helpText = document.getElementById("help-text");
	
	helpText.innerText = status;
	
	if (error) {
helpText.style.color = "darkred";
	} else {
helpText.style.color = "#227300";
	}
}
  
function go(){
	var linkId = document.getElementById("input").value;
	var idExtractor = /\/d\/(.+?)(?:\/|#|\?|$)/;
	var result = idExtractor.exec(linkId);
	
	var outputBox = document.getElementById("output");
	
	
	if (!result) {
outputBox.value = "";
setStatus("Error: Invalid URL", true);
outputBox.disabled = true;
return;
	}
	
	var finalLink = "https://drive.google.com/uc?export=download&id=" + result[1];
	outputBox.disabled = false;
	outputBox.value = finalLink;
	setStatus("Success! Click the output link to copy it to your clipboard");
}

function copy() {
	if (this.disabled) {
return;
	}
	
	this.select();
	var copied = document.execCommand("copy");
	
	if (copied) {
setStatus("Link copied to clipboard!");
	} else {
setStatus("Couldn't copy link to clipboard. Please copy it manually.", true);
	}
}
