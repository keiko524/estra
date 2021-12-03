
<?php
  $post = $wp_query->post;
  if ( in_category('interview') ) {
	  include(TEMPLATEPATH.'/single-interview.php');
  } else {
	  include(TEMPLATEPATH.'/single-normal.php');
  }
?>