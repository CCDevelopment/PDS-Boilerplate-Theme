<?php
/**
 * The header for our theme
 */
?>
<!DOCTYPE html>
<html>
<div class="welcome-message" style="display:none;">
		XXXXXXXXXXXXXXXXXXXXXXXXXXXXX
	  XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
	 XXXXXXXXXXXXXXXXXX         XXXXXXXX
	XXXXXXXXXXXXXXXX              XXXXXXX		Hello There,
	XXXXXXXXXXXXX                   XXXXX		Perhaps you might be interested in working with us?
	 XXX     _________ _________     XXX		If you're already here we'd love to talk to you.
	  XX    I  _xxxxx I xxxxx_  I    XX			Get in touch and let's help budding developers grow together!
	 ( X----I         I         I----X )
	( +I    I      00 I 00      I    I+ )		Looking forward to hearing from you.
	 ( I    I    __0  I  0__    I    I )
	  (I    I______ /   \_______I    I)
	   I           ( ___ )           I
	   I    _  :::::::::::::::  _    i
	    \    \___ ::::::::: ___/    /
	     \_      \_________/      _/
	       \        \___,        /
	         \                 /
	          |\             /|
	          |  \_________/  |

 _______ _                 _          ______            _____ _               _    _                ____        _
|__   __| |               | |        |  ____|          / ____| |             | |  (_)              / __ \      | |
   | |  | |__   __ _ _ __ | | _____  | |__ ___  _ __  | |    | |__   ___  ___| | ___ _ __   __ _  | |  | |_   _| |_
   | |  | '_ \ / _` | '_ \| |/ / __| |  __/ _ \| '__| | |    | '_ \ / _ \/ __| |/ | | '_ \ / _` | | |  | | | | | __|
   | |  | | | | (_| | | | |   <\__ \ | | | (_) | |    | |____| | | |  __| (__|   <| | | | | (_| | | |__| | |_| | |_
   |_|  |_| |_|\__,_|_| |_|_|\_|___/ |_|  \___/|_|     \_____|_| |_|\___|\___|_|\_|_|_| |_|\__, |  \____/ \__,_|\__|
                                                                                            __/ |
	                                                                                         |___/
__          ___           _         _    _           _              ____               _    _                 _          __
\ \        / | |         | |       | |  | |         | |            / __ \             | |  | |               | |  _      \ \
 \ \  /\  / /| |__   __ _| |_ ___  | |  | |_ __   __| | ___ _ __  | |  | |_   _ _ __  | |__| | ___   ___   __| | (_)______| |
  \ \/  \/ / | '_ \ / _` | __/ __| | |  | | '_ \ / _` |/ _ | '__| | |  | | | | | '__| |  __  |/ _ \ / _ \ / _` |   |______| |
   \  /\  /  | | | | (_| | |_\__ \ | |__| | | | | (_| |  __| |    | |__| | |_| | |    | |  | | (_) | (_) | (_| |  _       | |
    \/  \/   |_| |_|\__,_|\__|___/  \____/|_| |_|\__,_|\___|_|     \____/ \__,_|_|    |_|  |_|\___/ \___/ \__,_| ( )      | |
																																												                         |/      /_/


</div>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php the_title();?></title>

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<?php wp_head();?>

	</head>
	<body>

		<div class="body">
      <div role="main" class="main">

				<?php get_template_part('partials/navigation/navigation','feature-headers-classic');?>
