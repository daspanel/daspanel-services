<?php

function adminer_object()
{
	// Required to run any plugin.
	include_once "./plugins/plugin.php";

	// Plugins auto-loader.
	foreach (glob("plugins/*.php") as $filename) {
		include_once "./$filename";
	}

	// Specify enabled plugins here.
	$plugins = array(
		//new AdminerDatabaseHide(array("mysql", "information_schema", "performance_schema")),
		// new AdminerLoginServers(array(filter_input(INPUT_SERVER, 'SERVER_NAME'))),
		new AdminerSimpleMenu(),
		new AdminerCollations(array("utf8_general_ci", "utf8mb4_general_ci")),
		new AdminerJsonPreview(),

		// AdminerTheme has to be the last one.
		new AdminerTheme(),
	);

	return new AdminerPlugin($plugins);
}

# Hack to allow adminer work as behing an fcgi proxy using url like http://example.com/adminer
# http://stackoverflow.com/questions/30489332/adminer-login-via-a-reverse-proxy
#$_SERVER["REQUEST_URI"] = "/svc/adminer/index.php";

// Include original Adminer or Adminer Editor.
include "./adminer.php";
