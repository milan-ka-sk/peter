<?php 

    get_header();

    while (have_posts()){
            the_post();
?>
 
 <div class="page-wrapper ">

 <nav class="breadcrumbs" aria-label="breadcrumbs">
    <ul>
        <li><a href="<?php echo site_url('/')?>">Home</a></li>
        <li> / <?php  echo get_the_title( $id ); ?>  </li>
    </ul>
</nav>

<h1>
      <?php  the_title(); ?> 
</h1>


 
<?php

//https://wordpress.stackexchange.com/questions/121489/split-content-and-gallery
//https://www.cssscript.com/top-10-galleries-pure-javascript-css/

 
    $gallery =  get_post_gallery( get_the_ID(), false );
   // print_r($gallery);
  
    $arGalleryAttachments  = explode(",", $gallery[ids]);
    ?>
    <ul class="thumb-wrapper js-thumb-wrapper">
        <?php
        foreach ($arGalleryAttachments as $attachmentID) {
        ?>

            <li class="thumb">
                <a href="<?php  echo wp_get_attachment_image_src(  $attachmentID, 'medium' )[0]; ?>">
                    <img src="<?php  echo wp_get_attachment_image_src(  $attachmentID, 'thumbnail' )[0]; ?>" alt="">
                </a>
            </li>
            
        <?php 
   } 
    ?>
    <li class="thumb">
       <a class="thumb--info js-thumb-info" href="#">  <span class="thumb--label"> Info   </span>           </a> 
    </li>

    </ul>

    <div></div>

    <div class="stage js-stage"></div>
 
    <div id="the-content" class="the-content js-the-content">
     

    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
    </p>
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
    </p>
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
    </p>
</div>  
<?php   }  ?>

<script>

    // setup gallery
    (function(){
        var thumbPanel = document.querySelector('.js-thumb-wrapper');
        var stage = document.querySelector('.js-stage');
        var theContent = document.querySelector('.js-the-content');

        thumbPanel.addEventListener("click", function(e){
            e.preventDefault();

            if(e.target.parentElement.classList.contains('js-thumb-info') || e.target.classList.contains('js-thumb-info')){
                // it is the text

                console.log(e.target);
                
                var htmlToFill = theContent.innerHTML;
                stage.innerHTML = htmlToFill;

            } else{
                //it is an image

                // get big image src from thumb
                var imgSrcToShow = e.target.parentElement.href;
                // create an image element
                var img = document.createElement('img');
                img.src = imgSrcToShow;
                // set image as inner HTML of the stage (first delete all inside)
                console.log(stage);
                stage.innerHTML = '';
                stage.appendChild(img);
            }

            
        });
    })();
   
</script>

<?php    get_footer(); ?>