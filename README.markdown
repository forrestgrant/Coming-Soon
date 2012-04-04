# Coming Soon

Simple "Coming Soon" page with email capture.

## Install
	$ git clone http://github.com/forrestgrant/textr
	$ cd textr
	$ rake build
	$ rake install

## config.php
	<?php
		$conf['app_name'] = "Sample App";
		$conf['notify'] = "email@example.com";
		$conf['notification_from'] = "server@example.com";
	?>