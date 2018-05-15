
<div class="goods-item goods-type-1">
	<div class="box-goods">
	<div class="inner-goods cf">
		<div class="goods-image">
			<figure class="image">
				<a href="#"><img src="img/<?= $goods[$i]['img'] ?>" alt=""></a>
			</figure> <!-- .image -->
		</div>
		<div class="goods-data">
			<div class="name"><a href="#"><?= $goods[$i]['title'] ?></a></div>
			<?php if($goods[$i]['price_old']): ?>
			<div class="price-old"><?= number_format($goods[$i]['price_old'], 0, '', ' ') ?> <span class="currency">грн.</span></div>
			<?php endif; ?>
			<div class="price <?= !$goods[$i]['price_old'] ? 'price-black' : '' ?>"><?= number_format($goods[$i]['price'], 0, '', ' ') ?> <span class="currency">грн.</span></div>
			<?php if($goods[$i]['rating']): ?>
			<div class="rating">
				<?php for($k=1; $k<=5; $k++): ?>
					<?php if($k<= $goods[$i]['rating']): ?>
						<svg class="ic ic_star star_yellow"><use xlink:href="img/icons.svg#star_yellow"></use></svg>
					<?php else: ?>
						<svg class="ic ic_star star_grey"><use xlink:href="img/icons.svg#star_grey"></use></svg>
					<?php endif; ?>
				<?php endfor; ?>
			</div>
			<?php endif; ?>
			<?php if($goods[$i]['reviews']): ?>
			<div class="reviews"><a href="#"><?= $goods[$i]['reviews'] ?> отзывов</a></div>
			<?php endif; ?>
		</div>
		<span class="labels-info">
		<?php if(isset($goods[$i]['sale']) && $goods[$i]['sale']): ?>
			<span class="ic ic-sale">скидка <?= $goods[$i]['sale'] ?>%</span>
		<?php endif; ?>
		</span>
		<?php if(isset($goods[$i]['gift']) && $goods[$i]['gift']): ?>
			<span class="icon-gift"><svg class="ic gift" height="48" width="48"><use xlink:href="img/icons.svg#gift"></use></svg></span>
		<?php endif; ?>
		<div class="goods-data-drop">
			<form action=""><button type="submit" class="btn btn-goods-buy"><span>Купить</span></button></form>
			<div class="specifications">
				<div class="row-specification">
						<div class="row-specification"><span class="col-th">Вид монтажа:</span><span class="col-td">Врезной</span></div>
						<div class="row-specification"><span class="col-th">Вид смесителя:</span><span class="col-td">Однорычажный</span></div>
						<div class="row-specification"><span class="col-th">Цвет изделия:</span><span class="col-td">Хром</span></div>
						<div class="row-specification"><span class="col-th">Подключение:</span><span class="col-td">К водопроводу</span></div>
						<div class="row-specification"><span class="col-th">Габариты (ВхГ):</span><span class="col-td">16,2х26 см</span></div>
						<div class="row-specification"><span class="col-th">Тип излива:</span><span class="col-td">Поворотный</span></div>
				</div>
			</div>
			<div class="labels-images">
				<?php if($goods[$i]['best']): ?>
					<img src="img/label-1.png" alt="">
				<?php endif; ?>
				<?php if($goods[$i]['brand']): ?>
					<img src="img/label-2.png" alt="">
				<?php endif; ?>
			</div>
			
		</div>
		
	</div>
</div>
</div>