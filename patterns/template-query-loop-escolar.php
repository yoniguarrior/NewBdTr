<?php
/**
 * Title: Rejilla BdTescolar
 * Slug: newbdtr/template-query-loop-escolar
 * Categories: query, newbdtr
 * Block Types: core/query
 * Description: Entradas de la categoría Banco del Tiempo Escolar.
 *
 * @package NewBdTr
 */

$escolar_id = newbdtr_escolar_category_id();
?>
<!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[<?php echo (int) $escolar_id; ?>]}},"align":"wide","className":"newbdtr-query"} -->
<div class="wp-block-query alignwide newbdtr-query">
	<!-- wp:post-template {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
		<!-- wp:group {"className":"bg-surface-container-lowest rounded-card overflow-hidden border border-outline-variant/30 hover-lift h-full","layout":{"type":"constrained"}} -->
		<div class="wp-block-group bg-surface-container-lowest rounded-card overflow-hidden border border-outline-variant/30 hover-lift h-full">
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->
			<!-- wp:group {"className":"p-6 space-y-3","layout":{"type":"constrained"}} -->
			<div class="wp-block-group p-6 space-y-3">
				<!-- wp:post-date {"className":"newbdtr-post-date"} /-->
				<!-- wp:post-title {"isLink":true,"level":2,"className":"newbdtr-post-title"} /-->
				<!-- wp:post-excerpt {"excerptLength":22} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->
	<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"center"}} -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->
	<!-- wp:query-no-results -->
		<!-- wp:pattern {"slug":"newbdtr/hidden-no-results"} /-->
	<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
