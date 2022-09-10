<?php

\Templates\Page::displayHeader("O nas");
\Templates\Page::displayNavigation();
?>

<section class="about_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <div class="img-box">
                    <img src="images/about-img.png" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="detail-box">
                    <div class="heading_container">
                        <h2>O Nas</h2>
                    </div>
                    <p>
                        Opis restauracji / fast food jest bardzo ważny. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
\Templates\Page::displayFooter();
?>
