		<ul>
			<li class="profile">
				<div class="row">
					<div class="three columns">
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
					</div>
					<div class="nine columns">
						<b><?php echo $users->getuserinfo('nick_name'); ?></b><br>
						Administrator<br>
						<a href="../index1.php"><span class="entypo-left-open"></span>User Panel</a>
					</div>
				 </div>
			</li>
			<a href="./"><li<?php if($admin_menu_active == 'dashboard'){ echo ' class="active"'; } ?>>
				Admin Dashboard
				<p>Overview of site statistics</p>
			</li></a>
			<a href="ticket_management.php"><li<?php if($admin_menu_active == 'ticket_management'){ echo ' class="active"'; } ?>>
				Tickets Management
				<p>View, answer and resolve tickets created.</p>
			</li></a>
			<a href="user_management.php"><li<?php if($admin_menu_active == 'user_management'){ echo ' class="active"'; } ?>>
				User Management
				<p>Monitor and modify user accounts</p>
			</li></a>
			<a href="site_management.php"><li<?php if($admin_menu_active == 'site_management'){ echo ' class="active"'; } ?>>
				Site Management
				<p>Modify sites default settings</p>
			</li></a>
		</ul>
