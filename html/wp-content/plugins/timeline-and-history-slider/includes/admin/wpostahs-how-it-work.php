<?php
/**
 * Pro Designs and Plugins Feed
 *
 * @package Timeline and History Slider
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<div class="wrap wpostahs-wrap">
<h2><?php _e( 'How It Works', 'timeline-and-history-slider' ); ?></h2>
	<style type="text/css">
		.wpos-pro-box .hndle{background-color:#0073AA; color:#fff;}
		.wpos-pro-box.postbox{background:#dbf0fa none repeat scroll 0 0; border:1px solid #0073aa; color:#191e23;}
		.postbox-container .wpos-list li:before{font-family: dashicons; content: "\f139"; font-size:20px; color: #0073aa; vertical-align: middle;}
		.wpostahs-wrap .wpos-button-full{display:block; text-align:center; box-shadow:none; border-radius:0;}
		.wpostahs-shortcode-preview{background-color: #e7e7e7; font-weight: bold; padding: 2px 5px; display: inline-block; margin:0 0 2px 0;}
		.upgrade-to-pro{font-size:18px; text-align:center; margin-bottom:15px;}
		.wpos-copy-clipboard{-webkit-touch-callout: all; -webkit-user-select: all; -khtml-user-select: all; -moz-user-select: all; -ms-user-select: all; user-select: all;}
		.wpos-new-feature{ font-size: 10px; margin-left:2px; color: #fff; font-weight: bold; background-color: #03aa29; padding:1px 4px; font-style: normal; }
	</style>

	<div class="post-box-container">
		<div id="poststuff">
			<div id="post-body" class="metabox-holder columns-2">
				<!--How it workd HTML -->
				<div id="post-body-content">
					<div class="meta-box-sortables">
						<div class="postbox">
							<div class="postbox-header">
								<h2 class="hndle">
									<span><?php _e( 'How It Works - Display and shortcode', 'timeline-and-history-slider' ); ?></span>
								</h2>
							</div>
							<div class="inside">
								<table class="form-table">
									<tbody>
										<tr>
											<th>
												<label><?php _e('Geeting Started with Timeline and History Slider', 'timeline-and-history-slider'); ?>:</label>
											</th>
											<td>
												<ul>
													<li><?php _e('Step-1. Go to "Timeline Slider --> Add slide tab".', 'timeline-and-history-slider'); ?></li>
													<li><?php _e('Step-2. Add Album title, description and featured image and Publish.', 'timeline-and-history-slider'); ?></li>
													<li><?php _e('Step-3. Also you can display multiple timeline with category shortcode. Just go to "Timeline Slider --> category" and create the category. ', 'timeline-and-history-slider'); ?></li>
													<li><?php _e('Step-4. Asign the timeline post to respective category and use the category shortcode to display', 'timeline-and-history-slider'); ?></li>
												</ul>
											</td>
										</tr>

										<tr>
											<th>
												<label><?php _e('How Shortcode Works', 'timeline-and-history-slider'); ?>:</label>
											</th>
											<td>
												<ul>
													<li><?php _e('Step-1. Create a page like Timeline OR Post Timeline.', 'timeline-and-history-slider'); ?></li>
													<li><?php _e('Step-2. Put below shortcode as per your need.', 'timeline-and-history-slider'); ?></li>
												</ul>
											</td>
										</tr>

										<tr>
											<th>
												<label><?php _e('All Shortcodes', 'timeline-and-history-slider'); ?>:</label>
											</th>
											<td>
												<span class="wpos-copy-clipboard wpostahs-shortcode-preview">[th-slider]</span> – <?php _e('Timeline Slider Shortcode', 'timeline-and-history-slider'); ?>
											</td>
										</tr>
									</tbody>
								</table>
							</div><!-- .inside -->
						</div><!-- #general -->

						<div class="postbox">
							<div class="postbox-header">
								<h2 class="hndle">
									<span><?php _e( 'Gutenberg Support', 'timeline-and-history-slider' ); ?></span>
								</h2>
							</div>
							<div class="inside">
								<table class="form-table">
									<tbody>
										<tr>
											<th>
												<label><?php _e('How it Work', 'timeline-and-history-slider'); ?>:</label>
											</th>
											<td>
												<ul>
													<li><?php _e('Step-1. Go to the Gutenberg editor of your page.', 'timeline-and-history-slider'); ?></li>
													<li><?php _e('Step-2. Search "Timeline Slider" keyword in the gutenberg block list.', 'timeline-and-history-slider'); ?></li>
													<li><?php _e('Step-3. Add any block of Timeline Slider and you will find its relative options on the right end side.', 'timeline-and-history-slider'); ?></li>
												</ul>
											</td>
										</tr>											
									</tbody>
								</table>
							</div><!-- .inside -->
						</div><!-- .postbox -->

						<div class="postbox">
							<div class="postbox-header">
								<h2 class="hndle">
									<span><?php _e( 'Need Support?', 'timeline-and-history-slider' ); ?></span>
								</h2>
							</div>
							<div class="inside">
								<table class="form-table">
									<tbody>
										<tr>
											<td>
												<p><?php _e('Check plugin document for shortcode parameters and demo for designs.', 'timeline-and-history-slider'); ?></p> <br/>
												<a class="button button-primary" href="https://docs.wponlinesupport.com/timeline-and-history-slider/" target="_blank"><?php _e('Documentation', 'timeline-and-history-slider'); ?></a>
												<a class="button button-primary" href="https://demo.wponlinesupport.com/timeline-and-history-slider-demo/" target="_blank"><?php _e('Demo for Designs', 'timeline-and-history-slider'); ?></a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div><!-- .postbox -->

						<div class="postbox">
							<div class="postbox-header">
								<h2 class="hndle">
									<span><?php _e( 'Help to improve this plugin!', 'timeline-and-history-slider' ); ?></span>
								</h2>
							</div>
							<div class="inside">
								<p><?php _e('Enjoyed this plugin? You can help by rate this plugin ', 'timeline-and-history-slider'); ?><a href="https://wordpress.org/support/plugin/timeline-and-history-slider/reviews/" target="_blank"><?php _e('5 stars!', 'timeline-and-history-slider'); ?></a></p>
							</div><!-- .inside -->
						</div><!-- #general -->
					</div><!-- .meta-box-sortables -->
				</div><!-- #post-body-content -->

				<!--Upgrad to Pro HTML -->
				<div id="postbox-container-1" class="postbox-container">

					<div class="meta-box-sortables">
						<div class="postbox wpos-pro-box">
							<h3 class="hndle">
								<span><?php _e( 'Upgrate to Pro', 'timeline-and-history-slider' ); ?></span>
							</h3>
							<div class="inside">
								<ul class="wpos-list">
									<li><?php _e( '12+ cool designs', 'timeline-and-history-slider' ); ?></li>
									<li><?php _e( 'Create unlimited timeline stories inside your WordPress website or blog.', 'timeline-and-history-slider' ); ?></li>
									<li><?php _e( 'Use via 2 Shortcodes and adding 12+ Designs', 'timeline-and-history-slider' ); ?></li>
									<li><?php _e( 'Vertical and Horizontal Timeline', 'timeline-and-history-slider' ); ?></li>
									<li><?php _e( 'Also work with WordPress POST', 'timeline-and-history-slider' ); ?></li>
									<li><?php _e( 'Timeline Category Management – Add stories in specific category.', 'timeline-and-history-slider' ); ?></li>
									<li><?php _e( 'Timeline Stories Content Format – Add font awesome icon to display timeline stories format.', 'timeline-and-history-slider' ); ?></li>
									<li><?php _e( 'Timeline Scrolling Navigation – Quickly and easily navigate your timeline with a beautiful scrolling navigation inside your timeline.', 'timeline-and-history-slider' ); ?></li>
									<li><?php _e( 'Mobile Compatibility View', 'timeline-and-history-slider' ); ?></li>
									<li><?php _e( 'Gutenberg Block Supports.', 'timeline-and-history-slider'); ?></li>
									<li><?php _e( 'WPBakery Page Builder Supports', 'timeline-and-history-slider'); ?></li>
									<li><?php _e( 'Elementor, Beaver and SiteOrigin Page Builder Support.', 'timeline-and-history-slider'); ?> <span class="wpos-new-feature">New</span></li>
									<li><?php _e( 'Divi Page Builder Native Support.', 'timeline-and-history-slider'); ?> <span class="wpos-new-feature">New</span></li>
									<li><?php _e( 'Fusion Page Builder (Avada) native support.', 'timeline-and-history-slider'); ?> <span class="wpos-new-feature">New</span></li>
									<li><?php _e( 'WP Templating Features', 'timeline-and-history-slider' ); ?></li>
									<li><?php _e( 'Custom CSS', 'timeline-and-history-slider' ); ?></li>
									<li><?php _e( 'Fully responsive', 'timeline-and-history-slider' ); ?></li>
									<li><?php _e( '100% Multi language', 'timeline-and-history-slider' ); ?></li>
								</ul>
								<div class="upgrade-to-pro"><?php echo sprintf( __( 'Gain access to <strong>Timeline and History slider</strong> included in <br /><strong>Essential Plugin Bundle', 'timeline-and-history-slider' ) ); ?></div>
								<a class="button button-primary wpos-button-full" href="https://www.wponlinesupport.com/wp-plugin/timeline-history-slider/?ref=WposPratik&utm_source=WP&utm_medium=Timeline&utm_campaign=Upgrade-PRO" target="_blank"><?php _e('Go Premium ', 'timeline-and-history-slider'); ?></a>	
								<p><a class="button button-primary wpos-button-full" href="https://demo.wponlinesupport.com/prodemo/timeline-and-history-slider-pro/" target="_blank"><?php _e('View PRO Demo ', 'timeline-and-history-slider'); ?></a></p>
							</div><!-- .inside -->
						</div><!-- #general -->
					</div><!-- .meta-box-sortables -->
				</div><!-- #post-container-1 -->
			</div><!-- #post-body -->
		</div><!-- #poststuff -->
	</div>
</div>