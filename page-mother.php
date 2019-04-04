<?php 
/*
Template Name: Mother  
 
*/

get_header();

$id = get_the_ID();
//echo $id; 
?>



<?php

switch ($id) {
    case $frontPageIDs[design]:
        $cat = "design";
        break;
    case $frontPageIDs[architektura]:
        $cat = "architecture";
        break;
}

$q = new WP_Query( array( 
    'category_name' => $cat
));  

?>

<div class="page-wrapper page-wrapper--flex">

<nav class="breadcrumbs" aria-label="breadcrumbs">
    <ul>
        <li><a href="<?php echo site_url('/')?>">Home</a></li>
        <li> / <?php  echo get_the_title( $id ); ?>  </li>
    </ul>
</nav>

<nav class="main-navigation"  aria-label="main navigation">
    <ul class="thumb-wrapper">

    <?php while ( $q->have_posts() ) {
     $q->the_post(); ?>
            <li  class="thumb">
                <a href="<?php the_permalink() ?>" title="<?php the_title() ;?>">
                <?php if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'thumbnail' ); 
                }?>
                </a>
        </li>

    <?php }
    ?>
    </ul>
</nav>

</div>
<!-- /.page-wrapper -->

 

<?php  

get_footer();

?>


