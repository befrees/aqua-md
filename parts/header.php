<header id="siteHeader" class="site-header">
    <div class="top-line">
        <div class="container">
            <div class="row">
                <div class="top-delivery-info cf">
                    <div class="delivery-text"><span class="text-uppercase">Бесплатная доставка </span><a href="#">Детали</a>
                    </div>
                    <div class="delivery-city"><span class="btn-label">
					<i class="ic icon-icon-map-marker"></i>Ваш регион:</span> <span class="dropdown"><a
                            href="#">Харьков</a></div>
                </div>
                <div class="phones-top hide-mob">
                    <div class="text inline">
                        <i class="ic icon-icon-phone"></i>
                        (400) 888 888 888 ;
                        (400) 888 888 888 ;
                        (400) 888 888 888
                    </div>
                </div>
                <div class="top-right pull-right">
                    <div class="block-languages">
                        <ul class="lang">
                            <li><a href="#" class="active">Рус</a></li>
                            <li><a href="#">Укр</a></li>
                        </ul>
                    </div>
                    <div class="block-profile"><a href="#modal-login" class="profile-link modal-trigger">
                        <i class="ic icon-ic-profile"></i>
                        Войти / Регистрация</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-line">
        <div class="container">
            <div class="row row-header flexbox">
                <div class="col-logo"><a href="#">
                    <img src="img/logo.svg">
                </a></div>
                <div class="catalog-menu">
                    <ul class="menu">
                        <li class="wrapper-catalog">
                            <a href="#" class="btn-catalog">
                                <span class="icon-menu">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                                <span class="btn-label">КАТЕГОРИИ</span>
                                <i class="ic icon-ic-arrow-down"></i>
                            </a>
                            <?php include '_catalog-links.php' ?>
                        </li>
                    </ul>
                </div> <!-- .catalog-menu -->
                <div class="col-search">

                    <div class="search-container">
                        <div class="search-wrapper">
                            <form action="" class="search-form">
                                <div class="search-inner">
                                    <div class="input-field text-search">
                                        <input type="text" id="autocomplete-input" name="s"
                                               class="autocomplete form-control validate <?= isset($_GET['s']) ? 'is-search' : '' ?>"
                                               placeholder="Поиск" required="required"
                                               value="<?= isset($_GET['s']) ? $_GET['s'] : '' ?>">
                                    </div>
                                    <button type="submit" class="btn yellow sbm-search">
                                        <i class="ic icon-ic-lupa"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div> <!-- .col-search -->
                    <div class="header-links flexbox">
                        <div class="static-menu horizontal">
                            <ul class="menu">
                                <li><a href="#">Кредит</a></li>
                                <li><a href="#">Доставка и оплата</a></li>
                                <li><a href="#">Гарантия</a></li>
                                <li><a href="#">Контакты</a></li>
                                <li class="link-sale"><a href="#"><i class="ic icon-icon-sale"></i>Акции</a></li>
                            </ul>
                        </div>
                        <div class="header-user-buttons">
	                        <ul class="user-buttons-menu">
	                            <li class="li compare">
	                                <a href="#">
	                                    <i class="ic icon-ic-compare"></i>
	                                    <span class="badge">4</span></a>
	                            </li>
	                            <li class="li wish">
	                                <a href="#">
	                                    <i class="ic icon-ic-heart-circle"></i>
	                                <span class="badge">4</span></a>
	                            </li>
	                        </ul>
	                    </div>
                    </div> <!-- .search-links -->
                <div class="col-cart">
                    <div class="cart-block">
                        <a href="#" class="open-cart-btn" data-activates="side-cart">
						<span class="cart-icons">
							<i class="ic icon-ic-cart"></i>
							<span class="badge cart-count">88</span>
						</span>
                        </a>
                    </div>
                </div> <!-- .col-cart -->
                <button class="btn-top-menu hide-pc">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

            </div>
        </div>
    </div> <!-- .header-line -->

</header>