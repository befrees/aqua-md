<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'parts/_head.php' ?>
</head>
<body>
	<div id="wrapper" class="wrapper">
        <?php include 'parts/header.php'; ?>
		<div class="middle home-page">

			<div class="container">
				<div class="row">
					<div class="block-main-banner flexbox box-shadow">
						<div class="col-md-2 col-categories">
							<div class="block-main-categories">
								<h2><i class="ic icon-ic-menu"></i>Основные Категории:</h2>
								<div class="block-content">
									<ul>
										<li><a href="#"><i class="ic icon-ic--bathroom"></i>Ванная комната</a></li>
										<li><a href="#"><i class="ic icon-ic-accessories"></i>Аксессуары</a></li>
										<li><a href="#"><i class="ic icon-ic--kitchen"></i>Кухня</a></li>
										<li><a href="#"><i class="ic icon-ic-heating"></i>Отопление</a></li>
										<li><a href="#"><i class="ic icon-ic-filter"></i>Фильтры</a></li>
										<li><a href="#"><i class="ic icon-ic-tile"></i>Плитка</a></li>
										<li><a href="#"><i class="ic icon-ic-plumbing"></i>Водопровод</a></li>
										<li><a href="#"><i class="ic icon-ic-watering"></i>Полив</a></li>
										<li><a href="#"><i class="ic icon-ic-specialplumbing"></i>Специальная  Сантехника</a></li>
										<li><a href="#"><i class="ic icon-ic-all-categories"></i>Все Категории</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-8 col-main-slider">
							<div class="slider-wrap">
								<div class="slider-main">
									<div class="slide-item"><img src="img/image-2.png" alt=""></div>
									<div class="slide-item"><img src="img/image-2.png" alt=""></div>
									<div class="slide-item"><img src="img/image-2.png" alt=""></div>
								</div>
							</div>
						</div>
						<div class="col-md-2 col-banners">
							<div class="banners-list">
								<div class="banner-item"><a href="#"><img src="img/image.png" alt=""></a></div>
								<div class="banner-item"><a href="#"><img src="img/image.png" alt=""></a></div>
								<div class="banner-item"><a href="#"><img src="img/image.png" alt=""></a></div>
							</div>
						</div>
					</div> <!-- .block-main-banner -->
				</div>
				<div class="row">
					<div class="box box-info-blocks flexbox">

						<div class="col-md-3 col-info flexbox">
							<div class="col-info_inner flexbox">
								<div class="icon"><img src="img/svg/icon-home-1.svg" alt=""></div>
								<div class="text-uppercase bold"><p>Бесплатная доставка<br> по городу от 5 500 грн</p></div>
							</div>
						</div>
						<div class="col-md-3 col-info flexbox">
							<div class="col-info_inner flexbox">
								<div class="icon"><img src="img/svg/icon-home-2.svg" alt=""></div>
								<div class="text-uppercase bold"><p>официальная гарантия<br> от производителя</p></div>
							</div>							
						</div>
						<div class="col-md-3 col-info flexbox">
							<div class="col-info_inner flexbox">								
								<div class="icon"><img src="img/svg/icon-home-3.svg" alt=""></div>
								<div class="text-uppercase bold"><p>легкие покупки и<br> гибкая форма оплаты</p></div>
							</div>
						</div>
						<div class="col-md-3 col-info flexbox">
							<div class="col-info_inner flexbox">
								<div class="icon"><img src="img/svg/icon-home-4.svg" alt=""></div>
								<div class="text-uppercase bold">лучшие цены <br>месяца только у нас</div>
							</div>							
						</div>
					</div> <!-- .box-info-blocks -->
				</div>
				<div class="row">
					<div class="leaders-block">
						<div class="header-block cf">
							<h2 class="title-block text-uppercase pull-left">лидеры продаж:</h2>
							<ul class="tabs pull-right flexbox flex-wrap nav nav-tabs" role="tablist">
								<li class="active"><a href="#tab-1"  role="tab" data-toggle="tab">Все</a></li>
								<li><a href="#tab-2"  role="tab" data-toggle="tab">Ванная комната</a></li>
								<li><a href="#tab-3"  role="tab" data-toggle="tab">Аксессуары</a></li>
								<li><a href="#tab-4"  role="tab" data-toggle="tab">Кухня</a></li>
								<li><a href="#tab-5"  role="tab" data-toggle="tab">Отопление</a></li>
								<li><a href="#tab-6"  role="tab" data-toggle="tab">Фильтры</a></li>
								<li><a href="#tab-7"  role="tab" data-toggle="tab">Плитка</a></li>
								<li><a href="#tab-8"  role="tab" data-toggle="tab">Водопровод</a></li>
								<li><a href="#tab-9"  role="tab" data-toggle="tab">Полив</a></li>
								<li><a href="#tab-10" role="tab" data-toggle="tab">Специальная сантехника</a></li>
							</ul>
						</div>
					</div>
					<div class="block-content">
						<div class="tab-content">
						    <div role="tabpanel" class="tab-pane active" id="tab-1"  >
						    	<div class="box">
						    		<div class="box-products flexbox flex-wrap">
						    			<?php for($i=0; $i<10; $i++): ?>
						    				<?php include 'parts/item-type-2.php'; ?>
						    			<?php endfor; ?>
						    		</div> <!-- .box-products -->
						    		<div class="box-link-more text-center"><a href="#"><i class="icon-ic-refresh spin-minus"></i>Показать еще</a></div>
						    	</div>
						    </div>
						    <div role="tabpanel" class="tab-pane " id="tab-2"  >
						    	<div class="box">
						    		<div class="box-products flexbox flex-wrap">
						    			<?php for($i=10; $i; $i--): ?>
						    				<?php include 'parts/item-type-2.php'; ?>
						    			<?php endfor; ?>
						    		</div> <!-- .box-products -->
						    		<div class="box-link-more text-center"><a href="#"><i class="icon-ic-refresh"></i>Показать еще</a></div>
						    	</div>
						    </div>
						    <div role="tabpanel" class="tab-pane " id="tab-3"  >
						    	<div class="box-products flexbox flex-wrap">
						    			<?php for($i=0; $i<10; $i++): ?>
						    				<?php include 'parts/item-type-2.php'; ?>
						    			<?php endfor; ?>
						    		</div> <!-- .box-products -->
						    		<div class="box-link-more text-center"><a href="#"><i class="icon-ic-refresh"></i>Показать еще</a></div>
						    </div>
						    <div role="tabpanel" class="tab-pane " id="tab-4"  >
						    	<div class="box">
						    		<div class="box-products flexbox flex-wrap">
						    			<?php for($i=1; $i<11; $i++): ?>
						    				<?php include 'parts/item-type-2.php'; ?>
						    			<?php endfor; ?>
						    		</div> <!-- .box-products -->
						    		<div class="box-link-more text-center"><a href="#"><i class="icon-ic-refresh"></i>Показать еще</a></div>
						    	</div>
						    </div>
						    <div role="tabpanel" class="tab-pane " id="tab-5"  >...</div>
						    <div role="tabpanel" class="tab-pane " id="tab-6"  >...</div>
						    <div role="tabpanel" class="tab-pane " id="tab-7"  >...</div>
						    <div role="tabpanel" class="tab-pane " id="tab-8"  >...</div>
						    <div role="tabpanel" class="tab-pane " id="tab-9"  >...</div>
						    <div role="tabpanel" class="tab-pane " id="tab-10" >...</div>
						 </div>
					</div>
				</div>
				<div class="row">
					<div class="header-block cf">
						<h2 class="title-block text-uppercase title-indent header-block">Новинки</h2>
					</div>
					<div class="box">
			    		<div class="box-products flexbox flex-wrap">
			    			<?php for($i=1; $i<11; $i++): ?>
			    				<?php include 'parts/item-type-2.php'; ?>
			    			<?php endfor; ?>
			    		</div> <!-- .box-products -->
			    		<div class="box-link-more text-center"><a href="#"><i class="icon-ic-refresh"></i>Показать еще</a></div>
			    	</div>
				</div>
				<div class="row">

					<div class="block-text-bottom toggle-text-block cf">
						<h2>AQUAKharkov - интернет магазин сантехники</h2>
						<a href="#" class="open-text-link toggle-link"><i class="ic icon-ic-arrow-down"></i></a>
						<a href="#" class="close-text-link toggle-link"><i class="ic icon-ic-arrow-up"></i></a>
						<p><span>Является одним из самых успешных по всей Украине и за ее пределами, ведь только у нас можно найти такой богатый выбор все различных типов сантехники. Мы являемся официальными представителями	многих фабрик и имеем  эксклюзивные права на продажу их товара, а также самые низкие цены в центральной и восточной Украине.</span></p>
						<div class="hide-text-block">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel nulla, perspiciatis minima obcaecati quo animi ipsam totam. Commodi voluptatem quos aut mollitia repellat quod, molestiae pariatur ad distinctio doloribus magni aliquam vitae quibusdam, fugiat! Suscipit eaque reiciendis possimus iure architecto. Voluptate non quos, voluptatum deserunt. Totam fuga ipsum delectus sint, soluta minima praesentium. Nam reiciendis dicta maxime esse alias. Veritatis distinctio assumenda velit consectetur voluptatibus deserunt autem fugit soluta eaque! <!-- <a href="#" class="close-text-link toggle-link">Закрыть <svg class="ic arrow_link" width="20" height="13"><use xlink:href="img/icons.svg#arrow_link"></use></svg></a> --></p>
                            </div>
					</div> <!-- .toggle-text-bloc -->
					
				</div>
			</div>
		</div>
    </div>
    <?php include 'parts/footer.php' ?>
</body>
</html>