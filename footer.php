 <footer>
  <div class="container">
    <div class="row">
      <p>Copyright © 2017 <a href="http://juhastenroos.fi" target="_blank">Juha Stenroos</a></p>

    </div><!-- row-->
  </div><!--row -->

        <?php wp_footer(); ?>
</footer>





<?php

global $post;     // if outside the loop
$children = get_pages( array( 'child_of' => $post->ID ) );
if ( is_page() && $post->post_parent ) {
	echo "<script>
    $(document).ready(function () {
    
       $( '.menu-item-39' ).addClass( 'current-menu-item' );
 
		});
    </script>";

} elseif ( is_page() && count( $children ) > 0 )  {
    echo "<script>
    $(document).ready(function () {
    
       $( '.menu-item-39' ).addClass( 'current-menu-item' );
 
		});
    </script>";
}
?>



  </body>
</html>

