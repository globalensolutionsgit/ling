<?php include('header.php'); ?>
<?php 
include('session.php'); ?>
<?php
if(isset($_GET['id'])&&isset($_GET['user_type'])){
    $get_id = $_GET['id'];
    $user_type = $_GET['user_type'];
}else{
    header('Location:404.php');
}
?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_dashboard.php'); ?>
				<div class="span3" id="adduser">
				<?php include('edit_user_form.php'); ?>
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Admin Users List</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form action="delete_users.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-toggle="modal" href="#user_delete" id="delete"  class="btn btn-danger" name="" title="Delete"><i class="icon-trash icon-large"></i></a>
									<?php include('modal_delete.php'); ?>
										<thead>
										  <tr>
												<th></th>
												<th>Name</th>
												<th>Username</th>

												<th></th>
										   </tr>
										</thead>
										<tbody>
													<?php
													$user_query = mysql_query("select * from users where user_type ='$user_type'")or die(mysql_error());
													while($row = mysql_fetch_array($user_query)){
													$id = $row['user_id'];
													?>

												<tr>
												<td width="30">
												<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
												</td>
												<td><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?></td>

												<td><?php echo $row['username']; ?></td>

												<td width="40">
												<a href="edit_user.php<?php echo '?id='.$id.'&user_type='.$user_type; ?>"  data-toggle="modal" class="btn btn-success" title="Edit"><i class="icon-pencil icon-large"></i></a>
												</td>


												</tr>
												<?php } ?>
										</tbody>
									</table>
									</form>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
            </div>

		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
		 <script>
    $("#teacher_class_edit").multiselect({
           header: "Choose an Option!",
           selectedList: 2
       });
    </script>
	</body>
	</html>
   
