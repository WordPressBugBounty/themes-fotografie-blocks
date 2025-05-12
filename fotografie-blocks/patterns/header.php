<?php

/**
 * Title: Header
 * Slug: fotografie-blocks/header
 * Categories: fotografie-blocks, header
 */
?>

<!-- wp:group {"align":"full","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0px"}},"className":"wp-block-main-header","layout":{"inherit":true,"type":"constrained"}} -->
	<div class="wp-block-group alignfull wp-block-main-header"><!-- wp:group {"style":{"spacing":{"blockGap":"20px","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:site-logo {"shouldSyncIcon":false} /-->

			<!-- wp:group {"style":{"spacing":{"blockGap":"21px"}}} -->
			<div class="wp-block-group"><!-- wp:site-title {"textAlign":"center"} /-->

				<!-- wp:site-tagline {"textAlign":"center"} /-->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"positioned-search","layout":{"type":"constrained"}} -->
			<div class="wp-block-group positioned-search">
				<!-- wp:group {"className":"wp-primary-search","layout":{"type":"default"}} -->
				<div class="wp-block-group wp-primary-search">
					<!-- wp:group {"className":"wp-search-toggle-container","layout":{"type":"default"}} -->
					<div class="wp-block-group wp-search-toggle-container">
						<!-- wp:group {"className":"wp-search-toggle","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"menu-color","layout":{"type":"default"}} -->
						<div class="wp-block-group wp-search-toggle has-menu-color-background-color has-background"
							style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph -->
							<p>Search</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"className":"wp-search-container search-container","layout":{"type":"default"}} -->
					<div class="wp-block-group wp-search-container search-container">
						<!-- wp:search {"showLabel":false,"placeholder":"Search a Keyword...","buttonText":"Search"} /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"align":"full","style":{"border":{"top":{"color":"var:preset|color|border-color","width":"1px"}},"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
		<div class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px"><!-- wp:navigation {"icon":"menu","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"layout":{"icon":"menu","type":"flex","setCascadingProperties":true,"justifyContent":"center"},"style":{"typography":{"textDecoration":"none"},"spacing":{"blockGap":"28px"}}} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
