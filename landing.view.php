<?php

\Templates\Page::displayHeader("Landing Page");
?>
    <div class="hero_area">
        <div class="bg-box">
            <img src="images/hero-bg.jpg" alt="">
        </div>
<?php
\Templates\Page::displayNavigation();
?>
        <!-- slider section -->
        <section class="slider_section ">
            <div class="container ">
                <div class="row">
                    <div class="col-md-7 col-lg-6 ">
                        <div class="detail-box">
                            <h1>Fast Food Burgerownia</h1>
                            <p>
                                Najlepsze burgery w okolicy. Kraftowe, własnoręcznie robione mięso, świeże warzywa i dodatki pomiędzy dwoma kawałkami złocistej bułki idealnie komponującie się w całość. Przyjdź i przekonaj się sam.
                            </p>
                            <div class="btn-box">
                                <a href="https://<?=ROOT_APP_URL?>/zamowienie" class="btn1">Zamów teraz</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- end slider section -->
    </div>

    <!-- offer section -->
    <section class="offer_section layout_padding-bottom">
        <div class="offer_container">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6  ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/o1.jpg" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>Pikantny piątek</h5>
                                <h6><span>20%</span> Taniej</h6>
<!--                                <a href="">-->
<!--                                    Order Now <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">-->
<!--                    <g>-->
<!--                        <g>-->
<!--                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248-->
<!--                     c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />-->
<!--                        </g>-->
<!--                    </g>-->
<!--                                        <g>-->
<!--                                            <g>-->
<!--                                                <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48-->
<!--                     C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064-->
<!--                     c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4-->
<!--                     C457.728,97.71,450.56,86.958,439.296,84.91z" />-->
<!--                                            </g>-->
<!--                                        </g>-->
<!--                                        <g>-->
<!--                                            <g>-->
<!--                                                <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296-->
<!--                     c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />-->
<!--                                            </g>-->
<!--                                        </g>-->
<!--                                        <g>-->
<!--                                        </g>-->
<!--                                        <g>-->
<!--                                        </g>-->
<!--                                        <g>-->
<!--                                        </g>-->
<!--                                        <g>-->
<!--                                        </g>-->
<!--                                        <g>-->
<!--                                        </g>-->
<!--                                        <g>-->
<!--                                        </g>-->
<!--                                        <g>-->
<!--                                        </g>-->
<!--                                        <g>-->
<!--                                        </g>-->
<!--                                        <g>-->
<!--                                        </g>-->
<!--                                        <g>-->
<!--                                        </g>-->
<!--                                        <g>-->
<!--                                        </g>-->
<!--                                        <g>-->
<!--                                        </g>-->
<!--                                        <g>-->
<!--                                        </g>-->
<!--                                        <g>-->
<!--                                        </g>-->
<!--                                        <g>-->
<!--                                        </g>-->
<!--                  </svg>-->
<!--                                </a>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6  ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/o2.jpg" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Dzień pizzy
                                </h5>
                                <h6>
                                    <span>15%</span> Na każdą pizzę
                                </h6>
<!--                                <a href="">-->
<!--                                    Order Now <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">-->
<!--                    <g>-->
<!--                        <g>-->
<!--                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248-->
<!--                     c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />-->
<!--                        </g>-->
<!--                    </g>-->
<!--                                        <g>-->
<!--                                            <g>-->
<!--                                                <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48-->
<!--                     C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064-->
<!--                     c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4-->
<!--                     C457.728,97.71,450.56,86.958,439.296,84.91z" />-->
<!--                                            </g>-->
<!--                                        </g>-->
<!--                                        <g>-->
<!--                                            <g>-->
<!--                                                <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296-->
<!--                     c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />-->
<!--                                            </g>-->
<!--                                        </g>-->
<!--                                        <g>-->
<!--                                        </g>-->
<!--                                        <g>-->
<!--                                        </g>-->
<!--                                        <g>-->
<!--                                        </g>-->
<!--                                        <g>-->
<!--                                        </g>-->
<!--                                        <g>-->
<!--                                        </g>-->
<!--                                        <g>-->
<!--                                        </g>-->
<!--                                        <g>-->
<!--                                        </g>-->
<!--                                        <g>-->
<!--                                        </g>-->
<!--                                        <g>-->
<!--                                        </g>-->
<!--                                        <g>-->
<!--                                        </g>-->
<!--                                        <g>-->
<!--                                        </g>-->
<!--                                        <g>-->
<!--                                        </g>-->
<!--                                        <g>-->
<!--                                        </g>-->
<!--                                        <g>-->
<!--                                        </g>-->
<!--                                        <g>-->
<!--                                        </g>-->
<!--                  </svg>-->
<!--                                </a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end offer section -->

    <!-- food section -->
    <section class="food_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Nasze menu
                </h2>
            </div>

            <ul class="filters_menu">
                <li class="active" data-filter="*">Wszystko</li>
                <li data-filter=".burger">Burgery</li>
                <li data-filter=".pizza">Pizza</li>
                <li data-filter=".fries">Frytki</li>
            </ul>
            <div class="filters-content">
                <div class="row grid">
                    <div class="col-sm-6 col-lg-4 all pizza">
                        <div class="box">
                            <div>
                                <div class="img-box">
                                    <img src="images/f1.png" alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>Pizza Margharita</h5>
                                    <p>
                                        Opis pizzy margharita. Opis pizzy margharita. Opis pizzy margharita. Opis pizzy margharita.
                                    </p>
                                    <div class="options">
                                        <h6>15.50 zł</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 all burger">
                        <div class="box">
                            <div>
                                <div class="img-box">
                                    <img src="images/f2.png" alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        Piekielny Burger
                                    </h5>
                                    <p>
                                        Opis piekielnego burgera. Opis piekielnego burgera. Opis piekielnego burgera.
                                    </p>
                                    <div class="options">
                                        <h6>10.50 zł</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 all pizza">
                        <div class="box">
                            <div>
                                <div class="img-box">
                                    <img src="images/f3.png" alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>Pizza Farmerska</h5>
                                    <p>
                                        Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque
                                    </p>
                                    <div class="options">
                                        <h6>23 zł</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 all fries">
                        <div class="box">
                            <div>
                                <div class="img-box">
                                    <img src="images/f5.png" alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>Frytki</h5>
                                    <p>
                                        Opis złocistych i chrupiących frytek. Opis złocistych i chrupiących frytek. Opis złocistych i chrupiących frytek.
                                    </p>
                                    <div class="options">
                                        <h6>6 zł</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 all pizza">
                        <div class="box">
                            <div>
                                <div class="img-box">
                                    <img src="images/f6.png" alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        Multi Pizza
                                    </h5>
                                    <p>
                                        Kawałki różnych pizz. Kawałki różnych pizz. Kawałki różnych pizz. Kawałki różnych pizz.
                                    </p>
                                    <div class="options">
                                        <h6>25.50 zł</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 all burger">
                        <div class="box">
                            <div>
                                <div class="img-box">
                                    <img src="images/f8.png" alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>Cheseburger</h5>
                                    <p>
                                        Burger z serem. Burger z serem. Burger z serem. Burger z serem. Burger z serem. Burger z serem.
                                    </p>
                                    <div class="options">
                                        <h6>11.50 zł</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 all burger">
                        <div class="box">
                            <div>
                                <div class="img-box">
                                    <img src="images/f7.png" alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>Burger z Kurczakiem</h5>
                                    <p>
                                        Burger z kurczakiem. Burger z kurczakiem. Burger z kurczakiem. Burger z kurczakiem.Burger z kurczakiem.
                                    </p>
                                    <div class="options">
                                        <h6>30 zł</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end food section -->

    <!-- about section -->

    <section class="about_section layout_padding">
        <div class="container  ">

            <div class="row">
                <div class="col-md-6 ">
                    <div class="img-box">
                        <img src="images/about-img.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                O Nas
                            </h2>
                        </div>
                        <p>
                            Opis restauracji / fast food jest bardzo ważny. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                        </p>
                        <a href="http://<?=ROOT_APP_URL?>/onas">
                            Czytaj więcej
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about section -->

    <!-- book section -->
    <section class="book_section layout_padding">
        <div class="container">
            <div class="footer_section d-flex justify-content-center">
                <div class="col-md-6 footer-col">
                    <div class="footer_contact">
                        <h4>Kontakt</h4>
                        <div class="contact_link_box">
                            <a ><i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>Miejsce</span>
                            </a>
                            <a ><i class="fa fa-phone" aria-hidden="true"></i>
                                <span>Tel: +48 123 456 789</span>
                            </a>
                            <a ><i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>burgerownia@gmail.com</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 footer-col">
                    <div class="map_container">
                        <div id="googleMap"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end book section -->

<?php
\Templates\Page::displayFooter();
