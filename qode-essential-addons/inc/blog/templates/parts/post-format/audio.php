<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

$audio_meta = get_post_meta( get_the_ID(), 'qodef_post_format_audio_url', true );

if ( ! empty( $audio_meta ) ) {
	$oembed = wp_oembed_get( $audio_meta );
	if ( ! empty( $oembed ) ) {
		// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		echo wp_oembed_get( $audio_meta );
	} else {
		// Include featured image.
		qode_essential_addons_template_part( 'blog', 'templates/parts/post-info/image' );
		?>
		<div class="qodef-e-media-audio">
			<?php
			// Audio player settings.
			$settings = apply_filters( 'qode_essential_addons_filter_audio_post_format_settings', array() );

			// Init audio player.
			// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			echo wp_audio_shortcode( array_merge( array( 'src' => esc_url( $audio_meta ) ), $settings ) );
			?>
		</div>
	<?php }
} ?>
