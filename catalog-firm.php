<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'parts/_head.php' ?>
</head>

<body>
    <div id="wrapper" class="wrapper">
        <?php include 'parts/header.php'; ?>
        <div class="middle home-page">
            <div class="breadcrumb-box">
                <div class="container">
                    <div class="row">
                        <ul class="breadcrumb">
                            <li><a href="#">Главная</a></li>
                            <li><a href="#">Ванная комната</a></li>
                            <li><span>Ванны</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="banner-brand text-center"><img src="img/img-kludi.png" alt=""></div>
                </div>
                <div class="row">
                    <div class="block-text-bottom toggle-text-block cf">
                        <h2>AQUAKharkov - интернет магазин сантехники</h2>
                        <a href="#" class="open-text-link toggle-link"><i class="ic icon-ic-arrow-down"></i></a>
                        <a href="#" class="close-text-link toggle-link"><i class="ic icon-ic-arrow-up"></i></a>
                        <p><span>Является одним из самых успешных по всей Украине и за ее пределами, ведь только у нас можно найти такой богатый выбор все различных типов сантехники. Мы являемся официальными представителями многих фабрик и имеем  эксклюзивные права на продажу их товара, а также самые низкие цены в центральной и восточной Украине.</span></p>
                        <div class="hide-text-block">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel nulla, perspiciatis minima obcaecati quo animi ipsam totam. Commodi voluptatem quos aut mollitia repellat quod, molestiae pariatur ad distinctio doloribus magni aliquam vitae quibusdam, fugiat! Suscipit eaque reiciendis possimus iure architecto. Voluptate non quos, voluptatum deserunt. Totam fuga ipsum delectus sint, soluta minima praesentium. Nam reiciendis dicta maxime esse alias. Veritatis distinctio assumenda velit consectetur voluptatibus deserunt autem fugit soluta eaque!
                                <!-- <a href="#" class="close-text-link toggle-link">Закрыть <svg class="ic arrow_link" width="20" height="13"><use xlink:href="img/icons.svg#arrow_link"></use></svg></a> --></p>
                        </div>
                    </div>
                    <!-- .toggle-text-bloc -->
                </div>
            </div>
            <div class="container pt-box">
                <div class="row">
                    <div class="header-block flexbox align-middle cf">
                        <h2 class="title-block text-uppercase pull-left">ВСЕ ДЛЯ ВАНН:</h2>
                        <ul class="tabs pull-right flexbox flex-wrap nav nav-tabs" role="tablist">
                            <li class="active"><a href="#tab-1" role="tab" data-toggle="tab">Все</a></li>
                            <li><a href="#">Прямоугольные ванны</a></li>
                            <li><a href="#">Ассиметричные ванны</a></li>
                            <li><a href="#">Угловые ванны</a></li>
                            <li><a href="#">Отдельностоящие ванны</a></li>
                            <li><a href="#">Овальные ванны</a></li>
                            <li><a href="#">Круглые ванны</a></li>
                            <li><a href="#">Ванны другой формы</a></li>
                            <li><a href="#">Панели для ванн</a></li>
                            <li><a href="#">Шторки на ванну</a></li>
                        </ul>
                    </div>
                    <div class="box cf">
                        <div class="flexbox">
                            <?php include 'parts/_sidebar-catalog.php'; ?>
                            <div class="catalog-box">
                                <div class="catalog-head ">
                                	<div class="inline-block"><span class="label align-middle inline">Сортировка:</span>
                                		<select name="" id="order-catalog" class="align-middle">
                                			<option value="1">Популярные</option>
                                			<option value="2">От дорогих</option>
                                			<option value="3">От дешевых</option>
                                			<option value="4">По алфавиту</option>
                                		</select>
                                	</div>
                                	<div class="inline-block">
                                		<span class="label align-middle inline">Действующие акции:</span>
                                		<ul class="nav nav-tabs inline-block align-middle">
                                			<li><a href="#">Вернем до 25%</a></li>
                                			<li><a href="#">Оплата частями</a></li>
                                			<li><a href="#">Кредит 0,01%</a></li>
                                		</ul>
                                	</div>
                                    <div class="btn-group-switch-view alignright">
                                        <button type="button" id="grid-view" class="btn active" data-toggle="tooltip" title="" data-original-title="Сетка"><i class="icon-ic-grid"></i></button>
                                        <button type="button" id="list-view" class="btn" data-toggle="tooltip" title="" data-original-title="Список"><i class="icon-ic-list-btn"></i></button>
                                    </div>
                                </div>
                                <div class="box-products  flexbox flex-wrap alignleft">
                                    <?php for($i=1; $i<11; $i++): ?>
                                    <?php include 'parts/item-type-2-catalog.php'; ?>
                                    <?php endfor; ?>
                                </div>
                                <!-- .box-products -->
                            </div>
                        </div>
                        <div class="box-link-more text-center"><a href="#"><i class="icon-ic-refresh"></i>Показать еще</a></div>
                    </div>
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="prev">
                                <a href="#" aria-label="Previous">
						        <i aria-hidden="true" class="icon-ic-arrow-left"></i>
						      </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li class="current"><span>2</span></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li class="dots"><span>...</span></li>
                            <li><a href="#">15</a></li>
                            <li class="next">
                                <a href="#" aria-label="Next">
						        <i aria-hidden="true" class="icon-ic-arrow-right"></i>
						      </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <?php include 'parts/footer.php' ?>
</body>

</html>