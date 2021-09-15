<?php 
# Generate a psl-config.php file inside /cp/app_includes/psl-config.php directory
# Use this file as an example to fill the database info

define("HOST", "your-db-host");
define("USER", "your-db-username");
define("PASSWORD", "your-db-password");
define("DATABASE", "your-db-name");
define("CAN_REGISTER", "any");
define("DEFAULT_ROLE", "member");
define("SECURE", FALSE); // True on production

?>