<?php 
get_header();

// IDs of main cat pages see in functions.php in $frontPageIDs

?>


<div class="page-wrapper page-wrapper--flex">
    <nav class="main-navigation"  aria-label="main navigation">
        <ul class="thumb-wrapper">
            <li  class="thumb">
                <a href="<?php echo site_url('/design')?>" title="Design">
                    <?php echo get_the_post_thumbnail(  $frontPageIDs[design], 'thumbnail' ); ?> 
                </a>
        </li>
            <li  class="thumb">
                <a href="<?php echo site_url('/architektura')?>" title="Architektúra">
                    <?php echo get_the_post_thumbnail(  $frontPageIDs[architektura], 'thumbnail' ); ?> 
                </a>
        </li>
    </ul>
    </nav>
</div>
 

<?php 
    get_footer();
?>
     
     
     
 