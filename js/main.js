	getProductCode();

	function getProductCode(){
		$("#procode").empty();
		$("#procode").keyup(function (e){
			//var q = $("#procode").val();
			$.ajax({
				type: "POST",
				url: "purchaseData.php",
				dataType: "JSON",
				data: {procode: $("#procode").val()},
				
				success: function(data){
					$("#pname").val(data[0].productname);
					$("#price").val(data[0].price);
					$("#qty").focus();
				}
			});
		});
	}
	
	$(function(){
		$("#price,#qty").on("keydown keyup click",qty);
		function qty(){
			var sum = (
				Number($("#price").val())*Number($("#qty").val())
			);
			$('#total').val(sum);
		}
	});
	
	$(function(){
		$("#pay,#finaltotal").on("keydown keyup click",finaltot);
		function finaltot(){
			var sum = (
				Number($("#pay").val())-Number($("#finaltotal").val())
			);
			$('#bal').val(sum);
		}
	});

	$('#add').on('click',function(){
		$customerName = $('#customer').val();
		//Validation on forms if its empty
		var code = $('#procode').val();
		var pname = $('#pname').val();
		var price = $('#price').val();
		var qty = $('#qty').val();
		var total = $('#total').val();
		

		if($customerName == 'Choose..'){
			Swal.fire(
				'Error!',
				'please choose a customer First',
				'error'
			)
		}
		else if(code == '' || qty == '' || total == ''){
					
		   
					
					   Swal.fire(
						   'Error!',
						   'Input field cannot be empty',
						   'error'
					   )

		   
					if(pname =='' && price == ''){
					   Swal.fire(
						   'Error!',
						   'Product does not exist',
						   'error'
					   )
					}
		}
		
		else{
			$.ajax({
				url:'Purchasequantity.php',
				method: 'POST',
				data:{procode:code},
				success:function(data){
						var products ={
							procode: $("#procode").val(),
							pname: $("#pname").val(),
							price: $("#price").val(),
							qty: $("#qty").val(),
							total: $("#total").val(),
							button: '<button type="button" class="btn btn-danger">Delete</button>'
						 };
				 
							 addRow(products);
							$('#frmInvoice')[0].reset();
					
				}
				
			})
				
			
		}
				
	})
	

	var total = 0;

	function addRow(products){
		var $table = $('#product_list tbody');
	   
		var $row = 
				$('<tr>'+
					'<td> <button type="button" name="record" class="btn btn-warning btn-xsm" onclick="deleterow(this)">Delete</button></td>'+
						'<td>'+ products.procode +'</td>' +
						'<td><input type="hidden" name="pname[]" value="'+ products.pname +'" id="prod">'
							 + products.pname +'</td>' +
						'<td><input type="hidden" name="pprice[]" value="'+  products.price +'" id="price_data">'+ 
							products.price +'</td>' +
						'<td><input type="hidden" name="pqty[]" value="'+   products.qty +'" id="qty_data">'+ 
							products.qty +'</td>' +
						'<td><input type="hidden" name="ptotal[]" value="'+   products.total +'" id="qty_data">'+ 
							products.total +'</td>' +
					'</tr>'    
				
				);
					
			   
				$row.data('procode',products.procode); 
				$row.data('procode',products.procode); 
				$row.data('pname',products.pname); 
				$row.data('price',products.price); 
				$row.data('qty',products.qty); 
				$row.data('total',products.total);

				
				total+=Number(products.total);

				$('#finaltotal').val(total);

				$table.append($row);

				$row.find('deleterow').click(function(event){
					deleterow($(event.currentTarget).parent('tr'));
				});

	}

  
	
	function deleterow(e){
		product_total_cost = parseInt($(e).parent().parent().find('td:last').text(),10);
		total -= product_total_cost;
		$('#finaltotal').val(total);
		$(e).parent().parent().remove();
	}

	
   $('#submit').on('click',function(){

		var payment = $('#pay').val();
		var totalBalance = $('#finaltotal').val();


		if(payment < totalBalance){
			Swal.fire(
				'Error!',
				'Payment is less that total purchased',
				'error'
			)
		}
		else{
			var productName = 
					$("input[name='pname[]']").map(function()
				{
					return $(this).val();    
				}).get();

				

			var productqty = 
					$("input[name='pqty[]']").map(function()
				{
					return $(this).val();    
				}).get();

		

			var productTotal = 
					$("input[name='ptotal[]']").map(function()
				{
					return $(this).val();    
				}).get();

				var customer = $('#customer').val();
				

				var rowCount = $('#product_body tr').length;

				for(i = 0; i < rowCount; i++){
						var product =  productName[i];
						var quantity = productqty[i]
						var total = productTotal[i]
					
						$.ajax({
							url:'purchaseFunction.php',
							method:'POST',
							data:{
								pname:product,
								qty:quantity,
								total:total,
								customer:customer
							},
							success: function(data){
								setTimeout(function(){
									location.reload(1);
								}, 900);
								Swal.fire({
									position: 'top-end',
									icon: 'success',
									title: 'Transaction Completed',
									showConfirmButton: false,
									timer: 1500
								})
							}
					}); 
				}
		}


		
   })



// sidenav medicine list sub menu
$("#med-list1").click(function(){
    $("#items-med").slideToggle();
	$('.list-btn2').toggleClass('rotate');
  });

// sidenav sales sub menu
$('#sales').on('click',() =>{
	$('#salesli').slideToggle();
	$('.list-btn').toggleClass('rotate');
})



//loader image
let loader = document.getElementById('preloader');

window.addEventListener('load',()=>{
	loader.style.display = 'none';
});

//select that has a search inside
$('select').selectpicker();

// slide hamburger menu
$('#hamburger').on('click',() => {
	$('#side-menu').toggle('slide')
})

//data tables Inventory
$('#Inventory').DataTable();
$('#Medicinelist').DataTable();
$('#medtype').DataTable();
$('#medCategory').DataTable();
$('#xpmed').DataTable();
$('#deliveries').DataTable();
$('#supplier').DataTable();
$('#transactions').DataTable();
$('#dailysales').DataTable();
$('#NewStaff').DataTable();
$('#NewManager').DataTable();

// Chart on the Dashboard
var seasondata = [];
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title: {
		text: "Monthly Sales"
	},
	axisY: {
		title: "Number of Sales"
	},
	data: [{
		type: "column",
		 dataPoints: seasondata,
	}]

});
console.log(seasondata)

$.getJSON("dashboardarray.php", function(data) {  
	for (let index = 0; index < data.length; index++) {
		const element = data[index];
		seasondata.push({label: data[index]["Months"], y:parseInt(data[index]["total"])})
	}
	chart.render();
});


// graph for inventory
	let graph_data = [];
var graph = new CanvasJS.Chart("graph", {
	animationEnabled: true,
	title:{
		text: "Inventory Summary"
	},
	subtitles: [{
		text: "Total Summary of products and Deliveries"
	}],
	data: [{
		type: "pie",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - #percent%",
		yValueFormatString: "฿#,##0",
		dataPoints: graph_data
	}]
});
	$.getJSON("graphdata.php", function(data) {
		for (let index = 0; index < data.length; index++) {
			const element = data[index];
			graph_data.push({label: data[index]["label"], y:parseInt(data[index]["data"])})
		}
		graph.render();
	});



