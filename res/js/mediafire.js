function(){
		$("#submit").addClass('disabled');
		$("#DirectLink").hide().html('<div class="gmenu" style="text-align: center;"><img src="/template/images/loading.svg" /></div>').slideDown('slow');
		var form = $('#form')[0];
		var formData = new FormData(form);
		$.ajax({
			url: "api.php",
			type: "POST",
			data:  formData,
			contentType: false,
			cache: false,
			processData:false,
			success: function(rs)
			{
				res = JSON.parse(rs);
				if(res.success){
					$("#submit").removeClass('disabled');
					$("#DirectLink").hide().html('<div class="menu">Download: <a class="download" rel="noreferrer noopener" target="_blank" href="'+res.success.url+'">'+res.success.name+'</a><br/><input type="text" value="'+res.success.url+'"></div>').slideDown('slow');
				}
				if(res.error){
					$("#submit").removeClass('disabled');
					$("#DirectLink").hide().html('<div class="gmenu" style="text-align: center;"><i style="color:red">'+res.error+'</i></div>').slideDown('slow');
				}
			},
			error: function() 
			{
				$("#DirectLink").hide().html('<div class="gmenu" style="text-align: center;"><i style="color:red">Có lỗi hệ thống, vui lòng kiểm tra lại!</i></div>').slideDown('slow');
			}
		});
		$("#mediafire").attr("placeholder", $("#mediafire").val()).val("");
	}

