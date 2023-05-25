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

$(document).ready(function(){
	$("#but").click(function(){
		var add = $("#cde").val();
		var drive = add.indexOf("google.com/file/d/index.html");
		var drive2 = add.indexOf("google.com/open");
		var dbox = add.indexOf("dropbox.com/s");
		var odrive = add.indexOf("onedrive.live.com");
		if (drive != -1) {
			var start = add.indexOf("d/index.html");
			var end = add.indexOf("/view");
			var reString = add.slice(start + 2, end);
			var link = "https://drive.google.com/uc?export=download&id=" + reString + "";
			$("#linkpaste").val(link);
			$("#linkpaste").select();
		} else if (drive2 != -1) {
			var start = add.indexOf("id=");
			var end = add.length;
			var reString = add.slice(start+3, end);
			var link = "https://drive.google.com/uc?export=download&id=" + reString + "";
			$("#linkpaste").val(link);
			$("#linkpaste").select();
		} else if (dbox != -1) {
			var link = add.replace("?dl=0", "?dl=1");
			$("#linkpaste").val(link);
			$("#linkpaste").select();
		} else if (odrive != -1) {
			var link = add.replace("redir", "download");
			var link = add.replace("embed", "download");
			$("#linkpaste").val(link);
			$("#linkpaste").select();
		} else {
			$("#linkpaste").val('Xin lỗi, có vẻ như link bạn vừa dán chưa chia sẻ công khai hoặc không đúng! Vui lòng kiểm tra lại!');
		}
	});
});
