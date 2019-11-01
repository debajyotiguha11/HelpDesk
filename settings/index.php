<?php 
	include '../init.php'; 
	include '../core/includes/head.php'; 
	if($users->signed_in()){
?>
	
<div class="container">
	<div class="row">
		<div class="four columns settings-profile">
			<a href="../index1.php"><span class="entypo-left-open"></span>Dashboard</a>
			<ul>
				<li><b><h4><?php echo $users->getuserinfo('nick_name'); ?></h4></b></li>
				<li>Registered <?php echo $time->ago($users->getuserinfo('sign_up_date')); ?></li>
				<li>Last login <?php echo $time->ago($users->getuserinfo('last_login')); ?></li>
				<br>
				<li><b><?php echo $tickets->my_tickets_info('open'); ?></b> Open Tickets</li>
				<li><b><?php echo $tickets->my_tickets_info('resolved'); ?></b> Resolved Tickets</li>
				<li><b><?php echo $tickets->my_tickets_info('unanswered'); ?></b> Unanswered Tickets</li>
			</ul>
		</div>
		
		<div class="eight columns settings-forms">
			<div id="emailButton" class="accordionButton">Email Address</div>
			<div class="accordionContent">
			  <div id="mailErr"></div>
				<form id="change_email">
					<input class="u-full-width" autocomplete="off" id="cemail" type="email" placeholder="me@domain.com" value="<?php echo $users->getuserinfo('email') ?>">
					<button type="submit" name="submit_email">Update Email Address</button>
				</form>
			</div>
			
			<div id="passwordButton" class="accordionButton">Password</div>
			<div class="accordionContent">
			  <div id="pwErr"></div>
				<form id="change_password">
					<input class="u-full-width" id="ccurrent" type="password" placeholder="Confirm Current Password">
					<input class="u-full-width" id="cnew" type="password" placeholder="New Password">
					<button type="submit" name="submit_password">Update Password</button>
				</form>
			</div>
			
			<div id="nicknameButton" class="accordionButton">Nickname</div>
			<div class="accordionContent">
			  <div id="nickErr"></div>
				<form id="change_nickname">
					<input class="u-full-width" id="cnickname" type="text" autocomplete="off" placeholder="Nickname" value="<?php echo $users->getuserinfo('nick_name') ?>">
					<button type="submit">Update Nickname</button>
				</form>
			</div>
			
			<div id="urlButton" class="accordionButton">Website URL</div>
			<div class="accordionContent">
			  <div id="urlErr"></div>
				<form id="change_url">
					<input class="u-full-width" type="text" id="curl" autocomplete="off" placeholder="http://" value="<?php echo $users->getuserinfo('url') ?>">
					<button type="submit">Update Website URL</button>
					<button id="remove_url">Remove</button>
				</form>
			</div>
			
			<div class="accordionButton">Gender</div>
			<div class="accordionContent">
			<?php
				$cookie_name = "gender";
	    			if(isset($_COOKIE[$cookie_name])) {
	    				if($_COOKIE[$cookie_name] == 1){?>
	    					Male <input type="radio" name="gen" value=1 checked/>
						Female <input type="radio" name="gen" value=2 /><br>
	    			
	    			<?php
	    			}
	    			
	    			else{?>
				Male <input type="radio" name="gen" value=1 />
				Female <input type="radio" name="gen" value=2 checked/><br>
				<?php }} else {?>
				Male <input type="radio" name="gen" value=1 />
				Female <input type="radio" name="gen" value=2 /><br>
				<?php
				}
				?>
				<button id="update_gen">Update</button>
				
			</div>
			
			<?php if($admin->site_settings('self_delete_account') == 1) {?>
			
			<div class="accordionButton">Deactivating Account!</div>
			<div class="accordionContent">
				<p style="color:#e55">Please confirm that you wish to deactivate your account and lose all your data.</p>
				<form method="post" id="delete_account">
					<button type="submit">Deactivate my account</button>
				</form>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<?php 
	}else{
		header('Location: ../authenticate');
		die();
	}
	include '../core/includes/foot.php'; 
?>
