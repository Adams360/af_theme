<?php

function af_enqueue() {
    $uri = get_theme_file_uri();
    $ver = AF_DEV_MODE ? time() : false;

    wp_register_style( 'af_custom_styles', $uri . '/assets/css/styles.css', [], $ver );
    wp_register_script( 'af_custom_script', $uri . '/assets/js/app.js', [], $ver, true );

    wp_enqueue_style(  'af_custom_styles');
    wp_enqueue_script( 'af_custom_script'); 
}

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});
