$(document).ready(function(){

    $(".Country").change(function()
	{
        var CID = $(this).val();
       	var url = $(this).attr("url");
        //alert(url);
		$.ajax(
		{
			type: "GET",
			url: url+'settings/getState',
			data:{'CID':CID},
			dataType: 'json',

			beforeSend: function ()
			{ 
				console.log(CID+url);
			},
			
			success: function(data)
			{
				$('.State').find('option').remove();

				var option = $('<option>').attr('value', '').html('Select State');
				$('.State').append(option);

				$.each(data, function() 
				{
					var option = $('<option>').attr('value', this.st_id).html(this.st_name);
					$('.State').append(option);
				});
			}
		});
	});
	
	$(".State").change(function()
	{
		var url = $(this).attr("url");
		var SID = $(this).val();
		$.ajax(
		{
			type: "GET",
			url: url+"settings/getCity",
			data:{'SID':SID},
			dataType: 'json',

			beforeSend: function ()
			{ 
				console.log(SID);
			},
			
			success: function(data)
			{
				console.log(data);
				$('.City').find('option').remove();

				var option = $('<option>').attr('value', '').html('Select City');
				$('.City').append(option);

				$.each(data, function() 
				{
					var option = $('<option>').attr('value', this.ct_id).html(this.ct_name);
					$('.City').append(option);
				});
			}
		});
	});

	$("#btnSendMessage").click(function(){
		let url = $("#site_url").val();
		let crnt_url = $("#current_url").val();
		$.ajax({
			url:url+'mails/sendMessage',
			method:'post',
			data:$("#composeMessage").serialize(),
			dataType:'json',
			beforeSend: function ()
			{
				$('#btnSendMessage').html('Sending...');
				$('#btnSendMessage').prop('disabled', true);
			},
			success:function(response){
				if(response==="success"){
					window.location.href=url+'mails';
				}else{
					$('#btnSendMessage').prop('disabled', false);
					window.location.href=crnt_url;
				}
			},
		});
	});

	// MAKE TABLE ROW CLICKABLE //
	$(".table-row").click(function() {
        window.location = $(this).data("href");
    });

	$(".pageReload").click(function(){
		window.location = $(this).data("href");
	}); 

	// MAKE STAR RECORD 
	$(".starAction").click(function(){
		let url = $("#site_url").val();
		let rowId = $(this).parent().find("#rowid").val();
		let starClickId = $(this).parent().find("#rowStarId").val();
		$.ajax({
			method:'post',
			url:url+'mails/makeAsStar',
			data:{rowid:rowId,starValue:starClickId},
			dataType:'json',
			success:function(response){
				$('#rowStar'+rowId).html(response.myStar);
		   		$('.rowStarId'+rowId).val(response.star);
			}
		});
	}); 

	$(".btnMakeAsRead").click(function(){
		var checkboxValues = [];
	    $('input[type="checkbox"]:checked').each(function(index, elem) {
	        checkboxValues.push($(elem).val());
	    });
	    var selectedCheckBox = checkboxValues.join(',');
	    var url = $("#site_url").val();
	    var current_url = $("#current_url").val();

	    if(selectedCheckBox===''){
	    	alert('Please select a minimum one record');
	    }else{
	    	$.ajax({
	    		method:'post',
	    		url:url+'mails/makeAsRead',
	    		data:{selectedCheckBox:selectedCheckBox},
	    		success:function(response){
	    			if(response==="success"){
	    				window.location.href=current_url;
	    			}else{
	    				window.location.href=current_url;
	    			}
	    		}
	    	});
	    }
	});

	$(".btnRemoveMessage").click(function(){
		var checkboxValues = [];
	    $('input[type="checkbox"]:checked').each(function(index, elem) {
	        checkboxValues.push($(elem).val());
	    });
	    var selectedCheckBox = checkboxValues.join(',');
	    var url = $("#site_url").val();
	    var current_url = $("#current_url").val();

	    if(selectedCheckBox===''){
	    	alert('Please select a minimum one record');
	    }else{
	    	$.ajax({
	    		method:'post',
	    		url:url+'mails/removeMessage',
	    		data:{selectedCheckBox:selectedCheckBox},
	    		success:function(response){
	    			if(response==="success"){
	    				window.location.href=current_url;
	    			}else{
	    				window.location.href=current_url;
	    			}
	    		}
	    	});
	    }
	});

	// REPLY ON MESSAGE
	$("#btnReplyActionBox").click(function(){
		$("#btnReplyBox").show('up');
		$("#btnReplyActionBox").hide('left');
	});
	// CLOSE REPLY MESSAGE BOX
	$("#btnCloseReplyBox").click(function(){
		$("#replyMessage").val('');
		$("#btnReplyBox").hide('up');
		$("#btnReplyActionBox").show('down');
	});
	 
});

$(".City").change(function(){
	var url = $(this).attr("url");
	var CID = $(this).val();
	$.ajax(
	{
		type: "GET",
		url: url+"settings/getZip",
		data:{'CID':CID},
		dataType: 'json',

		beforeSend: function ()
		{ 
			console.log(CID);
		},
		
		success: function(data)
		{
			console.log(data);
			$('.Zip').find('option').remove();

			var option = $('<option>').attr('value', '').html('Select Zip Code');
			$('.Zip').append(option);

			$.each(data, function() 
			{
				var option = $('<option>').attr('value', this.zc_id).html(this.zc_zipcode);
				$('.Zip').append(option);
			});
		}
	});
});

// option_value Add
$(".option_value").click(function(){
  var refer_url = $(this).attr("url");
  var opt_id = $(this).attr("option_value");
		$.ajax({
			method:'post',
			url:refer_url+'settings/option_value_add',
			data:{opt_id:opt_id},
			dataType:'json',
			success:function(response){
				if(response!=''){
					$("#OptionModal").modal();
					$("#opt_id").val(response.option.opt_id);
					$("#OptionList").html(response.option_value);
			}
		}
		});
	});

// option_value Save
$(".option_value_save").click(function(){
  var refer_url = $(this).attr("url");
  var opt_id = $('#opt_id').val();
  var opt_value = $('#opt_value').val();
  var check 	= true;
    if(opt_value == ''){ $('.opt_value').css("border", " 1px solid #ef131"); check=false; }
      else{ $('.opt_value').css("border", ""); check = true; }  
  		if(check){
			$.ajax({
				method:'post',
				url:refer_url+'settings/option_value_save',
				data:{opt_id:opt_id,opt_value:opt_value},
				dataType:'json',
				success:function(response){
					if(response!=''){
						$("#OptionModal").modal();
						$("#success").html('<div class="alert alert-success alert-dismissible fade show" role="alert"> <span class="alert-inner--icon"><i class="fe fe-thumbs-up "></i></span> <span class="alert-inner--text"><strong>Success!</strong> Option Value has been successfully Save.</span> <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button> </div>');
						$("#opt_id").val(response.option.opt_id);
						$("#OptionList").html(response.option_value);
						
				
				}
			}
			});
		}else{$("#success").html('<div class="alert alert-danger alert-dismissible fade show" role="alert"> <span class="alert-inner--icon"><i class="fe fe-warning "></i></span> <span class="alert-inner--text"><strong>Warning!</strong> This field is required.</span> <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button> </div>');}
	});

// option_value Delete
function OptionvalueDelete(id,value,url) {

		$.ajax({
			method:'post',
			url:url+'settings/option_value_delete',
			data:{opt_id:id,opt_value:value},
			dataType:'json',
			success:function(response){
				if(response!=''){
					$("#OptionModal").modal();
					$("#success_list").html('<div class="alert alert-success alert-dismissible fade show" role="alert"> <span class="alert-inner--icon"><i class="fe fe-thumbs-up "></i></span> <span class="alert-inner--text"><strong>Success!</strong> Option Value has been successfully Delete.</span> <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button> </div>');
					$("#opt_id").val(response.option.opt_id);
					$("#OptionList").html(response.option_value);
			}
		}		
		});
}

/*------------Start Model PopUp  SCRIPT---------*/	
function showMyModalSetTitle(type,url,id,getstatus) {
	var mode='<div class="modal fade" id="exampleModal"><div class="modal-dialog"><div class="modal-content"><div class="modal-header" style=" display: block; text-align: center;"> <h4 class="modal-title">Do You Want To '+type+' ?</h4></div><div class="modal-body"><h4 style="text-align: center;">Are you sure You Want To '+type+' This ?</h4></div><div class="modal-footer"style=" display: block; text-align: center;"><a href="'+url+id+'/'+getstatus+'"><button type="button" class="btn btn-success "><i class="fa fa-check" aria-hidden="true"></i> Yes</button></a><button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-ban" aria-hidden="true"></i> No</button></div></div></div></div>';
	$(mode).modal('show');
}
	
/*------------Start Image Show  SCRIPT---------*/
function preview_image() { 
    var total_file = document.getElementById("image_file").files.length;
	if(total_file>1){
		$('#image_file').val('');
		$('#image_preview').empty(); 
		$('#image_file-error').css('display', 'block');
		$('#image_file-error').html("Can't select more than 1 images");
	}else{
		$('#image_preview').empty();
        $('#image_file-error').css('display', 'none');			
	   for (var i = 0; i < total_file; i++) {
		  $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i]) + "' style='width:50px;height:50px;margin-right:4px;object-fit: contain;' class='img-thumbnail'>"); 
		}
	}
}
    
// Product View
/*$(".ProductView").click(function(){
  var refer_url = $(this).attr("url");
  var pid = $(this).attr("ProductView");
		$.ajax({
			method:'post',
			url:refer_url+'catalog/ProductView',
			data:{pid:pid},
			dataType:'json',
			success:function(response){
				if(response!=''){					
					$("#ProductModal").modal();
					$("#Product_title").html(response.product.p_name);
					$("#pimg").html('<img src="'+response.product_img+'" class="img-responsive" style="width: 200px;height: 200px;border: 1px solid #eee;" />');
					$("#Reference").html(response.product.p_reference_no);
					$("#Categories").html(response.product.cate_name+' '+response.product.scate_name+' '+response.product.child_name);
					$("#Brand").html(response.product.brand_name);
					$("#Model").html(response.product.p_model);
					$("#Price").html(response.product.p_selling_price);
									
					
				}
			}
		});
	});*/

function get_preview_image(e) {    
    var total_file = document.getElementById("image_file"+e).files.length;
	if(total_file>1){
		$('#image_file'+e).val('');
		$('#image_preview'+e).empty(); 
		$('#image_file-error').css('display', 'block');
		$('#image_file-error').html("Can't select more than 1 images");
	}else{
		$('#image_preview'+e).empty();
        $('#image_file-error').css('display', 'none');			
	   for (var i = 0; i < total_file; i++) {
		  $('#image_preview'+e).append("<img src='"+URL.createObjectURL(event.target.files[i]) + "' style='width:50px;height:50px;margin-right:4px;object-fit: contain;' class='img-thumbnail'>"); 
		}
	}
}
