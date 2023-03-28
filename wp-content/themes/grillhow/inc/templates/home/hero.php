<?php if( get_field('hero') ): 
    $acf = get_field('hero');
    ?>


<section id="hero" class="container-fluid position-relative"  style="background-image: url('<?php echo $acf['hero_image']  ?>')">
    <div class="d-flex flex-column hero-content position-relative text-center text-uppercase center-container gap-4 align-items-center h-100 justify-content-center">
        <h2 class="hero-title secondary-font fw-semibold secondary-light-para lh-sm"><?php echo $acf['hero_title']  ?></h2>
        <a class="primary btn fw-medium fs-5 py-2 px-4" href="<?php echo $acf['hero_cta']  ?>">
            <div class="secondary-light-para">Contact Us</div>
        </a>
    </div>
</section>

<?php 

$acf = null;
endif; ?>
