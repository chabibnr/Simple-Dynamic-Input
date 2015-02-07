<!DOCTYPE HTML>
<html>
	<head>
		<!-- Call jquery library -->
		<script src="./jquery.js" type="text/javascript"></script>
		<script type="text/javascript">
		$(function(){
			$(".add").click(function(){
				var html = '<div class="input">';
					html += '<label for="input">Input 1</label> ';
					html += '<input type="text" name="nama[]" />'
					html += '<button class="remove">x</button>'
					html += '</div>';
				$(".area-input").append(html)
			})
		})
		
		</script>
		<style>
		.area-input{ margin-bottom: 10px;}
		.input{margin-bottom: 5px;}
		.input label {width: 100px;}
		.input input {width: 150px; margin-right: 5px}
		</style>
	</head>
	<body>
		<form class="dynamic-input" method="post">
			<div class="area-input">
				<div class="input">
					<label for="input">Input 1</label>
					<input type="text" name="nama[]" />
					<button class="remove">x</button>
				</div>
			</div>
			<button type="button" class="add">Add</button>
			<button type="submit" class="submit">Submit</button>
		</form>
	</body>
</html>