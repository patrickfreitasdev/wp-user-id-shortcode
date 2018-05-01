<?php
    
/**
 * Plugin Name: User ID shortcut
 * Plugin URI: 
 * Description: This Plugin shows the USER ID number using a shortcut. It had been developed to help wordpress developers who are needs to show this information anywhere. 
 * Version: 1.0
 * Author: Patrick de Freitas
 * Author URI: http://github.com
 * License: GPLv3 or later
 * Text Domain: user-id-shortcut
 */

//Comments that show in plugin information.

/*
    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>
*/

//Using this to protect the plugin
defined('ABSPATH') or die('What are you looking for?');

//Starting the function to show ID user by Shortcut
function show(){
   
    ob_start();
    //Get the ID using as Codex site is indicating to do.
    $current_user = wp_get_current_user();
    //Verify if is there any user logged
    if($current_user->ID == 0){
        echo "<span class='usr-id'>No logged user</span>";
    }else{
    ?>
    <span class="usr-id"><?php 
        //This <span> can be used to style the number
        echo $current_user->ID ?>
    </span>
    <?php
    }
    return ob_get_clean();

}add_shortcode('show-me-id','show');
