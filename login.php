<?php
include 'config.php';
//Include GP config file && User class
include_once 'gpConfig.php';

	$authUrl = $gClient->createAuthUrl();
?>
<a href="<?php echo filter_var($authUrl, FILTER_SANITIZE_URL); ?>">
	<img src="assets/images/glogin.png" alt=""/>
</a>