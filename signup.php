<?php
	include('includes/config.php');
	include('includes/notification.php');
	$notification = new Notification($conf['app_name'], $conf['notify'], $_POST['email'], $conf['notification_from']);
	@header($notification->send());
?>