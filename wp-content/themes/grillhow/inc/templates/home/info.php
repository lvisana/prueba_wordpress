<?php

$ophour = [];

array_push($ophour, get_option( 'gh_opweek_monday' ) == '1' ? 'Mon' : '');
array_push($ophour, get_option( 'gh_opweek_tuesday' ) == '1' ? 'Tue' : '');
array_push($ophour, get_option( 'gh_opweek_wednesday' ) == '1' ? 'Wed' : '');
array_push($ophour, get_option( 'gh_opweek_thurday' ) == '1' ? 'Thur' : '');
array_push($ophour, get_option( 'gh_opweek_friday' ) == '1' ? 'Fri' : '');
array_push($ophour, get_option( 'gh_opweek_saturday' ) == '1' ? 'Sat' : '');
array_push($ophour, get_option( 'gh_opweek_sunday' ) == '1' ? 'Sun' : '');

    ?>
    <section class="container-fluid primary">
    <div class="container-xxl py-3 py-lg-5">
        <div id="info-section" class="d-flex row text-center secondary-light-para justify-content-between align-items-center px-2 py-lg-3">

            <div class="col-6 col-lg-3">
                <h2 class="fs-5 fw-semibold text-uppercase">Address</h2>
                <p class="m-0">2605 Scheuvront Drive, New York, NY 99515</p>
            </div>

            <div class="col-6 col-lg-3">
                <h2 class="fs-5 text-uppercase fw-semibold">Opening Hours</h2>
                <p class="m-0">Mon - Sun</p>
                <p class="m-0">8am - 9pm</p>
            </div>

            <div class="col-6 col-lg-3">
                <h2 class="fs-5 text-uppercase fw-semibold">Phones</h2>
                <p class="m-0">+ 166 900 891</p>
                <p class="m-0">+ 166 900 892</p>
            </div>

            <div class="col-6 col-lg-3">
                <h2 class="fs-5 text-uppercase fw-semibold">Emails</h2>
                <p class="m-0">info@demolink.org</p>
                <p class="m-0">info@demolink.org</p>
            </div>
        </div>
    </div>
</section>
