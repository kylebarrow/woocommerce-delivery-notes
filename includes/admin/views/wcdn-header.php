<?php
/**
 * Admin header load.
 *
 * @package woocommerce-print-invoice-delivery-notes
 */

?>
<div class="wcdn_container">
	<?php
	$h_tab = array(
		'wcdn_general'   => array( __( 'General', 'woocommerce-delivery-notes' ), 'wcdn-general.php' ),
		'wcdn_document'  => array( __( 'Documents', 'woocommerce-delivery-notes' ), 'wcdn-document.php' ),
		'wcdn_helpguide' => array( __( 'Help & Guide', 'woocommerce-delivery-notes' ), 'wcdn-helpguide.php' ),
	);
	$file  = 'wcdn-general.php';
	?>
	<ul class="nav-tabs wcdn_main_tab">
		<li style="padding: 0px 30px;">
			<img src="<?php echo esc_url( WooCommerce_Delivery_Notes::$plugin_url . 'assets/images/invoice-logo.svg' ); ?>">
		</li>
		<?php
		foreach ( $h_tab as $key => $value ) {
			$class = '';
			if ( isset( $_GET['setting'] ) && $_GET['setting'] === $key ) { // phpcs:ignore
				$class = 'active';
				$file  = $value[1];
			} elseif ( ! isset( $_GET['setting'] ) && 'wcdn_general' === $key ) { // phpcs:ignore
				$class = 'active';
			}
			?>
			<li class="nav-item">
				<a class="nav-link <?php echo esc_attr( $class ); ?>" href="<?php echo esc_url( get_admin_url() . 'admin.php?page=wc-settings&tab=wcdn-settings&setting=' . $key ); ?>"><?php echo esc_html( $value[0] ); ?></a>
			</li>
			<?php
		}
		?>
		<li>
			<?php echo 'v ' . esc_html( WooCommerce_Delivery_Notes::$plugin_version ); ?>
		</li>
	</ul>
	<div class="tab_container">
		<?php
			require_once $file;
		?>
	</div>
	<div class="wcdn-footer-top">
		<div class="wcdn-footer">
			<div class="tab_container">
				<div class="row">
					<div class="col-md-12">
						<div class="footer-wrap">
							<!-- <div class="alert alert-dark alert-dismissible fade show" role="alert">
								<img class="msg-icon" src="<?php echo plugins_url() . '/woocommerce-delivery-notes/assets/images/icon-info-grey.svg'; ?>" alt="Logo" /><a href="<?php echo esc_url( 'https://www.tychesoftwares.com/store/premium-plugins/woocommerce-subscriptions-compatibility-addon-for-order-delivery-date-pro-for-woocommerce-plugin/?utm_source=ordddprofooter&utm_medium=link&utm_campaign=OrderDeliveryDatePRoPlugin' ); ?>" target="_blank">Get our Subscriptions Addon</a> & setup recurring deliveries with WooCommerce Subscriptions plugin & Order Delivery Date plugin.
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div> -->

							<div class="ft-text">
								<p><a href="<?php echo esc_url( 'https://tychesoftwares.freshdesk.com/support/home/?utm_source=ordddprofooter&utm_medium=link&utm_campaign=OrderDeliveryDatePRoPlugin' ); ?>" target="_blank">Need Support?</a> <strong>We’re always happy to help you.</strong></p>
								<p>If this plugin helped you, <a href="<?php echo esc_url( 'https://www.tychesoftwares.com/submit-review/?utm_source=ordddprofooter&utm_medium=link&utm_campaign=OrderDeliveryDatePRoPlugin' ); ?>" target="_blank">please rate it</a> <span class="rating">★★★★★</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

