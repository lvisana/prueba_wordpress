<?php

if (get_option('gh_address_one') == false) {
    update_option('gh_address_one', '2605 Scheuvront Drive, New York, NY 99515');
}

if (get_option('gh_email_one') == false) {
    update_option('gh_email_one', 'info@demolink.org');
}

if (get_option('gh_phone_one') == false) {
    update_option('gh_phone_one', '+ 166 900 891');
}

if (get_option('gh_opday_from') == false) {
    update_option('gh_opday_from', 'Mon');
}

if (get_option('gh_opday_to') == false) {
    update_option('gh_opday_to', 'Sun');
}

if (get_option('gh_ophours_since') == false) {
    update_option('gh_ophours_since', '9999-12-12 8:00:00');
}

if (get_option('gh_ophours_to') == false) {
    update_option('gh_ophours_to', '9999-12-12 21:00:00');
}

$hour_since = date('gA', strtotime(get_option('gh_ophours_since')));
$hour_to = date('gA', strtotime(get_option('gh_ophours_to')));

    ?>
    <section class="container-fluid primary">
    <div class="container-xxl py-3 py-lg-5">
        <div id="info-section" class="d-flex row text-center secondary-light-para justify-content-between align-items-center px-2 py-lg-3">

            <div class="col-6 col-lg-3">
                <h2 class="fs-5 fw-semibold text-uppercase">Address</h2>
                <p class="m-0"> <?php echo get_option('gh_address_one');  ?> </p>
                <?php if (get_option('gh_address_two')) :  ?>
                    <p class="m-0"> <?php echo get_option('gh_address_two');  ?> </p>
                <?php endif;  ?>
            </div>

            <div class="col-6 col-lg-3">
                <h2 class="fs-5 text-uppercase fw-semibold">Opening Hours</h2>
                <p class="m-0"><?php echo get_option('gh_opday_from') . ' - ' . get_option('gh_opday_to'); ?></p>
                <p class="m-0 text-lowercase"><?php echo $hour_since . ' - ' . $hour_to; ?></p>
            </div>

            <div class="col-6 col-lg-3">
                <h2 class="fs-5 text-uppercase fw-semibold">Phones</h2>
                <p class="m-0"><?php echo get_option('gh_phone_one');  ?></p>
                <?php if (get_option('gh_phone_two')) :  ?>
                    <p class="m-0"> <?php echo get_option('gh_phone_two');  ?> </p>
                <?php endif;  ?>
            </div>

            <div class="col-6 col-lg-3">
                <h2 class="fs-5 text-uppercase fw-semibold">Emails</h2>
                <p class="m-0"><?php echo get_option('gh_email_one');  ?></p>
                <?php if (get_option('gh_email_two')) :  ?>
                    <p class="m-0"> <?php echo get_option('gh_email_two');  ?> </p>
                <?php endif;  ?>
            </div>
        </div>
    </div>
</section>
