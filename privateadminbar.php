<?php
/**
 * Plugin Name: Private Admin Bar
 * Plugin URI: http://www.lundgrendesign.se/private-admin-bar
 * Description: Make your Admin Bar hidden for non-logged users but visible for you.
 * Version: 1.0
 * Author: Tobias Lundgren
 * Author URI: http://www.lundgrendesign.se/
 * License: GPL2 - http://www.gnu.org/licenses/gpl-2.0.html
 */

function hide_admin_bar()
{
  if( is_user_logged_in() ){
      return true;
    }else{
    return false;   
    }
}

add_filter('show_admin_bar', 'hide_admin_bar');
?>