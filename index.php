<!DOCTYPE HTML>
<html>
	<head>
		<!-- Call jquery library -->
		<script src="./jquery.js" type="text/javascript"></script>
		<script type="text/javascript">
		$(function(){
			$(".add").click(function(){
				var html = '<div class="input">';
					html += '<label for="input">Input</label> ';
					html += '<input type="text" name="nama[]" />'
					html += '<button type="button" class="remove">x</button>'
					html += '</div>';
				$(".area-input").append(html)
			})
			
			$(document).on('click','.remove',function(){
				$(this).parent().remove();
				return false;
			})
		})
		
		</script>
		<style>
		.area-input{ margin-bottom: 10px;}
		.input{margin-bottom: 5px;}
		.input label {width: 100px; display: inline-block}
		.input input {width: 150px; margin-right: 5px}
		</style>
	</head>
	<body>
		<form class="dynamic-input" method="post">
			<div class="area-input">
				<div class="input">
					<label for="input">Input 1</label>
					<input type="text" name="nama[]" />
					<button type="button" class="remove">x</button>
				</div>
			</div>
			<button type="button" class="add">Add</button>
			<button type="submit" class="submit">Submit</button>
		</form>
		<?php
		foreach($_POST['nama'] as $key => $value){
			echo "mysql_insert('insert into table values($value)')<br/>";
		}
		
		for($i =0; $i < count($_POST['nama']); $i++){
			echo "mysql_insert('insert into table values(". $_POST['nama'][$i] .")')<br/>";
		}
		?>
	</body>
</html>