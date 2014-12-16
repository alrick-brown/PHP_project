<?php
include('config.php')
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <title>CheapoMail</title>
    </head>
    <body>    	<div>
        	 <h1><a href="<?php echo $url_home; ?>">CheapoMail</a></h1>
	    </div>
        <div class="content">
<?php
//We display a welcome message, if the user is logged, we display it username
?>
Hello<?php if(isset($_SESSION['username'])){echo ' '.htmlentities($_SESSION['username'], ENT_QUOTES, 'UTF-8');} ?> ...<br />
Welcome to CheapoMail!<br />
<!-- You can <a href="users.php">see the list of users</a>. -->
<?php
//If the user is logged, we display links to edit his infos, to see his pms and to log out
if(isset($_SESSION['username']))
{
//We count the number of new messages the user has
$nb_new_pm = mysql_fetch_array(mysql_query('select count(*) as nb_new_pm from pm where ((user1="'.$_SESSION['userid'].'" and user1read="no") or (user2="'.$_SESSION['userid'].'" and user2read="no")) and id2="1"'));
//The number of new messages is in the variable $nb_new_pm
$nb_new_pm = $nb_new_pm['nb_new_pm'];
//We display the links
?>
<!-- <a href="modify_user.php">Edit my personnal informations</a> --> <br />
<a href="list_pm.php">My personnal messages(<?php echo $nb_new_pm; ?> unread)</a><br />
<a href="connect.php">Click here to Logout</a>
<?php
}
else
{
//Otherwise, we display a link to log in and to Sign up
?>
<!-- <a href="create_user.php">Sign up</a><br /> -->
<a href="connect.php">Click here to Log in</a>
<?php
}
?>
		</div>
	</body>
</html>