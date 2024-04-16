<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('library/css/bootstrap.css')?>">
</head>
<body>

<div align="center" style="margin-top: 10px;" id="container">
	<h1>Welcome to CodeIgniter!</h1>
	<a href="<?php echo base_url('index.php/srms/new_rec'); ?>" class="btn btn-success">New Record</a> <br><br>
	
	<table class="table table-bordered table-striped">
		<tr>
			<th>SEQ</th>
			<th>STUDENT ID</th>
			<th>LASTNAME</th>
			<th>FIRST NAME</th>
			<th>MIDDLE NAME</th>
			<th>COURSE</th>
			<th>YEARLEVEL</th>
			<th>SEX</th>
		</tr>
		<?php
			$cnt = 1;
			foreach ($students as $student){
				echo '<tr>';
				echo '<td>'.$cnt.'</td>';
				echo '<td>'.$student['stud_id'].'</td>';
				echo '<td>'.$student['lname'].'</td>';
				echo '<td>'.$student['fname'].'</td>';
				echo '<td>'.$student['mname'].'</td>';
				echo '<td>'.$student['course'].'</td>';
				echo '<td>'.$student['yearlevel'].'</td>';
				echo '<td>'.$student['sex'].'</td>';
				echo '</tr>';
				$cnt ++;
			}
		?>
	</table>
</body>
</html>
