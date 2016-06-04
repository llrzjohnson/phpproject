<?php require('includes/config.php'); 
//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); } 
?>
<?php
include_once 'db/dbconfig.php';
?>
<?php include_once 'header.php'; ?>

<div class="clearfix"></div>

<div class="container">
<h1>iDesign Members Page</h1>
<br />
<br />
<a href="includes/add-data.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add Records</a>
</div>

<div class="clearfix"></div><br />

<div class="container">

	 <table class='table table-bordered table-responsive'>
     <tr>
     <th>#</th>
     <th>First Name</th>
     <th>Last Name</th>
     <th>E - mail ID</th>
     <th>Contact No</th>
     <th colspan="2" align="center">Actions</th>
     </tr>
     <?php
		$query = "SELECT * FROM tbl_users";       
		$records_per_page=10;
		$newquery = $crud->paging($query,$records_per_page);
		$crud->dataview($newquery);
	 ?>
    <tr>
        <td colspan="7" align="center">
 			<div class="pagination-wrap">
            <?php $crud->paginglink($query,$records_per_page); ?>
            
        	</div>
        	<strong>Click to <a href='logout.php'>Logout</a></a>!
        </td>
    </tr>
 
</table>
   
       
</div>

<?php include_once 'footer.php'; ?>