<?php
/**
 * Created by PhpStorm.
 * User: pluffmaster
 * Date: 9/6/15
 * Time: 8:38 PM
 */

/**
 * Register our sidebars and widgetized areas.
 *
 */
function cmat_home_hero_widget_area()
{

    register_sidebar(array(
        'name' => 'Home Hero',
        'id' => 'home-hero',
    ));

}

add_action('widgets_init', 'cmat_home_hero_widget_area');