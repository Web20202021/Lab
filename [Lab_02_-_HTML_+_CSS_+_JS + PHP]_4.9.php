<html>
<head>
<title>Lab 02 Bài 4.9</title>
<style>
body {
	font-family: verdana;
}
h1 {
	color: white;
	font-size: x-large;
	font-family: lucida handwriting;
}
thead {
	background-color: f71683;
	valign: center;
}
tbody {
	background-color: f9cfe3;
	border-color: black;
	font-size: 14px;
}
input {
	color: black;
}
.lock {
	background-color: #FFFF99;
}
</style>
</head>
<body>

<?php
	$method = $_SERVER['REQUEST_METHOD'];
	if($method == 'GET') $ketquathi="";
	if($method == 'POST'){
		$toan = $_POST['toan'];
		$ly = $_POST['ly'];
		$hoa = $_POST['hoa'];
		$diemchuan = $_POST['diemchuan'];
		$tongdiem = $toan+$ly+$hoa;
		if($toan != 0 and $ly != 0 and $hoa !=0){
			if($tongdiem >= $diemchuan){
				$ketquathi="Đậu";
			}
			else $ketquathi="Rớt";
		}
		else $ketquathi="Rớt";
	}
?>

<div id="wrapper">
<div class="container">
	<form id="ket-qua-thi-dai-hoc" action="" method="post">
	<table cellspacing="0" cellpadding="5" align="center">
	<thead>
	<tr>
		<th colspan="2"><h1>KẾT QUẢ THI ĐẠI HỌC</h1></th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>Toán:</td>
		<td><input type="number" id="toan" name="toan" placeholder="Nhập điểm môn Toán" value="<?php echo $toan; ?>"></td>
	</tr>
		<td>Lý:</td>
		<td><input type="number" id="ly" name="ly" placeholder="Nhập điểm môn Lý" value="<?php echo $ly; ?>"></td>
	<tr>
	</tr>
		<td>Hóa:</td>
		<td><input type="number" id="hoa" name="hoa" placeholder="Nhập điểm môn Hóa" value="<?php echo $hoa; ?>"></td>
	<tr>
	<tr>
		<td>Điểm chuẩn:</td>
		<td><input style="color: red;" type="number" id="diem-chuan" placeholder="Nhập điểm chuẩn" name="diemchuan" value="<?php echo $diemchuan; ?>"></td>
	</tr>
	<tr>
		<td>Tổng điểm:</td>
		<td><input class="lock" type="number" id="tong-diem" placeholder="Tổng điểm ba môn" disabled="disabled" value="<?php echo $tongdiem; ?>"></td>
	</tr>
	<tr><td>Kết quả thi:</td>
		<td><input class="lock" type="text" id="ket-qua-thi" placeholder="Kết quả thi" disabled="disabled" value="<?php echo $ketquathi; ?>"></td>
	</tr>
	<tr>
		<td colspan="2"><center><input type="submit" value="Xem kết quả"></center></td>
	</tr>
	</tbody>
	</table>
	</form>
</div>
</div>
</body>
</html>