<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đặt hàng trên trang của Jivocter</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="panel panel-info">
		<div class="panel-heading">
			<h1 class="panel-title">Đặt hàng trên trang shop Jivocter</h1>
		</div>
		<div class="panel-body">
			<div class="jumbotron">
				<div class="container">
					<h2>Thông tin khách hàng</h2>
					<p>Họ và tên  :   {{$name}}</p>
					<p>Phone Number  :   {{$phone}}</p>
					<p>Địa chỉ nhận hàng  :   {{$address}}</p>
					
				</div>
			</div>
			<table class="table table-bordered table-hover " border="1px" align="left">
				<thead>
					<tr>
						<th >Sản phẩm</th>
						<th>Số lượng</th>
						<th>Giá</th>
					</tr>
				</thead>
				<tbody>
					@foreach($carts as $cart)
						<tr>
							<td>{{$cart->name}}</td>
							<td>{{$cart->qty}}</td>
							<td>{{number_format($cart->price)}} VNĐ</td>
						</tr>
					@endforeach
				</tbody>
		
			
			</table>
			<h4>Tổng tiền : {{$subtotal}} VNĐ</h4>
			<h4>Tiền thuế : {{$tax}} VNĐ</h4>
			<h4>Số tiền cần thanh toán :  {{$total}} VNĐ</h4>

				
		</div>
	</div>
	
</body>
</html>