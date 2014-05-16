<?php 
$filename = __FILE__;
$id = "createpage"; // if this is going to work as a database, we will need a unique key
$title = "Page Creation";
$description = "Admin page designed to generate other pages.";
$keywords = "admin";

$body = '


	<form class="form-horizontal" action="writepage.php" method="post">

	<div class="form-group">
		<label class="col-sm-2 control-label">ID:</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="id">
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label">Title:</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="title">
		</div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">Description:</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="description">
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-2 control-label">Keywords:</label>	
		<div class="col-sm-10">
			<input type="text" class="form-control" name="keywords">
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label">Body:</label>
		<div class="col-sm-10">
			<textarea class="form-control" name="body" rows="5"></textarea>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label">Parent:</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="parent">
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-2 control-label">Key:</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="key">
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<input type="submit" id="submit" name="submit" class="btn-lg btn-primary" value="Submit">
		</div>
	</div>

	</form>

	';

$parent = "none"; // top level page if none, otherwise, page title

define("THISISTHEKEY", "createpage");

include('_template.php');

?>