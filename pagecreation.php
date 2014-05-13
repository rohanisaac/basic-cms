<?php 

$id = "pagecreation"; // if this is going to work as a database, we will need a unique key
$title = "Page Creation";
$description = "Admin page designed to generate other pages.";
$keywords = "admin";

$body = '


	<form class="form-horizontal" action="writepage.php" method="post">

	<div class="row">
		<div class="form-group">

			<label class="">ID:</label>
			<input type="text" class="form-control" name="id">

			<label class="">Title:</label>
			<input type="text" class="form-control" name="title">

			<label class="">Description:</label>
			<input type="text" class="form-control" name="description">

			<label class="">Keywords:</label>
			<input type="text" class="form-control" name="keywords">
		</div>
	</div>

	<div class="row">

		<div class="form-group">
			<label class="">Body:</label>
			<textarea class="form-control" name="body" rows="5"></textarea>
		</div>
	</div>

	<div class="row">
		<div class="form-group">
			<label class="">Parent:</label>
			<input type="text" class="form-control" name="parent">

			<label class="">Key:</label>
			<input type="text" class="form-control" name="key">
		</div>
	</div>

		<input type="submit" id="submit" name="submit" class="btn-lg btn-primary" value="Submit">

	</form>

	';

$parent = "none"; // top level page if none, otherwise, page title

define("THISISTHEKEY", "createpage");

include('admintemplate.php');

?>