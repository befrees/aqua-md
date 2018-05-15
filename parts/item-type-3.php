<div class="goods-item goods-type-3">
    <div class="box-goods flexbox cf">
        <div class="goods-image alignleft">
            <figure class="image">
                <a href="#"><img src="img/<?= $goods[$i]['img'] ?>" alt=""></a>
            </figure>
            <!-- .image -->
            <div class="labels-info">
                <span class="label-info">
					<span class="label-info_inner">
						<span class="top-lbl-big">ТОП</span>
                <span class="top-lbl-norm">продаж</span>
                </span>
                </span>
                <span class="label-info">
					<span class="label-info_inner">
						<span class="sale-proc">- 10%</span>
                </span>
                </span>
                <span class="label-info">
					<span class="label-info_inner">
						<span class="credit-norm">кредит</span>
                <span class="credit-big">12</span>
                </span>
                </span>
                <span class="label-info">
					<span class="label-info_inner">
						<span class="sticker-text">10</span><span class="sticker-icon icon-icon-pb"></span>
                </span>
                </span>
            </div>
            <div class="attributes-links-box">
            	<div class="attributes-links text-right">
            		<div class="text-gray">Размер, см.:</div>
            		<div class="link"><a href="#" class="btn-default btn-sm btn active">250</a></div>
            		<div class="link"><a href="#" class="btn-default btn-sm btn">200</a></div>
            		<div class="link"><a href="#" class="btn-default btn-sm btn">180</a></div>
            	</div>
            	<div class="attributes-links text-right">
            		<div class="text-gray">Установка:</div>
            		<div class="link"><a href="#" class="btn-default btn-sm btn active">Слева</a></div>
            		<div class="link"><a href="#" class="btn-default btn-sm btn">Справа</a></div>
            	</div>
            </div>
        </div>
        <div class="goods-data">
            <div class="flexbox goods-top-data">
                <div class="goods-head flexbox">
                    <div class="title-col">
                        <h2 class="name">
                        <a href="#">
                            <?= rand(0,1) ? $goods[$i]['title'] : 'Ванна отдельно стоящая 1720*720*770 мм, акрил кристаллический + CUTHNA stribro смеситель для ванны' ?>
                        </a>
	                    </h2>
                        <div class="goods-entry">
                            <div class="short-info text-gray small">
                                <div class="text-nowrap">Страна: Китай</div>
                                <div class="text-nowrap">Производитель: Gorenje</div>
                            </div>
                        </div>
                    </div>
                    <div class="goods-head-right">
                        <?php if($goods[$i]['rating'] || $goods[$i]['reviews']): ?>
                        <div class="rating">
                            <?php for($k=1; $k<=5; $k++): ?>
                            <?php if($k<= $goods[$i]['rating']): ?>
                            <span class="icon-ic-star star_yellow"></span>
                            <?php else: ?>
                            <span class="icon-ic-star star_grey"></span>
                            <?php endif; ?>
                            <?php endfor; ?>
                            <?php if($goods[$i]['reviews']): ?>
                            <div class="reviews small">
                                <a href="#">
                                    <?= $goods[$i]['reviews'] ?> отзывов</a>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>
                        <div class="labels-images">
                            <img src="img/lbl-best.png" alt="">
                            <img src="img/lbl-garant.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="goods-data-drop hidden-xs">
                <div class="specifications">
                    <div class="bold title-spec">Характеристики:</div>
                    <div class="specifications-inner cf row">
                    	<div class="specifications-col col-md-6">
	                        <div class="row-specification"><span class="col-th">Вид монтажа:</span><span class="col-td">Врезной</span></div>
	                        <div class="row-specification"><span class="col-th">Вид смесителя:</span><span class="col-td">Однорычажный Однорычажный Однорычажный Однорычажный</span></div>
	                        <div class="row-specification"><span class="col-th">Цвет изделия:</span><span class="col-td">Хром</span></div>
	                        <div class="row-specification"><span class="col-th">Подключение:</span><span class="col-td">К водопроводу</span></div>
	                        <div class="row-specification"><span class="col-th">Габариты (ВхГ):</span><span class="col-td">16,2х26 см</span></div>
                    		
                    	</div>
                    	<div class="specifications-col col-md-6">
	                        <div class="row-specification"><span class="col-th">Вид смесителя:</span><span class="col-td">Однорычажный</span></div>
	                        <div class="row-specification"><span class="col-th">Цвет изделия:</span><span class="col-td">Хром</span></div>
	                        <div class="row-specification"><span class="col-th">Подключение:</span><span class="col-td"> Каркасное основание с панелью</span></div>
	                        <div class="row-specification"><span class="col-th">Габариты (ВхГ):</span><span class="col-td">16,2х26 см</span></div>
	                        <div class="row-specification"><span class="col-th">Тип излива:</span><span class="col-td">Поворотный</span></div>
	                        <div class="row-specification"><span class="col-th">Тип излива:</span><span class="col-td">Поворотный</span></div>
	                        <div class="row-specification"><span class="col-th">Вид монтажа:</span><span class="col-td">Врезной</span></div>
                    		
                    	</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="goods-buy-col flexbox flex-wrap">
            <div class="goods-info-row hidden-xs">
                <div class="status flexbox space-between">
                    <?php if($i == 0): ?>
                    <span class="availability on-request"><span class="ic icon-ic-info"></span><span>Под заказ</span></span>
                    <?php elseif($i==1): ?>
                    <span class="availability ends"><span class="ic icon-ic-clock"></span><span>Заканчивается</span></span>
                    <?php else: ?>
                    <span class="availability available"><span class="ic icon-ic-check"></span><span>В наличии</span></span>
                    <?php endif; ?>
                    <div class="button-group">
                        <button type="button" class="btn-transparent btn-goods-user" data-toggle="tooltip" title="" onclick="compare.add('40');" data-original-title="В сравнение"><i class="icon-ic-compare text-muted"></i></button>
                        <button type="button" class="btn-transparent btn-goods-user" data-toggle="tooltip" title="" onclick="wishlist.add('40');" data-original-title="В закладки"><i class="icon-ic-like text-muted"></i></button>
                    </div>
                </div>
            </div>
            <div class="row text-center buy-goods-row flexbox flex-wrap">
                <div class="col-xs-6 col-sm-12">
                    <div class="prices <?= !$goods[$i]['price_old'] ? 'price-black' : '' ?>">
                        <?php if($goods[$i]['price_old']): ?>
                        <div class="price-old">
                            <?= $goods[$i]['price_old'] ?> <span class="currency">грн.</span></div>
                        <?php endif; ?>
                        <div class="price">
                            <?= $goods[$i]['price'] ?> <span class="currency">грн.</span></div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-12">
                    <button type="submit" class="btn btn-goods-buy"><span>Купить</span></button>
                </div>
            </div>
        </div>
    </div>
</div>