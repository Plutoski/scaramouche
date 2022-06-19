<?php

/**
 * Thumbnails
 */
add_theme_support('post-thumbnails');

/**
 * Menu
 */
register_nav_menus([
    'primary_navigation' => __('Primaire navigatie', 'lustrum'),
]);

/**
 * Enable Nav Walker
 */
class AWP_Menu_Walker extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)
    {
        $output .= "<li class='". implode(" ", $item->classes ?? array()) ."'>";

        if ($item->url && $item->url != '#') {
            $output .= '<div class="drop"><a href="' . $item->url . '" target="' . $item->target . '">';
        } else {
            $output .= '<span>';
        }

        $output .= $item->title;

        if ($item->url && $item->url != '#') {
            $output .= '</a>';
        } else {
            $output .= '</span>';
        }

        if ($args->walker->has_children) {
            $output .= '<div class="chevron"></div></div>';
        }
    }
}
