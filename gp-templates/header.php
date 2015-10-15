<?php
gp_enqueue_style( 'base' );
gp_enqueue_script( 'jquery' );

include( get_template_directory() . '/header.php' );

?>
	<script type="text/javascript">document.body.className = document.body.className.replace('no-js','js');</script>
		<div class="gp-content">
	    <div id="gp-js-message"></div>
		<h1>
			<a class="logo" href="<?php echo gp_url( '/' ); ?>" rel="home">
				<img alt="GlotPress" src="<?php echo gp_url_img( 'glotpress-logo.png' ); ?>" />
			</a>
			<?php echo gp_breadcrumb(); ?>
			<span id="hello">
			<?php
			if ( is_user_logged_in() ):
				$user = wp_get_current_user();

				printf( __('Hi, %s.'), '<a href="'.gp_url( '/profile' ).'">'.$user->user_login.'</a>' );
				?>
				<a href="<?php echo gp_url('/logout')?>"><?php _e('Log out'); ?></a>
			<?php else: ?>
				<strong><a href="<?php echo gp_url_login(); ?>"><?php _e('Log in'); ?></a></strong>
			<?php endif; ?>
			<?php do_action( 'gp_after_hello' ); ?>
			</span>
			<div class="clearfix"></div>
		</h1>
		<div class="clear after-h1"></div>
		<?php if (gp_notice('error')): ?>
			<div class="error">
				<?php echo gp_notice( 'error' ); //TODO: run kses on notices ?>
			</div>
		<?php endif; ?>
		<?php if (gp_notice()): ?>
			<div class="notice">
				<?php echo gp_notice(); ?>
			</div>
		<?php endif; ?>
		<?php do_action( 'gp_after_notices' ); ?>
