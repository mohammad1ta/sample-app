<?php

error_reporting(0);
@ob_start();
@session_start ();

include( 'system/core/MainLoader.php' );

new MainLoader();

?>
