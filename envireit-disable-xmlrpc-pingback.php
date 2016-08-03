<?php

/*
Plugin Name: Envire.it Remove XMLRPC Pingback
Plugin URI: https://www.envire.it
Description: Envire.it Remove XMLRPC pingback function in order to prevent DDoS attacks 
Author: Sergio De Falco
Version: 1.0
Author URI: https://www.envire.it/
Text Domain: envireit-remove-pingback
Domain Path: /languages/
License: GPL v3
*/

function remove_xmlrpc_pingback() {
	unset( $methods['pingback.ping'] );
	return $methods;
}
add_filter( 'xmlrpc_methods', 'remove_xmlrpc_pingback' );
