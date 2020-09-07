$(document).ready(function(){
	
	$('#prodTable').DataTable({
	"bLengthChange": true,
	"bInfo": true,
	"bPaginate": true,
	"bFilter": true,
	"bSort": true,
	"pageLength": 7
	});
	
	$('#salesTable').DataTable({
	"bLengthChange": true,
	"bInfo": true,
	"bPaginate": true,
	"bFilter": true,
	"bSort": true,
	"pageLength": 7
	});
	
	$('#invTable').DataTable({
	"bLengthChange": true,
	"bInfo": true,
	"bPaginate": true,
	"bFilter": true,
	"bSort": true,
	"pageLength": 7
	});
	
	$('#cusTable').DataTable({
	"bLengthChange": true,
	"bInfo": true,
	"bPaginate": true,
	"bFilter": true,
	"bSort": true,
	"pageLength": 7
	});
	
	$('#supTable').DataTable({
	"bLengthChange": true,
	"bInfo": true,
	"bPaginate": true,
	"bFilter": true,
	"bSort": true,
	"pageLength": 7
	});
	
	//link to QRcode
	function generateQR(){
		$("#generateCode").click(function(){
			
			$.ajax({
				url:"../includes/qrCode.php",
				method:"POST",
				dataType:"json",
				success:function(data){
					$("#QRcode").val(data);
				}
			})
		})
	}
	generateQR();

	$(".date").datepicker({
		"format":"yy/mm/dd",
	});

	//Thixsx function gets the expiry details from expiry.php
	function get_expiry(){
		$.post('../includes/expiry.php',{},function(data){
			data = JSON.parse(data);
			console.log(data);
			$.each(data,function(key,value){
				var obj = $('#status-'+value.id);
				if(value.status==0){
					obj.html("<span style='font-weight:bold; color:red'>Drug expired!</span>");
				}else if(value.status==1){
					obj.html("<span style='font-weight:bold; color:orange'>Expiring Soon!</span>");
				}else if(value.status==2){
					obj.html("<span style='font-weight:bold;'><i class='fa fa-check text-success'></i></span>");
				}
			});
		});
	}
	setInterval(get_expiry,10000);

$("div .mb-4").mouseover(function(){
 $(this).addClass("mouseover");
})

});
