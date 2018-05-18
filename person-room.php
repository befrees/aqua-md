<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'parts/_head.php' ?>
</head>
<body>
	<div id="wrapper" class="wrapper">
        <?php include 'parts/header.php'; ?>
		<div class="middle">
			<div class="breadcrumb-box">
                <div class="container">
                    <div class="row">
                        <ul class="breadcrumb">
                            <li><a href="#">Главная</a></li>
                            <li><span>Личный кабинет</span></li>
                        </ul>
                    </div>

                </div>
            </div>
			<div class="container b-room-page">
				<div class="row">
                    <div class="flexbox box box-shadow">
                        <div class="col-md-3 box-shadow">
                            <div class="row b-room-menu">
                                <h2 class="title-block text-uppercase b-room-menu__tit">Личный кабинет</h2>
                                <ul class="b-room-nav">
                                    <li class="active">
                                        <a href="#"><i class="ic icon-ic-profile"></i>Профиль</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ic icon-ic-location"></i>Адрес</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ic icon-ic-like"></i>Сохраненные товары</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ic icon-ic-order"></i>Заказы</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ic icon-ic-exit"></i>Выход</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <ul class="tabs b-room-tab-nav cf" role="tablist">
                                    <li class="active">
                                        <a href="#profile"  role="tab" data-toggle="tab"><i class="ic icon-ic-profile"></i>Профиль</a>
                                    </li>
                                    <li>
                                        <a href="#password"  role="tab" data-toggle="tab"><i class="ic icon-ic-password"></i>Смена пароля</a>
                                    </li>
                                    <li>
                                        <a href="#notification"  role="tab" data-toggle="tab"><i class="ic icon-ic-notification"></i>Уведомления</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="profile">
                                        <div class="b-prof-info">
                                            <div class="b-prof-info__item">
                                                <h2>Социальные сети</h2>
                                                <p>Свяжите свою учетную запись “АкваХарьков” с учетными записями социальных сетей и заходите в личный кабинет быстро и удобно </p>
                                                <ul class="b-prof-share-list">
                                                    <li class="flexbox align-middle">
                                                        <div class="b-prof-share-list__icon"><i class="ic icon-ic-fb"></i></div>
                                                        <div class="b-prof-share-list__txt">132243544575646567686862</div>
                                                        <div class="b-prof-share-list__btn"><button><i class="ic icon-ic-times"></i></button></div>
                                                    </li>
                                                    <li class="flexbox align-middle">
                                                        <div class="b-prof-share-list__icon"><i class="ic icon-ic-google"></i></div>
                                                        <div class="b-prof-share-list__txt">132243544575646567686862</div>
                                                        <div class="b-prof-share-list__btn"><button><i class="ic icon-ic-times"></i></button></div>
                                                    </li>
                                                </ul>
                                                <a href="#">+ Присоединить соц сеть</a>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h2>Основная информация:</h2>
                                                    <div class="form-row form-group">
                                                        <input type="text" class="form-control" placeholder="Оксана" value="">
                                                    </div>
                                                    <div class="form-row form-group">
                                                        <input type="text" class="form-control" placeholder="Волошаненко" value="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h2>Контактная информация:</h2>
                                                    <div class="form-row form-group">
                                                        <input type="text" class="form-control" placeholder="Oksi0601@gmail.com" value="">
                                                    </div>
                                                    <div class="button-add">
                                                        <a href="#">+ Добавить дополнительный email</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="b-lab">День Рождения:</label>
                                                    <div class="form-row form-group">
                                                        <input type="text" class="form-control" placeholder="Оксана" value="">
                                                    </div>
                                                    <label class="b-lab">Пол:</label>
                                                    <div class="form-row form-group flexbox">
                                                        <label class="lb-input"><input type="radio" name="sex" id="man"> Мужской</label>
                                                        <label class="lb-input"><input type="radio" name="sex" id="wom" checked="checked"> Женский</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-row form-group no-lab flexbox">
                                                        <input type="text" class="form-control tel-code" value="+38">
                                                        <input type="text" class="form-control" placeholder="(097)346-35-74" value="">
                                                    </div>
                                                    <div class="button-add">
                                                        <a href="#">+ Добавить дополнительный телефон</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button">
                                                <button class="btn btn-link">Отменить</button>
                                                <button class="btn btn-success">Сохранить анкету</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="password">password
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="notification">notification
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
    </div>
    <?php include 'parts/footer.php' ?>
</body>
</html>