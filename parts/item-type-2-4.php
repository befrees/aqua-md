
<div class="goods-item goods-type-min">
	<div class="box-goods">
	<div class="inner-goods cf">
		<div class="goods-info-row">
			<div class="status flexbox space-between">
				<div class="button-group">
			        <button type="button" class="btn-transparent btn-goods-user" data-toggle="tooltip" title="" onclick="wishlist.add('40');" data-original-title="В закладки"><i class="icon-ic-like text-muted"></i></button>
		      	</div>
			</div>
		</div>
		<div class="goods-image">
			<figure class="image">
				<a href="#"><img src="img/<?= $goods[$i]['img'] ?>" alt=""></a>
			</figure> <!-- .image -->
			<div class="labels-info">
				<span class="label-info">
					<span class="label-info_inner">
						<span class="top-lbl-big">ТОП</span>
						<span class="top-lbl-norm">продаж</span>
					</span>
				</span>
				
			</div>
		</div>
		<div class="goods-data">
			<div class="goods-top-data">
			<h4 class="name"><a href="#"><?= $goods[$i]['title'] ?></a></h4>
			
			<div class="row buy-goods-row flexbox">
				<div class="col-price">
					<div class="prices price-black">					
						<div class="price"><?= $goods[$i]['price'] ?> <span class="currency">грн.</span></div>
					</div>
				</div>
				<div class="col-btn"><button type="submit" class="btn btn-goods-buy pull-right"><span>Купить</span></button></div>
			</div>
				
			</div>
		</div>
		
	</div>
</div>
</div>