<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test1</title>
</head>
<body>
	<!-- <?php
		define('NAME', 'Cena');
		echo "<p>Hello " . NAME .",Ban dang su dung phien ban PHP " . PHP_VERSION . " tren he dieu hanh " . PHP_OS ."</p>";

		$array1 = array(12, 5, 6, 8, 9, array('a'=>'apple', 'b'=>'banana'));
				echo "There are {$array1[1]} {$array1[5] ['a']} in the box on the table.";
				echo "<p>There are {$array1[1]} {$array1[5] ['a']} in the box on the table.</p>";

		$myArray = array(34, 39, 56, 67, 76, array('a'=>'apple', 'b'=>'banana', 'c'=>'coconut'));
                // echo $myArray[5]['c'];
                echo "<p>there are {$myArray[1]} {$myArray[5]['b']} in the box.</p>";

	?> -->

	<!-- <?php 
		$name = array('Nguyễn Song Luân', 'Songohan', 'Maya', 'Lionel Nguyen', 'Ronaldo');
		$birthday = array('1900', '1979', '1996', '1989', '1985');
		$gender = array('male', 'female');
		$work = array('di lam', 'tien si', 'duy tan', 'football', 'football');
		$getGender = 'male';
		$nameLastName = 'Nguyen';
		$nameAName = 'a';
		$schoolDuyTan = 'DuyTan';
		$job = 'dilam';
		if($nameLastName == 'Nguyen'){
			echo "<strong>Danh sách những người có họ nguyễn:</strong> ";
			echo "<br>" . $name[0] . " <br> " . $name[3];
		}
		if($nameAName == 'a' && $getGender == 'male'){
			echo " <br> Danh sách những bạn nam chữ a trong tên:";
			echo "<br>" . $name[0] . "<br>" . $name[1] . "<br>" . $name[4];
		}
		if($schoolDuyTan == 'DuyTan'){
			echo "<br> Danh sách những bạn học Duy Tân:";
			echo "<br>" . $name[2];
		}
		if($job == 'dilam'){
			echo "<br> Danh sách những bạn đã ra trường:";
			echo "<br>" . $name[0] . "<br>" . $name[1];
		}

	?> -->

	<?php
		$student = array(
				   array('name'=>'Dam Vinh Hung','gender'=> 'Male','birthday'=>'1979','job'=>'Ca Sy'), 
				   array('name'=>'Ngo Bao Long', 'gender'=>'Male', 'birthday'=>'1995','job'=>'Dai Hoc Back Khoa'),
				   array('name'=>'Le Quyen', 'gender'=>'Female', 'birthday'=>'1984','job'=>'ca si'),
				   array('name'=>'Duong Thi Thach Thao', 'gender'=>'Female', 'birthday'=>'1996','job'=>'Dai Hoc Duy Tan'),
				   array('name'=>'Nguyen Chien Thang', 'gender'=>'Male', 'birthday'=>'1995','job'=>'Cao dang Cong nghe')
				    );
	?>
	<form action="" method="post">
		<h2>Search Information of member in PHP_09</h2>
		<p>Nhập họ người mà bạn muốn tìm: <input type="text" name="ho"></p> 
		<p>Birthday: <input type="text" name="namsinh"></p>
		<p>Gioi tinh:
			<select name="gender">
				<option name="male">Male</option>
				<option name="female">Female</option>
			</select>
		</p>
		
		<p>Nhập trường hoặc nghe nghiep : <input type="text" name="truong"></p>
		<p><input type="submit" name="submit" value="Submit"></p>
	</form> 
	  <?php

	        if(isset($_POST['submit'])) {
	            // Da co gia tri de xu ly form, sau khi nut submit duoc nhan
	           
	            $ho = $_POST['ho'];
	            $namsinh = $_POST['namsinh'];
	            $gioitinh = $_POST['gender'];
	            $school = $_POST['truong'];

	            	if($ho == 'Dam'){
	            	echo "Danh sách những sinh viên họ Đàm: ";
	            	echo "<p> {$student[0]['name']} <br> 
	            			  Gioi tinh: {$student[0]['gender']} <br> 
	            			  Nam sinh: {$student[0]['birthday']} <br>
	            			  Job: {$student[0]['job']}
	            		  </p>";
	            	}
		            else if($ho == 'Nguyen'){
		            	echo "Danh sách những sinh viên họ Nguyễn: ";
		            	echo "<p> {$student[4]['name']} <br> 
		            			  Gioi tinh: {$student[4]['gender']} <br> 
		            			  Nam sinh: {$student[4]['birthday']} <br>
		            			  Job: {$student[4]['job']}
		            		  </p>";
		            }
		            if($school == 'DuyTan'){
		            	echo "Danh sách những sinh viên hoc Dai hoc Duy Tan: ";
		            	echo "<p> {$student[3]['name']} <br> 
		            			  Gioi tinh: {$student[3]['gender']} <br> 
		            			  Nam sinh: {$student[3]['birthday']} <br>
		            			  Job: {$student[3]['job']}
		            		  </p>";
		            }
		            echo "Những sinh viên đã ra trường:";
		            echo "<p> {$student[0]['name']} <br> 
		            			  Gioi tinh: {$student[0]['gender']} <br> 
		            			  Nam sinh: {$student[0]['birthday']} <br>
		            			  Job: {$student[0]['job']}
		            		  </p>";
		            echo "<p> {$student[2]['name']} <br> 
		            			  Gioi tinh: {$student[2]['gender']} <br> 
		            			  Nam sinh: {$student[2]['birthday']} <br>
		            			  Job: {$student[2]['job']}
		            		  </p>";
	        }
	    ?>
</body>
</html>