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

/**
 * Custom Post Types
 */
function pluginize_local_cptui_data($data = array())
{
    $theme_dir = get_stylesheet_directory();
    // Create our directory if it doesn't exist.
    if (!is_dir($theme_dir .= '/cpt-json')) {
        mkdir($theme_dir, 0755);
    }

    if (array_key_exists('cpt_custom_post_type', $data)) {
        // Fetch all of our post types and encode into JSON.
        $cptui_post_types = get_option('cptui_post_types', array());
        $content = json_encode($cptui_post_types);
        // Save the encoded JSON to a primary file holding all of them.
        file_put_contents($theme_dir . '/cpt_post_type_data.json', $content);
    }

    if (array_key_exists('cpt_custom_tax', $data)) {
        // Fetch all of our taxonomies and encode into JSON.
        $cptui_taxonomies = get_option('cptui_taxonomies', array());
        $content = json_encode($cptui_taxonomies);
        // Save the encoded JSON to a primary file holding all of them.
        file_put_contents($theme_dir . '/cpt_taxonomy_data.json', $content);
    }
}
add_action('cptui_after_update_post_type', 'pluginize_local_cptui_data');
add_action('cptui_after_update_taxonomy', 'pluginize_local_cptui_data');


