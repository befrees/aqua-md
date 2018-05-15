<div class="goods-item goods-type-2">
    <div class="box-goods">
        <div class="inner-goods cf">
            <div class="goods-info-row">
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
            <div class="goods-image">
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
            </div>
            <div class="goods-data">
                <div class="goods-top-data">
                    <h4 class="name"><a href="#"><?= $goods[$i]['title'] ?></a></h4>
                    <div class="row">
                        <div class="col-xs-7 short-info text-gray small">
                            <div class="text-nowrap">Страна: Китай</div>
                            <div class="text-nowrap">Производитель: Gorenje</div>
                        </div>
                        <div class="col-xs-5 text-right">
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
                        </div>
                    </div>
                    <div class="goods-data-drop">
                        <div class="bold title-spec text-center">Характеристики</div>
                        <div class="specifications scrollbar" >
                            <div class="specifications-inner">
                                <div class="row-specification"><span class="col-th">Вид монтажа:</span><span class="col-td">Врезной</span></div>
                                <div class="row-specification"><span class="col-th">Вид смесителя:</span><span class="col-td">Однорычажный</span></div>
                                <div class="row-specification"><span class="col-th">Цвет изделия:</span><span class="col-td">Хром</span></div>
                                <div class="row-specification"><span class="col-th">Подключение:</span><span class="col-td">К водопроводу</span></div>
                                <div class="row-specification"><span class="col-th">Габариты (ВхГ):</span><span class="col-td">16,2х26 см</span></div>
                                <div class="row-specification"><span class="col-th">Тип излива:</span><span class="col-td">Поворотный</span></div>
                                <div class="row-specification"><span class="col-th">Вид монтажа:</span><span class="col-td">Врезной</span></div>
                                <div class="row-specification"><span class="col-th">Вид смесителя:</span><span class="col-td">Однорычажный</span></div>
                                <div class="row-specification"><span class="col-th">Цвет изделия:</span><span class="col-td">Хром</span></div>
                                <div class="row-specification"><span class="col-th">Подключение:</span><span class="col-td">К водопроводу</span></div>
                                <div class="row-specification"><span class="col-th">Габариты (ВхГ):</span><span class="col-td">16,2х26 см</span></div>
                                <div class="row-specification"><span class="col-th">Тип излива:</span><span class="col-td">Поворотный</span></div>
                            </div>
                        </div>
                        <div class="labels-images text-center">
                            <img src="img/lbl-best.png" alt="">
                            <img src="img/lbl-garant.png" alt="">
                        </div>
                    </div>
                    <!-- .goods-data-drop -->
                    <div class="line-button-data text-center">
                        <button class="btn-close-data btn-toggle-data">
                            <span class="icon-ic-minus">
                <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                            </span>
                        </button>
                        <button class="btn-open-data btn-toggle-data">
                            <span class="icon-ic-plus">
                <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                            </span>
                        </button>
                    </div>
                    <div class="row buy-goods-row flexbox">
                        <div class="col-xs-6">
                            <div class="prices <?= !$goods[$i]['price_old'] ? 'price-black' : '' ?>">
                                <?php if($goods[$i]['price_old']): ?>
                                <div class="price-old">
                                    <?= $goods[$i]['price_old'] ?> <span class="currency">грн.</span></div>
                                <?php endif; ?>
                                <div class="price">
                                    <?= $goods[$i]['price'] ?> <span class="currency">грн.</span></div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <button type="submit" class="btn btn-goods-buy pull-right"><span>Купить</span></button>
                        </div>
                    </div>
                </div>
            </div>
            <?php if(isset($goods[$i]['gift']) && $goods[$i]['gift']): ?>
            <span class="icon-gift"><svg class="ic gift" height="48" width="48"><use xlink:href="img/icons.svg#gift"></use></svg></span>
            <?php endif; ?>
        </div>
    </div>
</div>