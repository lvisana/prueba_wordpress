<?php

if ( is_active_sidebar( 'newsletter' ) ) : ?>

<div class="container-fluid p-0">
    
    <div class="primary">
        <div class="container-xxl newsletter text-center">
            <div class="secondary-light-para">
                <?php dynamic_sidebar( 'newsletter' ); ?>
            </div>
        </div>
    </div>
    
    </div>
 
    <?php endif; 