<?php
require_once __DIR__ . "/../../vendor/autoload.php";

use App\View;
?>

<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <h2 class="text-center text-white">StarShop dream seller since 2019</h2>
            <p class="text-justify text-white">We only name stars that are clearly visible from any place on earth throughout the year!
                If you do not like the star we have named for you, or on the rare occasion that you're dissatisfied with our service,
                we will name another star for you or refund the full purchase price.</p>
            <p class="text-justify text-white">We have officially partnered with the Star-naming registry, which regularly audits us for quality,
                reliability and data safety. Each star naming that we process is recorded in this registry and, thus, can be retrieved at any time.
                They also provide a free Software to locate your star at any given date and location.</p>
            <div class="row">
                <?php foreach ($items as $item) {
                    echo View::render(
                        "templates/catalog/card.php",
                        ["item" => $item]
                    );
                } ?>
            </div>
        </div>
    </div>
</div>