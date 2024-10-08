<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}
?>
<div class="qodef-no-tab-wrapper <?php echo esc_attr( $class ); ?>">
	<div class="row">
		<?php
		foreach ( $this_object->get_children() as $child ) {
			$child->render();
		}
		?>
	</div>
</div>
