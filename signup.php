<?php
	include('includes/config.php');
	include('includes/notification.php');
	$notification = new Notification($conf['app_name'], $_POST['email'], $conf['notify'], $conf['notification_from']);
	@header($notification->send());
?>