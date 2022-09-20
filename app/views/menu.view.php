<?php
\Templates\Page::displayHeader("Menu");
?>
<div class="hero_area">
    <div class="bg-box">
        <img src="images/hero-bg.jpg" alt="">
    </div>
<?php
\Templates\Page::displayNavigation();
?>

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
</div>

<?php
\Templates\Page::displayFooter();
