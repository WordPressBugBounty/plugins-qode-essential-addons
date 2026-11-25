<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}
?>
<div <?php qode_essential_addons_framework_class_attribute( $holder_classes ); ?> <?php echo qode_essential_addons_get_slider_marker_attr( $holder_classes ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?> <?php qode_essential_addons_framework_inline_attrs( $data_attr ); ?>>
	<div class="qodef-grid-inner">
		<?php
		// Include global masonry template from theme.
		qode_essential_addons_template_part( 'masonry', 'templates/sizer-gutter', '', $params['behavior'] );

		// Include items.
		qode_essential_addons_template_part( 'plugins/woocommerce/shortcodes/product-list', 'templates/loop', '', $params );
		?>
	</div>
	<?php
	// Include global pagination from theme.
	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	echo apply_filters( 'qode_essential_addons_filter_list_pagination', qode_essential_addons_get_template_part( 'pagination', 'templates/pagination', 'standard', $params ), $params );
	?>
</div>
