<?php
class Notification {
	var $app;
	var $notify;
	var $submitted_email;
	var $notification_from;

	function __construct($app, $notify, $submitted_email, $notification_from) {
		$this->app = $app;
		$this->notify = $notify;
		$this->submitted_email = $submitted_email;
		$this->notification_from = $notification_from;
	}

	function send(){
		if($this->valid()) {
			// Send an email
			echo $this->valid();
			$subject = $this->app . ' Form Submission : ' . $email;
			$headers = "From: $this->app <$this->notification_from>\r\n";
			$headers .= "Reply-To: $this->submitted_email\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			$message = "<html><body>";
			$message .= "<strong>Someone has submitted the $this->app Signup Form:</strong><br/>";
			$message .= "<p>$this->submitted_email</p>";
			$message .= "</body></html>";
			mail($this->notify, $subject, $message, $headers);
			return "HTTP/1.1 200 OK";
		} else {
			return "HTTP/1.1 503 Service Temporarily Unavailable";
		}
	}

	function valid(){
		return (($this->notify != 'email@example.com') AND ($this->notification_from != 'server@example.com'));
	}

}
?>