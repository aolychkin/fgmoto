<header>
    <img src="static/svg/logo.svg" alt="">
</header>
<figure class="wave"></figure>
<section class="product-single">
    <div class="product-single-img">
        <figure class="img"></figure>
    </div>
    <div class="product-single-filter">
        <h1>Шипованная резина MITAS</h1>
        <div class="price_range">
            <h3>от 11 200 руб.</h3>
            <h3>до 28 800 руб.</h3>
        </div>
        <!--        =========================  Блок с выбором кубатуры  =========================           -->
        <div class="product-single-filter-block">
            <h3>Выберите кубатуру.</h3>
            <?php require "cubFilter.php" ?>
        </div>
        <!--        =========================  Блок с выбором типа  =========================           -->
        <div class="product-single-filter-block">
            <h3>Выберите тип.</h3>
            <?php require "typeFilter.php" ?>
        </div>
        <!--        =========================  Блок с выбором радиуса  =========================           -->
        <div class="product-single-filter-block">
            <h3>Выберите радиус резины.</h3>
            <div class="blocks" id="radius_blocks">
                <?php require "radiusFilter.php" ?>
            </div>
        </div>
        <div class="product-single-filter-block">
            <div class="blocks "id="price_blocks">
                <?php require "priceFilter.php" ?>
            </div>
        </div>
    </div>
</section>