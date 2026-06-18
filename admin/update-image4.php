<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0) {  
    header('location:index.php');
} else {
	$blogid=intval($_GET['blogid']); // blog id
if(isset($_POST['submit'])) {
     $blogtitle=$_POST['blogTitle'];
     $blogimage=$_FILES["blogImage"]["name"];

     // Move uploaded file
    move_uploaded_file($_FILES["blogImage"]["tmp_name"],"blogimages/$blogid/".$_FILES["blogImage"]["name"]);

    // Update blog image in the database
    $sql=mysqli_query($con,"update blogs set blogimage='$blogimage' where blogid='$blogid'");
     $_SESSION['msg']="Blog Image Updated Successfully !!";
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| Update Blog Image</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

</head>
<body>
<?php include('include/header.php');?>

	<div class="wrapper">
		<div class="container">
			<div class="row">
<?php include('include/sidebar.php');?>				
			<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Update Blog Image 1</h3>
							</div>
							<div class="module-body">

									<?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>



									<br />

			<form class="form-horizontal row-fluid" name="insertblog" method="post" enctype="multipart/form-data">

<?php 

$query=mysqli_query($con,"select blogTitle,blogimage from blogs where blogid='$blogid'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
  


?>

<div class="control-group">
<label class="control-label" for="basicinput">Blog Title</label>
<div class="controls">
<input type="text"    name="blogTitle"  readonly value="<?php echo htmlentities($row['blogTitle']);?>" class="span8 tip" required>
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">Current Blog Image</label>
<div class="controls">
<img src="blogimages/<?php echo htmlentities($blogid);?>/<?php echo htmlentities($row['blogimage']);?>" width="200" height="100"> 
</div>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">New Blog Image</label>
<div class="controls">
<input type="file" name="blogImage" id="blogImage" value="" class="span8 tip" required>
</div>
</div>


<?php } ?>

	<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">Update</button>
											</div>
										</div>
									</form>
							</div>
						</div>


	
						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->


<?php include('include/footer.php');?>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
</body>
<?php } ?>