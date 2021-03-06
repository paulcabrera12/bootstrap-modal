<?php
include_once 'list.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bootstrap Modal - Julian Jupiter</title>

		<!-- CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">	
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<h3>Thesis Online Public Access Catalog</h3>
					<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#thesis-modal" data-thesis-action="add">Add Thesis</button>
					<table class="table table-condensed table-striped">
						<thead>
							<tr>
								<th>ID</th>
								<th>Thesis Title</th>
								<th>Thesis Author</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($thesisList as $thesis): ?>
							<tr>
								<td><?=$thesis['id'];?></td>
								<td><?=$thesis['title'];?></td>
								<td><?=$thesis['author'];?></td>
								<td>
									<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#thesis-modal" data-thesis-id="<?=$thesis['id'];?>" data-thesis-action="edit">Edit</button>
                    				<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#thesis-modal" data-thesis-id="<?=$thesis['id'];?>" data-thesis-action="delete">Delete</button>
								</td>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>

					<!-- Modal -->
					<div class="modal fade" id="thesis-modal" tabindex="-1" role="dialog" aria-labelledby="thesis-modal-label">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="thesis-modal-label"></h4>
								</div>
								<div class="modal-body">							
								</div>
								<div class="modal-footer">
								</div>
							</div>
						</div>
					</div>
					<!-- 
						Thesis Form 
						Hidden by default and will be copied and added to Thesis Modal
					-->
					<form id="thesis-form" style="display:none;">
						<div class="form-group">
							<label for="title">Thesis Title</label>
							<input type="text" id="thesis-title" class="form-control" placeholder="Enter title">
						</div>
						<div class="form-group">
							<label for="title">Thesis Author</label>
							<input type="text" id="thesis-author" class="form-control" placeholder="Enter author">
						</div>
					</form>					
				</div>
			</div>
		</div>

		<!-- JavaScript -->
		<script src="assets/js/jquery-3.2.1.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/app.js"></script>
  	</body>
  </html>