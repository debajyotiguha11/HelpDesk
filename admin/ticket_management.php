<?php 
	include '../init.php'; 
	include '../core/includes/head.php'; 
	if($users->getuserinfo('user_group') == 1){
?>
	
<div class="container">
	<div class="columns four admin-menu">
		<?php $admin_menu_active = "ticket_management"; include 'admin_menu.php'; ?>
	</div>
	
	<div class="columns eight">		
		<table class="u-full-width" id="update">
			<thead>
				<tr>
					<th>Subject</th>
					<th>Author</th>
					<th>Last Reply</th>
					<th>Department</th>
    			</tr>
  			</thead>
  			<tbody>
  				<?php $admin->all_tickets(); ?>
  			</tbody>
		</table>

	</div> 
</div>

<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
setInterval(function(){
$("#update").load(location.href + " #update");
}, 1000);
});
</script>

<?php 
	}else{
		header('Location: ../');
	}
	include '../core/includes/foot.php'; 
?>
