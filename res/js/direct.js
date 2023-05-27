window.onload = setup;
function setup(){
	document.getElementById("button").addEventListener("click", getlink);
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
	var linkId = document.getElementById("cde").value;
	var idExtractor = /\/d\/(.+?)(?:\/|#|\?|$)/;	//tìm kiểu về Regex để hiểu mã
	
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

function getlink(){
		var add = $("#cde").val();
		var drive = add.indexOf("google.com/file/d/");
		var drive2 = add.indexOf("google.com/open");
		var dbox = add.indexOf("dropbox.com/s");
		var odrive = add.indexOf("onedrive.live.com");
		var outputBox = document.getElementById("output");
		if (drive != -1) {
			var start = add.indexOf("d/");
			var end = add.indexOf("/view");
			var reString = add.slice(start + 2, end);
			var link = "https://drive.google.com/uc?export=download&id=" + reString + "";
			outputBox.disabled = false;
			outputBox.value = link;
			setStatus("Success! Click the output link to copy it to your clipboard");
		} else if (drive2 != -1) {
			var start = add.indexOf("id=");
			var end = add.length;
			var reString = add.slice(start+3, end);
			var link = "https://drive.google.com/uc?export=download&id=" + reString + "";
			outputBox.disabled = false;
			outputBox.value = link;
			setStatus("Success! Click the output link to copy it to your clipboard");
		} else if (dbox != -1) {
			var link = add.replace("?dl=0", "?dl=1");
			outputBox.disabled = false;
			outputBox.value = link;
			setStatus("Success! Click the output link to copy it to your clipboard");
		} else if (odrive != -1) {
			var link = add.replace("redir", "download");
			var link = add.replace("embed", "download");
			outputBox.disabled = false;
			outputBox.value = link;
			setStatus("Success! Click the output link to copy it to your clipboard");
		} else {
			$("#output").val('Xin lỗi, có vẻ như link bạn vừa dán chưa chia sẻ công khai hoặc không đúng! Vui lòng kiểm tra lại!');
			setStatus("Error: Invalid URL", true);
			outputBox.disabled = true;
		}
	}