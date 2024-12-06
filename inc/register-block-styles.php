<?php
/**
 * Block styles.
 *
 * @package fse-starter-theme
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function fse_starter_theme_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'fse-starter-theme-flat-button',
			'label' => __( 'Flat button', 'fse-starter-theme' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'fse-starter-theme-list-underline',
			'label' => __( 'Underlined list items', 'fse-starter-theme' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'fse-starter-theme-box-shadow',
			'label' => __( 'Box shadow', 'fse-starter-theme' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'fse-starter-theme-box-shadow',
			'label' => __( 'Box shadow', 'fse-starter-theme' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'fse-starter-theme-box-shadow',
			'label' => __( 'Box shadow', 'fse-starter-theme' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/details',
		array(
			'name'  => 'fse-starter-theme-plus',
			'label' => __( 'Plus & minus', 'fse-starter-theme' ),
		)
	);
}
add_action( 'init', 'fse_starter_theme_register_block_styles' );

/**
 * This is an example of how to unregister a core block style.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 * @see https://github.com/WordPress/gutenberg/pull/37580
 *
 * @since 1.0.0
 *
 * @return void
 */
function fse_starter_theme_unregister_block_style() {
	wp_enqueue_script(
		'fse-starter-theme-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		FSE_STARTER_THEME_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'fse_starter_theme_unregister_block_style' );
