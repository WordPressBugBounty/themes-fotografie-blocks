<?php
/**
 * Title: Sidebar Products
 * Slug: fotografie-blocks/sidebar-products
 * Categories: fotografie-blocks, page
 */
?>

<!-- wp:buttons {"className":"btn-mobile-filters","style":{"spacing":{"margin":{"top":"var:preset|spacing|14","bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons btn-mobile-filters"
	style="margin-top:var(--wp--preset--spacing--14);margin-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:button {"className":"is-style-outline","style":{"typography":{"lineHeight":"1.56","textTransform":"uppercase"},"border":{"radius":"0px","width":"1px"}},"fontSize":"medium","borderColor":"border-color"} -->
	<div class="wp-block-button has-custom-font-size is-style-outline has-medium-font-size"
		style="line-height:1.56;text-transform:uppercase"><a
			class="wp-block-button__link has-border-color has-border-color-border-color wp-element-button"
			style="border-width:1px;border-radius:0px"><?php esc_html_e('Filters', 'fotografie-blocks'); ?></a></div>
	<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

<!-- wp:group {"className":"wp-block-widget-area wp-block-sidebar mobile-filters"} -->
<div class="wp-block-group wp-block-widget-area wp-block-sidebar mobile-filters">
	<!-- wp:group {"className":"wp-block-widget"} -->
	<div class="wp-block-group wp-block-widget">
		<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
		<h2 id="search-products" style="margin-top: 0px; margin-right: 0px; margin-bottom: 20px; margin-left: 0px;"><?php esc_html_e('Search Products', 'fotografie-blocks'); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search products…","buttonText":"Search","buttonUseIcon":true,"query":{"post_type":"product"}} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"wp-block-widget"} -->
	<div class="wp-block-group wp-block-widget">
		<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
		<h2 id="categories" style="margin-top: 0px; margin-right: 0px; margin-bottom: 20px; margin-left: 0px;"><?php esc_html_e('Categories', 'fotografie-blocks'); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:woocommerce/product-categories {"isHierarchical":false} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"wp-block-widget"} -->
	<div class="wp-block-group wp-block-widget">
		<!-- wp:woocommerce/filter-wrapper {"filterType":"price-filter","heading":"Filter by price"} -->
		<div class="wp-block-woocommerce-filter-wrapper">
			<!-- wp:heading {"level":3} -->
			<h3><?php esc_html_e('Filter by price', 'fotografie-blocks'); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:woocommerce/price-filter {"heading":""} -->
			<div class="wp-block-woocommerce-price-filter is-loading" data-showinputfields="true" data-showfilterbutton="false" data-heading="" data-heading-level="3">
				<span aria-hidden="true" class="wc-block-product-categories__placeholder"></span>
			</div>
			<!-- /wp:woocommerce/price-filter -->
		</div>
		<!-- /wp:woocommerce/filter-wrapper -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"wp-block-widget  wp-filter-by-size"} -->
	<div class="wp-block-group wp-block-widget wp-filter-by-size">
		<!-- wp:woocommerce/filter-wrapper {"filterType":"attribute-filter","heading":"Filter by size"} -->
		<div class="wp-block-woocommerce-filter-wrapper">
			<!-- wp:heading {"level":3} -->
			<h3><?php esc_html_e('Filter by size', 'fotografie-blocks'); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:woocommerce/attribute-filter {"attributeId":2,"heading":""} -->
			<div class="wp-block-woocommerce-attribute-filter is-loading" data-attribute-id="2" data-show-counts="true" data-query-type="or" data-heading="" data-heading-level="3">
				<span aria-hidden="true" class="wc-block-product-attribute-filter__placeholder"></span>
			</div>
			<!-- /wp:woocommerce/attribute-filter -->
		</div>
		<!-- /wp:woocommerce/filter-wrapper -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"wp-block-widget wp-filter-by-color"} -->
	<div class="wp-block-group wp-block-widget wp-filter-by-color">
		<!-- wp:woocommerce/filter-wrapper {"filterType":"attribute-filter","heading":"Filter by Color"} -->
		<div class="wp-block-woocommerce-filter-wrapper">
			<!-- wp:heading {"level":3} -->
			<h3><?php esc_html_e('Filter by Color', 'fotografie-blocks'); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:woocommerce/attribute-filter {"attributeId":1,"showCounts":false,"selectType":"single","heading":""} -->
			<div class="wp-block-woocommerce-attribute-filter is-loading" data-attribute-id="1" data-show-counts="false" data-query-type="or" data-heading="" data-heading-level="3" data-select-type="single">
				<span aria-hidden="true" class="wc-block-product-attribute-filter__placeholder"></span>
			</div>
			<!-- /wp:woocommerce/attribute-filter -->
		</div>
		<!-- /wp:woocommerce/filter-wrapper -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
