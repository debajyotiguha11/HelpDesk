<?php 
	include 'init.php'; 
	include 'core/includes/head.php'; 
	if($users->signed_in()){
 
?>
	
<div class="container">
<div class="row home-hero">
    <div class="six offset-by-three columns">
    <?php 
	    $cookie_name = "gender";
	    if(!isset($_COOKIE[$cookie_name])) {?>
    		<img src="//gravatar.com/avatar/<?php echo md5($users->getuserinfo('email')); ?>?s=100">
    	
<?php } else {
    if($_COOKIE[$cookie_name] == 1)
    	echo $male[$m];
    else
    	echo $female[$f];
}
	    	?>
	    <h4>Welcome, <?php echo $users->getuserinfo('nick_name'); ?></h4>
		<ul><div id="log">
			<li>Last login <?php echo $time->ago($users->getuserinfo('last_login')); ?></li></div>
		</ul>
	    <a href="./settings" class="button">Edit Account</a>
	    <?php if($users->getuserinfo('user_group') == 1){ echo '<a href="./admin" class="button button-primary">Admin Panel</a>'; };?>
	    <a href="logout.php" class="button button-blank"><span class="entypo-logout"></span></a>
	</div>
</div>

<br><br>

<div class="row home-sections">
    <div class="six columns">
		<div class="section" id="new">
		    <div class="entypo-list-add"></div>
		    <b>Open New Ticket</b>
		    <p>Create or view support tickets to receive responses from our team.</p>
	    </div>
	</div>
	
    <div class="six columns">
		<div class="section" id="current">
			<div class="entypo-list"></div>
		    <b>Current Tickets</b>
		    <p>View and manage any tickets that may have responses from our team.</p>
	    </div>
	</div>
  </div>
 
<div style="display: none" class="section_view_current">
<table class="u-full-width">
  <thead>
    <tr>
      <th>Subject</th>
      <th>Status</th>
      <th>Last Reply</th>
      <th>Recent</th>
    </tr>
  </thead>
  <tbody>
    <?php $tickets->my_tickets(); ?>
  </tbody>
</table>
</div>

<div style="display: none" class="section_view_new">
  <span id="create_ticket_error"></span>
	<form method="POST" id="create_ticket">
		<div class="row">
			<div class="columns six">
				<label for="subject">Subject</label>
				<input type="text" placeholder="Subject" class="u-full-width" id="subject">
			</div>
			
			<div class="columns six">
				<label for="department">Department</label>
				<select id="department" class="u-full-width">
					<option disabled="disabled">Please select department</option>
					<?php $tickets->get_departments(); ?>
				</select>
			</div>
		</div>
		
		<label for="subject">Message</label>
		<textarea placeholder="Message" id="message" style="min-height:300px;" class="u-full-width"></textarea>
		
		<button type="submit" name="submit">Post Ticket</button>
	</form>

</div>
 
</div>

<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
setInterval(function(){
$("#log").load(location.href + " #log");
}, 1000);
});
</script>

<?php 
	}else{
		header('Location: ./authenticate');
	}
	include 'core/includes/foot.php'; 
?>
