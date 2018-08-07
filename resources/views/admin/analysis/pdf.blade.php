<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<title>Báo cáo doanh thu</title>
	<!-- Latest compiled and minified CSS & JS -->
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<style type="text/css">
		body {
		    font-family: DejaVu Sans;
		}
		

		.sign p{
			color: red;
			align-content: flex-end;
		}
	</style>
</head>
<body>
	
	<div class="row" style="margin-bottom: 20px;">
		<div class="col-md-6" style="text-align: center;">
			<p>Cộng hòa xã hội chủ nghĩa Việt Nam</p>
			<p>Độc lập - Tự do - Hạnh phúc</p>
		</div>
		
	</div>
	<h2 style="text-align: center;">BÁO CÁO DOANH THU {{$data['year']}}</h2>
	<div class="row" style="margin-bottom: 20px;">
		<div class="col-md-6" >
			<p>Công ty cổ phần Jivocter</p>
			<p>Số điện thoại: 0962636803</p>
		</div>
		
		<table class="table table-bordered table-hover" >
			<thead>
				<tr>
					<th>Số sản phẩm bán </th>
					<th>Tổng doanh thu </th>
					<th>Tổng tiền lãi </th>
				</tr>
			</thead>
          	<tbody>
            	<tr>
              		<td>{{$data['number_product_year']}}</td>
              		<td>{{$data['income_year']}}</td>
              		<td>{{$data['interest_year']}}</td>
           	 	</tr>
            
          	</tbody>
		</table>
	</div>
	<div class="container">
		<div class="row" >
			<div class="col-md-8"></div>
			<div class="col-md-4" style="text-align: right;">
				<p>Hà Nội, ngày ... tháng ... năm</p>
				<p style="margin-right: 35px;">Ký (ghi rõ họ tên)</p>
			</div>
		</div>
	</div>
	
</body>
</html>