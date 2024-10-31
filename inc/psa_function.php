<?php 
//FORM FOR YOU SEARCH
function post_search_ajax( ) {

		$form = _e('<form role = "search" method = "post" id = "search-form" action>
					<input class = "search-hash" id = "psa-search-form" type = "text" />
				</form>','post_search_ajax');

		return $form;
}

add_shortcode( 'searchformajax', 'post_search_ajax' );

// YOUR RESULT
function post_search_ajax_result( ) {

	    $result = _e('<div id = "search-results"></div>','post_search_ajax');

		return $result;
}
add_shortcode( 'searchresult', 'post_search_ajax_result' );

add_image_size('psa_size', 74, 74  );

add_action('wp_ajax_nopriv_ajaxnews','psa_update_search');
add_action('wp_ajax_ajaxnews','psa_update_search');

function psa_update_search() {
	$title = sanitize_text_field( $_POST['searchvar'] );
	$the_query = new WP_Query (array( 
					'post_type' 	=> 'post',
					'order'	    	=> 'ACS',
					'Post_per_page' => '5',
					 's'			=> $title,

		));
	echo '<div class = "psa-row">';
		if ( $the_query->have_posts() ) : ?>
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>													
								<div class = " col-s-1">
									<a href = "<?php the_permalink(); ?>">
									<?php 
											if ( has_post_thumbnail() ) {
												the_post_thumbnail('psa_size'); 
												}else  echo '<img src = "'.plugins_url('img/dummy-image.jpg', dirname( __FILE__ )).'" alt = "dummy-image"  class = "dummy-image" />'; ?>
										</a>
								</div>
								<div class = "col-s-11">
									<a href = "<?php the_permalink(); ?>">
										<h4><?php echo _e(get_the_title(),'post_search_ajax'); ?></h4>
									</a>
								</div>
							<div class="psa-clearfix"></div>
							 <?php endwhile; 
		
					 endif; 
			echo '</div>';
	die(); 
}

?>