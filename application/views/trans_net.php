<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Free Fire</title>
	<link rel="stylesheet" href="css/free.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<!-- Brand -->
		<div>
			<a href="<?=base_url('/') ?>">
				<img class="p-1" src="https://www.storeandgamers.com/uploads/logo/logo_5ed1c11998a10.png" width="150">
			</a>
		</div>



	</nav>

	<div class="container">
		<div class="input-group ">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">#</span>
			</div>
			<input type="text" id="search-free-fire" name="search" class="form-control" placeholder="Documento">
			&nbsp; <button class="btn btn-outline-success " type="submit">Buscar</button>
		</div>
		<div id="result"></div>
	</div>
	<div style="clear:both"></div>
	</div>
</body>

</html>
<script>
	$(document).ready(function() {
		load_data();

		function load_data(query) {
			$.ajax({
				url: "<?=  base_url('/a/a_net.php')?>",
				method: "post",
				data: {
					query: query
				},
				success: function(data) {
					$('#result').html(data);
				}
			});
		}

		$('#search-free-fire').keyup(function() {
			var search = $(this).val();
			if (search != '') {
				load_data(search);
			} else {
				load_data();
			}
		});
	});
</script>