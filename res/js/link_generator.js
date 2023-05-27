function $(e) {
    return document.getElementById(e)
}

function generatelink() {
    var e = $("cde").value,
        n = e.indexOf("google.com"),
        t = e.indexOf("dropbox.com/s"),
        l = e.indexOf("onedrive.live.com");
    if (-1 != n) {
        var i = e.indexOf("d/"),
            d = e.indexOf("/edit"),
            o = e.slice(i + 2, d),
            a = "https://docs.google.com/$type/d/" + o + "/export?format=pdf"; - 1 !== e.indexOf("document") ? a = a.replace("$type", "document") : -1 !== e.indexOf("spreadsheet") ? a = a.replace("$type", "spreadsheets") : -1 !== e.indexOf("presentation") ? a = a.replace("$type", "presentation") : (d = e.indexOf("/view"), a = "https://drive.google.com/uc?export=download&id=" + (o = e.slice(i + 2, d))), $("linkpaste").value = a, $("linkpaste").select()
    } else if (-1 != t) {
        a = e.replace("?dl=0", "?dl=1");
        $("linkpaste").value = a, $("linkpaste").select()
    } else if (-1 != l) {
        a = e.replace("redir", "download");
        $("linkpaste").value = a, $("linkpaste").select()
    } else $("linkpaste").value = "THE URL IS INVALID"
}
window.onload = function () {
    $("cde").focus(), $("but").onclick = laylink
};

function laylink(){
		var add = $("cde").value;
		var drive = add.indexOf("google.com/file/d/");
		var drive2 = add.indexOf("google.com/open");
		var dbox = add.indexOf("dropbox.com/s");
		var odrive = add.indexOf("onedrive.live.com");
		if (drive != -1) {
			var start = add.indexOf("d/");
			var end = add.indexOf("/view");
			var reString = add.slice(start + 2, end);
			var link = "https://drive.google.com/uc?export=download&id=" + reString + "";
			$("linkpaste").value = link;
			$("linkpaste").select();
		} else if (drive2 != -1) {
			var start = add.indexOf("id=");
			var end = add.length;
			var reString = add.slice(start+3, end);
			var link = "https://drive.google.com/uc?export=download&id=" + reString + "";
			$("linkpaste").value = link;
			$("linkpaste").select();
		} else if (dbox != -1) {
			var link = add.replace("?dl=0", "?dl=1");
			$("linkpaste").value = link;
			$("linkpaste").select();
		} else if (odrive != -1) {
			var link = add.replace("redir", "download");
			var link = add.replace("embed", "download");
			$("linkpaste").value = link;
			$("linkpaste").select();
		} else {
			$("linkpaste").value = 'Xin lỗi, có vẻ như link bạn vừa dán chưa chia sẻ công khai hoặc không đúng! Vui lòng kiểm tra lại!';
		}
	}
	
	
