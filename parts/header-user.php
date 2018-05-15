<header id="siteHeader" class="site-header">
    <div class="top-line hide-mob">
        <div class="container">
            <div class="row">
                <div class="phones-top col-sm-8 col-md-8 col-lg-9 hide-mobb">
                    <div class="text inline">
                        <i class="ic ic-phone">
                            <svg class="ic phone" width="15" height="15">
                                <use xlink:href="img/icons.svg#phone"></use>
                            </svg>
                        </i>
                        (400) 888 888 888 ;
                        (400) 888 888 888 ;
                        (400) 888 888 888
                    </div>
                    <button type="button" class="btn btn-success btn-callback modal-trigger"
                            data-target="modal-callback">Перезвонить мне
                    </button>
                </div>
                <div class="col-md-2 col-user-menu">
                    <div class="block-profile dropdown">
                        <a href="#" class="profile-link modal-trigger" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            <svg class="ic ic-user_login">
                                <use xlink:href="img/icons.svg#user_login"></use>
                            </svg>
                            Эдуард <span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="dLabel">
                            <li><a href="#">Личные данные</a></li>
                            <li><a href="#">Списки желаний</a></li>
                            <li><a href="#">Лист ожидания</a></li>
                            <li><a href="#">Отследить заказ</a></li>
                            <li><a href="#">Мои отзывы</a></li>
                            <li><a href="#">Просмотренные товары</a></li>
                            <li><a href="#">Корзина</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-1 block-languages">
                    <ul class="lang">
                        <li><a href="#" class="active">Рус</a></li>
                        <li><a href="#">Укр</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="info-line">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-logo"><a href="#">
                    <svg class="ic ic-logo" height="118">
                        <use xlink:href="img/icons.svg#logo_black"></use>
                    </svg>
                </a></div>
                <div class="col-md-8 col-search">
                    <div class="search-links flexbox flex-wrap">
                        <div class="static-menu horizontal hide-mob">
                            <ul class="menu">
                                <li><a href="#">Вопросы и ответы</a></li>
                                <li><a href="#">Кредит</a></li>
                                <li><a href="#">Доставка и оплата</a></li>
                                <li><a href="#">Контакты</a></li>
                            </ul>
                        </div>
                        <ul class="header-user-buttons">
                            <li class="compare"><a href="#">
                                <svg class="ic scale" width="34" height="23">
                                    <use xlink:href="img/icons.svg#scale"></use>
                                </svg>
                                <span>Сравнения</span></a></li>
                            <li class="li wish"><a href="#">
                                <svg class="ic wish" width="24" height="23">
                                    <use xlink:href="img/icons.svg#wish"></use>
                                </svg>
                                <span>Желания</span></a></li>
                        </ul>
                    </div> <!-- .search-links -->

                    <div class="search-container">
                        <div class="search-wrapper">
                            <form action="" class="search-form">
                                <div class="flexbox search-inner">
                                    <div class="input-field">
                                        <select name="category" id="search-category">
                                            <option value="">Все категории</option>
                                            <option value="1">Сантехника</option>
                                            <option value="2">кухня</option>
                                            <option value="3">керамическая плитка</option>
                                            <option value="4">отопление</option>
                                            <option value="5">строительство и ремонт</option>
                                            <option value="6">дача, сад, огород</option>
                                        </select>
                                    </div>
                                    <div class="input-field text-search">
                                        <input type="text" id="autocomplete-input" name="s"
                                               class="autocomplete validate <?= isset($_GET['s']) ? 'is-search' : '' ?>"
                                               placeholder="Поиск по каталогу" required="required"
                                               value="<?= isset($_GET['s']) ? $_GET['s'] : '' ?>">
                                    </div>
                                    <button type="submit" class="btn yellow sbm-search">
                                        <svg class="ic search">
                                            <use xlink:href="img/icons.svg#search"></use>
                                        </svg>
                                        <span class="hide-pc">Найти</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <button class="btn-open-search hide-pc">
                            <svg class="ic lupa-1" width="24" height="23">
                                <use xlink:href="img/icons.svg#lupa-1"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="search-mask hide-pc"></div>
                </div> <!-- .col-search -->
                <div class="col-md-2 col-cart">
                    <div class="cart-block">
                        <a href="#" class="open-cart-btn" data-activates="side-cart">
						<span class="cart-icons">
							<svg class="ic basket"><use xlink:href="img/icons.svg#basket"></use></svg>
							<span class="cart-count">88</span>
						</span>
                            <span class="cart-text"><span class="summ">172,150.00</span> грн</span>
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
    </div>
    <div class="menu-line">
        <div class="container menu-line-container flexbox">
            <div class="hide-pc mob-user-links">
                <ul class="header-user-buttons">
                    <li class="compare"><a href="#">
                        <svg class="ic scale" width="34" height="23">
                            <use xlink:href="img/icons.svg#scale"></use>
                        </svg>
                        <span>Сравнения</span></a></li>
                    <li class="li wish"><a href="#">
                        <svg class="ic wish" width="24" height="23">
                            <use xlink:href="img/icons.svg#wish"></use>
                        </svg>
                        <span>Желания</span></a></li>
                    <li class="hide-pc user-mob-btn">
                        <a href="#" class="profile-link login-form-link" data-box="#user-box">
                            <svg class="ic logout" height="24" width="24">
                                <use xlink:href="img/icons.svg#logout"></use>
                            </svg>
                            <span>Выйти</span></a>
                    </li>
                </ul>
            </div>
            <div class="menu-account menu-account-drop hide-pc" id="user-box">
                <ul class="menu">
                    <li><a href="#" class="active">Личные данные</a></li>
                    <li><a href="#">Списки желаний</a></li>
                    <li><a href="#">Лист ожидания</a></li>
                    <li><a href="#">Отследить заказ</a></li>
                    <li><a href="#">Мои отзывы</a></li>
                    <li><a href="#">Просмотренные товары</a></li>
                    <li class="item-link-cart"><a href="#">Корзина</a></li>
                </ul>
            </div>
            <div class="catalog-menu">
                <ul class="menu">
                    <li class="wrapper-catalog">
                        <a href="#" class="btn-catalog">
                            <span class="btn-label">Катaлог товаров</span>
                            <span class="icon-menu">
								<span></span>
								<span></span>
								<span></span>
							</span>
                        </a>
                        <?php include 'parts/_catalog-links.php' ?>
                    </li>
                </ul>

            </div>
            <div class="top-links">
                <?php include 'parts/top-links.php' ?>

            </div>
            <div class="pages-menu">
                <div class="btn-open-menu btn-dots btn-dots-white hide-1200 hide-mob">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
                <ul class="menu hide-max-1200">
                    <li><a href="#">советы</a></li>
                    <li><a href="#">Блог</a></li>
                    <li><a href="#">идеи Дизайна</a></li>
                </ul>
            </div>
            <div class="hide-pc mob-menu-pages">
                <ul class="menu">
                    <li><a href="#">Вопросы и ответы</a></li>
                    <li><a href="#">Кредит</a></li>
                    <li><a href="#">Доставка и оплата</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
                <div class="button-callback">
                    <button type="button" class="btn btn-success btn-callback modal-trigger"
                            data-target="modal-callback">Перезвонить мне
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>