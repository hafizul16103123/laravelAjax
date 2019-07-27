<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
	<title>Laravel ToDo List with Ajax</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-offset-3 col-lg-6">
				<br>
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title">Ajax Todo List <a class="pull-right" data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-plus"></i></a></h3>
				  </div>
				  <div class="panel-body">
				    <div class="list-group">
				      <a href="#" class="list-group-item active">
				        Cras justo odio
				      </a>
				      <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
				      <a href="#" class="list-group-item">Morbi leo risus</a>
				      <a href="#" class="list-group-item">Porta ac consectetur ac</a>
				      <a href="#" class="list-group-item">Vestibulum at eros</a>
				    </div>
				  </div>
				</div>

				<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title">Add new Item</h4>
				      </div>
				      <div class="modal-body">
				        <p><input type="text" id="addItem" class="form-control" placeholder="Write Item Here "></p>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal" style="display: none">Close</button>
				        <button type="button" class="btn btn-primary" style="display: none">Save changes</button>
				        <button type="button" class="btn btn-primary" id="addItemButton">Add Item</button>
				      </div>
				    </div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
				</div><!-- /.modal -->

			</div>
		</div>
	</div>



	<script
	  src="https://code.jquery.com/jquery-3.3.1.min.js"
	  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	  crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function() {
			
		});
	</script>
</body>
</html>