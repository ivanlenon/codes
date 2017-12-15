<!DOCTYPE html>

<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gallery</title>

	<!-- Styles Link -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">

	<!-- Script Icon -->
	<script src="https://use.fontawesome.com/3efdfcc2ff.js"></script>
</head>
<body>
	<div class="row">
		<div class="col-lg-8 offset-lg-2">
			<h3>Product list</h3> <hr>

			<div class="row">
				<div class="content table-responsive">
					<table class="table">
						<thead><tr>
							<th class="text-center"></th>
							<th>Name</th>
							<th class="th-description">Description</th>
							<th class="">Date</th>
							<th></th>
						</tr></thead>

						<tbody>
							<?php
							$product = 0;
							while ($product <= 10):
								?>
								<tr>
									<td><div class="img-container"><img src="http://fakeimg.pl/150x100/" alt=""></div></td>
									<td class="td-name">Product's name</td>
									<td class="td-content">Short Product Description!</td>
									<td class="td-number">2017-12-13</td>
									<td class="td-actions">
										<button type="button" class="btn btn-info btn-simple btn-icon" data-original-title="View Post"><i class="fa fa-image"></i></button>
										<button type="button" class="btn btn-success btn-simple btn-icon" data-original-title="Edit Post"><i class="fa fa-edit"></i></button>
										<button type="button" class="btn btn-danger btn-simple btn-icon " data-original-title="Remove Post"><i class="fa fa-times"></i></button>
									</td>
								</tr>
								<?php
								$product++;
							endwhile;
							?>
						</tbody>
					</table>
				</div>
			</div>

		</div>
	</body>
	</html>
