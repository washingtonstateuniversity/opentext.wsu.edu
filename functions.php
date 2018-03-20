<?php

namespace WSU\OpenText\Theme;

add_action( 'after_setup_theme', 'WSU\OpenText\Theme\remove_parent_styles', 11 );

function remove_parent_styles() {
    remove_action( 'wp_enqueue_scripts', '\Aldine\Actions\enqueue_assets' );
    remove_action( 'init', '\Aldine\Actions\add_editor_styles' );
}