<?php

add_filter( 'pre_option_active_plugins', function( $active_plugins ) {

	if ( empty( $active_plugins) )
		$active_plugins = array();

	if ( file_exists( plugin_dir_path( 'backupwordpress' ) ) )
		$active_plugins[] = 'backupwordpress/backupwordpress.php';


	foreach( array(
		'backupwordpress-pro-dreamobjects',
		'backupwordpress-pro-dropbox',
		'backupwordpress-pro-ftp',
		'backupwordpress-pro-gdrive',
		'backupwordpress-pro-rackspace',
		'backupwordpress-pro-s3',
		'backupwordpress-pro-winazure'
	) as $pro_plugin )

		$active_plugins[] = 'backupwordpress-pro/' . $pro_plugin . '/' . $pro_plugin . '.php';

	return $active_plugins;

} );