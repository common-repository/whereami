<?php
/*******************************************************************************
Plugin Name: Where Am I 
Plugin URI: http://www.burobjorn.nl
Description: Adds html comment 'WHERE AM I' with server ip and name. Useful for debugging multiserver loadbalanced setups. 
Author: Bjorn Wijers <burobjorn at burobjorn dot nl> 
Version: 1.0
Author URI: http://www.burobjorn.nl
*******************************************************************************/   
   
/*  Copyright 2015
  
Where Am I  is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

Where Am I  is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
if( ! class_exists('WhereAmI') ) {
  class WhereAmI {
    static $instance;

    public function __construct() {
		  self::$instance = $this;
		  add_action( 'wp_head', array( $this, 'tell_me_where_am_i' ) );
    }
  
    public function tell_me_where_am_i() {
      echo "<!-- WHERE AM I? -->\n";  
      echo '<!-- IP: ' . $_SERVER['SERVER_ADDR'] . "-->\n";
      echo '<!-- SERVER NAME: ' . $_SERVER['SERVER_NAME'] . "-->\n";
    }  
  }
  new WhereAmI;
}
?>
