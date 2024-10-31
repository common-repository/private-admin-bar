=== Private Admin Bar ===

Contributors: Tobias Lundgren
Tested up to: 3.9.1

== Description ==
A simple way to makes your Admin Bar hidden for non-logged users but visible for you.

You can also add the code to your functions.php if you don’t want the plugin: 

// Hide Admin Bar for non-logged users
function hide_admin_bar()
{
	if( is_user_logged_in() ){
    	return true;
    }else{
		return false;   
    }
}

add_filter('show_admin_bar', 'hide_admin_bar');

== Installation ==

1. Upload the `private_admin_bar` directory to the `/wp-content/plugins/` directory of your site or just through the ’Plugins’ menu in WordPress.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Enjoy your admin bar when nobody else can do.

