<?php require_once 'header.php'; ?>

<!-- Main-screen for desktop -->
<div class="container-fluid d-none d-lg-block main-screen">
	<div class="row">
		<div class="col-8 headers">
			<h1>Подключение к UBER</h1>
			<p id="for-30-min">за 30 минут</p>
			<h2>Официальный партнер UBER в Украине</h2>
			<h2>Честная комиссия – от 2%</h2>
		</div>
		<div class="col-4">
			<form action="thank-you.php" method="post">
			  <div class="form-group">
			    <label for="name-field">Фамилия, Имя<span class="red">*</span></label>
			    <input id="name-field" type="text" class="form-control" placeholder="Введите Фамилию и Имя" name="name" required>	
			  </div>
			  <div class="form-group">
			    <label for="phone-field">Телефон<span class="red">*</span></label>
			    <input id="phone-field" type="text" class="form-control" placeholder="Введите номер телефона" name="phone" required>
			  </div>
			  <div class="form-group">
			    <label for="email-field">Email (электронная почта)</label>
			    <input id="email-field" type="email" class="form-control" placeholder="Введите email, например ivanov@mail.ru" name="email">
			  </div>
			  <div class="form-group">
			    <label for="brand-and-model-field">Марка и модель авто</label>
			    <input id="brand-and-model-field" type="text" class="form-control" placeholder="Например, Ford Focus" name="brand-and-model">
			  </div>
			  <div class="form-group">
			    <label for="year-field">Год выпуска авто</label>
			    <input id="year-field" type="text" class="form-control" placeholder="Введите год выпуска" name="year">
			  </div>
			  <!-- На десктопах будет ссылка на скачивание договора -->
			  <div class="form-check">
			    <label class="form-check-label">
			      <input type="checkbox" class="form-check-input" name="agree" checked disabled>
			      с условиями <a href="agreement.docx" target="_blank">агентского договора</a> ознакомлен и согласен
			    </label>
			  </div>
			  <button type="submit" class="btn btn-primary">Стать водителем</button>
			</form>
		</div>
	</div>		    
</div>


<!-- Main-screen for mobile -->
<div class="container-fluid d-lg-none main-screen-mob">
	<div class="row">
		<div class="col">
			<a href="/"><img class="logo-mob" src="imgs/logo.png" height="40" alt=""></a>
			<h1 class="text-center">Подключение к UBER</h1>
			<p class="text-center" id="for-30-min-mob">за 30 минут</p>
			<h2 class="text-center">Официальный партнер UBER в Украине</h2>
			<h2 class="text-center">Честная комиссия – от 2%</h2>
		</div>
	</div>		    
</div>

<!-- Form for mobile -->
<div class="container-fluid d-lg-none form-wrapper-mob">
	<div class="row">
		<div class="col">
			<form action="thank-you-mob.php" method="post">
			  <div class="form-group">
			    <label for="name-field-mob">Фамилия, Имя<span class="red">*</span></label>
			    <input id="name-field-mob" type="text" class="form-control" placeholder="Введите Фамилию и Имя" name="name-mob" required>	
			  </div>
			  <div class="form-group">
			    <label for="phone-field-mob">Телефон<span class="red">*</span></label>
			    <input id="phone-field-mob" type="text" class="form-control" placeholder="Введите номер телефона" name="phone-mob" required>
			  </div>
			  <div class="form-group">
			    <label for="email-field-mob">Email (электронная почта)</label>
			    <input id="email-field-mob" type="email" class="form-control" placeholder="Например, ivanov@mail.ru" name="email-mob">
			  </div>
			  <div class="form-group">
			    <label for="brand-and-model-field-mob">Марка и модель авто</label>
			    <input id="brand-and-model-field-mob" type="text" class="form-control" placeholder="Например, Ford Focus" name="brand-and-model-mob">
			  </div>
			  <div class="form-group">
			    <label for="year-field-mob">Год выпуска авто</label>
			    <input id="year-field-mob" type="text" class="form-control" placeholder="Введите год выпуска" name="year-mob">
			  </div>
			  <div class="form-check">
			    <label class="form-check-label">
			      <input type="checkbox" class="form-check-input" name="agree-mob" checked disabled>
			      с условиями <a href="agreement.php" target="_blank">агентского договора</a> ознакомлен и согласен
			    </label>
			  </div>
			  <button type="submit" class="btn btn-primary">Стать водителем</button>
			</form>
		</div>
	</div>		    
</div>

<div id="why-uber-section" class="container-fluid anchor-page">
	<div class="row">
		<div class="col col-lg-9 ml-auto mr-auto">
			<h2 class="text-center">Почему все больше водителей приходят работать в UBER?</h2>
		</div>
	</div>
	<div class="row first-row-discount">
		<div class="col-12 col-lg-3 ml-auto mr-auto text-center">
			<figure class="figure">
			  <img height="42" src="imgs/bullit-green-2.png" class="figure-img rounded" alt="">
			  <figcaption class="figure-caption"><b>Независимость</b><br>Вы сами определяете, когда, сколько и где вы будете выполнять заказы.
			  </figcaption>
			</figure>
		</div>
		<div class="col-12 col-lg-3 ml-auto mr-auto text-center">
			<figure class="figure">
			  <img height="42" src="imgs/bullit-green-2.png" class="figure-img rounded" alt="">
			  <figcaption class="figure-caption"><b>Поток клиентов</b><br>У вас всегда есть заказы. Минимальное время простоя. Минимальный холостой пробег.
			  </figcaption>
			</figure>
		</div>
		<div class="col-12 col-lg-3 ml-auto mr-auto text-center">
			<figure class="figure">
			  <img height="42" src="imgs/bullit-green-2.png" class="figure-img rounded" alt="">
			  <figcaption class="figure-caption"><b>Справедливость</b><br>Повышающие коэффициенты и бонусы за работу в загруженных районах.</li>
			  </figcaption>
			</figure>
		</div>
	</div>	
	<div class="row first-row-discount">
		<div class="col-12 col-lg-3 ml-auto mr-auto text-center">
			<figure class="figure">
			  <img height="42" src="imgs/bullit-green-2.png" class="figure-img rounded" alt="">
			  <figcaption class="figure-caption"><b>Гибкость оплаты</b><br>Ежедневная или еженедельная оплата по вашему выбору
			  </figcaption>
			</figure>
		</div>
		<div class="col-12 col-lg-3 ml-auto mr-auto text-center">
			<figure class="figure">
			  <img height="42" src="imgs/bullit-green-2.png" class="figure-img rounded" alt="">
			  <figcaption class="figure-caption"><b>Скидки</b><br>На топливо, запчасти, автосервис, страхование, повседневные товары.
			  </figcaption>
			</figure>
		</div>
		<div class="col-12 col-lg-3 ml-auto mr-auto text-center">
			<figure class="figure">
			  <img height="42" src="imgs/bullit-green-2.png" class="figure-img rounded" alt="">
			  <figcaption class="figure-caption"><b>Безопасность</b><br>Все ваши пассажиры идентифицированы и имеют рейтинг.
			  </figcaption>
			</figure>
		</div>
	</div>	
	<div class="row">
		<div class="col-12 col-lg-3 ml-auto mr-auto text-center">
			<figure class="figure last-figure">
			  <img height="42" src="imgs/bullit-green-2.png" class="figure-img rounded" alt="">
			  <figcaption class="figure-caption"><b>Техподдержка</b><br>Мы как официальный партнер поможем в любых внештатных ситуациях.
			  </figcaption>
			</figure>
		</div>
	</div>			
</div>    

<div id="discount-section" class="container-fluid anchor-page">
	<div class="row">
		<div class="col">
			<h2 class="text-center">Скидки для всех водителей UBER!</h2>
		</div>
	</div>	
	<div class="row first-row-discount">
		<div class="col-12 col-lg-3 ml-auto mr-auto text-center">
			<figure class="figure">
			  <img height="42" src="imgs/discount-window.png" class="figure-img rounded" alt="">
			  <figcaption class="figure-caption"><b>Топливо и газ</b><br>Скидка 3-4 грн/л на бензин или ДТ и 1-2 грн/л на газ в сети АЗК «ОККО», а также бесплатный кофе.
			  </figcaption>
			</figure>
		</div>
		<div class="col-12 col-lg-3 ml-auto mr-auto text-center">
			<figure class="figure">
			  <img height="42" src="imgs/discount-elit.png" class="figure-img rounded" alt="">
			  <figcaption class="figure-caption"><b>Автозапчасти</b><br>Скидка 27% на покупку автозапчастей в интернет- магазине Elit.
			  </figcaption>
			</figure>
		</div>
		<div class="col-12 col-lg-3 ml-auto mr-auto text-center">
			<figure class="figure">
			  <img height="42" src="imgs/discount-autoservices.png" class="figure-img rounded" alt="">
			  <figcaption class="figure-caption"><b>Автосервисы</b><br>Скидка от 10 до 50% на услуги СТО, шиномонтажа и автомойки, которые можно заказать на сайте Carbook.
			  </figcaption>
			</figure>
		</div>
	</div>	
	<div class="row">
		<div class="col-12 col-lg-3 ml-auto mr-auto text-center">
			<figure class="figure">
			  <img height="42" src="imgs/discount-tires.png" class="figure-img rounded" alt="">
			  <figcaption class="figure-caption"><b>Шины</b><br>Скидка от 5 до 15% на шины, диски и аккумуляторы в определенных магазинах «ШипШина».
			  </figcaption>
			</figure>
		</div>
		<div class="col-12 col-lg-3 ml-auto mr-auto text-center">
			<figure class="figure">
			  <img height="42" src="imgs/discount-insurance.png" class="figure-img rounded" alt="">
			  <figcaption class="figure-caption"><b>Страхование</b><br>Скидки до 20% на определенные услуги страхования в СК «Универсальная».
			  </figcaption>
			</figure>
		</div>
		<div class="col-12 col-lg-3 ml-auto mr-auto text-center">
			<figure class="figure last-figure">
			  <img height="42" src="imgs/discount-expences.png" class="figure-img rounded" alt="">
			  <figcaption class="figure-caption"><b>Ежедневные расходы</b><br>Дополнительные баллы за покупку товаров в супермаркетах «Фуршет» и мобильных аксессуаров в сети «АЛЛО».
			  </figcaption>
			</figure>
		</div>
	</div>    
</div>

<div id="req-drivers-section" class="container-fluid anchor-page">
	<div class="row">
		<div class="col-12 col-lg-5 offset-lg-1">
			<h2 class="text-center">Требования к водителям</h2>
			<ul>
				<li>Водительское удостоверение категории «B»</li>
				<li>Стаж вождения от 1 года</li>
				<li>Возраст от 19 лет</li>
				<li>Гражданство Украины или вид на жительство</li>
				<li>Личный или арендованный <a href="https://docs.google.com/spreadsheets/d/1XDzUIVBZxCrNIKkjFOc0eiKHNRLmPDaVJKzKcb1lu0E/edit#gid=407632270" target="_blank">автомобиль</a></li>
				<li>Наличие смартфона с 3G-интернетом</li>
				<li>Банковская карта (любая)</li>
				<li>Желание зарабатывать (ОБЯЗАТЕЛЬНО!)</li>
			</ul>
		</div>
		<div class="col-12 col-lg-5">
			<h2 class="text-center for-connection">Для подключения необходимо всего 3 документа:</h2>
			<ul class="list-unstyled">
				<li>1. Водительское удостоверение категории «B»</li>
				<li>2. Свидетельство о регистрации транспортного средства</li>
				<li>3. Полис ОСАГО</li>
			</ul>
		</div>
	</div>		 
	<div class="row text-center">
		<div class="col">
			<p class="text-center fit"><b>Подходите по условиям?</b></p>
		</div>	
	</div>   
	<div class="row text-center">
		<div class="col col-lg-3 ml-auto mr-auto">
			<button id="btn-fit" type="submit" class="btn btn-primary">Оставить заявку</button>
		</div>	
	</div>
</div>

<div id="req-auto-section" class="container-fluid anchor-page">
	<div class="row">
		<div class="col">
			<h2 class="text-center">Требования к автомобилям</h2>
		</div>
	</div>	
	<div class="row">
		<div class="col-12 col-lg-3 ml-auto mr-auto text-center">
			<figure class="figure">
			  <img height="200" src="imgs/uber-x.png" class="figure-img rounded" alt="">
			  <figcaption class="figure-caption"><b>UberX (Доступный класс)</b><br>Автомобили в исправном техническом состоянии не старше 1995 года. Например: Renault Logan, Daewoo Lanos, Chevrolet Aveo, Skoda Fabia, VW Polo, Hyundai Accent, Opel Astra или аналогичные модели, в т.ч. ZAZ, Lada, Geely и др. 
			  </figcaption>
			</figure>
		</div>
		<div class="col-12 col-lg-3 ml-auto mr-auto text-center">
			<figure class="figure">
			  <img height="200" src="imgs/uber-select.png" class="figure-img rounded" alt="">
			  <figcaption class="figure-caption"><b>Uber Select (Комфорт-класс)</b><br>Иномарки в исправном техническом состоянии не старше 2005 года (для определенных моделей – не старше 2001г). Например: VW Passat, Ford Mondeo, Toyota Camry, Hyundai Sonata, Skoda Superb или аналогичные модели.
			  </figcaption>
			</figure>
		</div>
		<div class="col-12 col-lg-3 ml-auto mr-auto text-center">
			<figure class="figure last-figure">
			  <img height="200" src="imgs/uber-black.png" class="figure-img rounded" alt="">
			  <figcaption class="figure-caption"><b>Uber Black (Премиум-класс)</b><br>Автомобили бизнес и представительного класса не старше 2006 года. Например: BMW 5-series / 7-series, Mercedes CLS/E/S-Class, Audi A6/A8, Lexus LS или аналогичные модели.
			  </figcaption>
			</figure>
		</div>
	</div>	
	<div class="row">
		<div class="col col-lg-9 ml-auto mr-auto list-auto-text-wrap text-center">
			<p>Посмотреть список всех допустимых марок и моделей можно <a href="https://docs.google.com/spreadsheets/d/1XDzUIVBZxCrNIKkjFOc0eiKHNRLmPDaVJKzKcb1lu0E/edit#gid=407632270" target="_blank">здесь</a></p>
			<p>Все автомобили должны иметь, по меньшей мере, 4 двери, чистый салон, хорошее внешнее состояние и исправные ремни безопасности.</p>
		</div>
	</div>  
</div>

<div id="our-commission-section" class="container-fluid anchor-page">
	<div class="row">
		<div class="col-10 ml-auto mr-auto">
			<h2 class="text-center">Наши комиссии и выплаты</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-lg-10 wrapper ml-auto mr-auto">
			<p>Стандартный размер партнерской комиссии - <b>6% !</b></p>
			<p>Это честные 6% без дополнительных «налогов» и прочих удержаний.</p>
			<p class="action"><b>АКЦИЯ!</b> Для всех подключившихся к нам в 2017 году комиссия в первый месяц работы составит всего <b>2% !</b></p> 
			<p>Выплаты осуществляются <b>1 раз в неделю.</b></p>
			<p>По вашему <b>желанию</b> мы будем платить вам <b>ежедневно</b>. При этом размер комиссии увеличится всего на 2%.</p>
			<p>Если вы совершаете <b>более 400</b> поездок в месяц, размер комиссии будет определён <b>индивидуально</b>.</p>
			<p class="action"><b>АКЦИЯ! «Приведи друга!» — </b> за каждого водителя, подключившегося к нам по вашей рекомендации, платим по 500 грн по достижении им отметки в 200 поездок.</p> 
		</div>
	</div>
</div>

<div id="change-partner-section" class="container-fluid anchor-page">
	<div class="row">
		<div class="col-12 col-lg-7 ml-auto mr-auto">
			<h2 class="text-center">Хотите перейти от другого партнера к нам?</h2>
			<h4 class="text-center"><i>Заполните короткую форму ниже:</i></h4>
		</div>
	</div>
	<div class="row">
		<!-- Desktop form -->
		<div class="col-7 d-none d-lg-block ml-auto mr-auto">
			<form action="thank-you-change.php" method="post">
			  <div class="form-group">
			    <label for="name-field-change">Фамилия, Имя<span class="red">*</span></label>
			    <input id="name-field-change" type="text" class="form-control" placeholder="Введите Фамилию и Имя" name="name" required>	
			  </div>
			  <div class="form-group">
			    <label for="phone-field-change">Телефон<span class="red">*</span></label>
			    <input id="phone-field-change" type="text" class="form-control" placeholder="Введите номер телефона" name="phone" required>
			  </div>
			  <div class="form-group">
			    <label for="email-field-change">Email (электронная почта)</label>
			    <input id="email-field-change" type="email" class="form-control" placeholder="Введите email, например ivanov@mail.ru" name="email">
			  </div>
			  <div class="form-group">
			    <label for="cause-field-change">Причина смены партнера</label>
			    <input id="cause-field-change" type="text" class="form-control" placeholder="Напишите причину смены партнера" name="cause">
			  </div>
			  <!-- На десктопах будет ссылка на скачивание договора -->
			  <div class="form-check">
			    <label class="form-check-label">
			      <input type="checkbox" class="form-check-input" name="agree" checked disabled>
			      с условиями <a href="agreement.docx" target="_blank">агентского договора</a> ознакомлен и согласен
			    </label>
			  </div>
			  <button type="submit" class="btn btn-primary">Сменить партнера</button>
			</form>
		</div>		
		<!-- Mobile form -->
		<div class="col d-lg-none ml-auto mr-auto">
			<form action="thank-you-change-mob.php" method="post">
			  <div class="form-group">
			    <label for="name-field-change-mob">Фамилия, Имя<span class="red">*</span></label>
			    <input id="name-field-change-mob" type="text" class="form-control" placeholder="Введите Фамилию и Имя" name="name" required>	
			  </div>
			  <div class="form-group">
			    <label for="phone-field-change-mob">Телефон<span class="red">*</span></label>
			    <input id="phone-field-change-mob" type="text" class="form-control" placeholder="Введите номер телефона" name="phone" required>
			  </div>
			  <div class="form-group">
			    <label for="email-field-change-mob">Email (электронная почта)</label>
			    <input id="email-field-change-mob" type="email" class="form-control" placeholder="Введите email, например ivanov@mail.ru" name="email">
			  </div>
			  <div class="form-group">
			    <label for="cause-field-change-mob">Причина смены партнера</label>
			    <input id="cause-field-change-mob" type="text" class="form-control" placeholder="Напишите причину смены партнера" name="cause">
			  </div>
			  <!-- На мобильных будет ссылка на страницу с договором -->
			  <div class="form-check">
			    <label class="form-check-label">
			      <input type="checkbox" class="form-check-input" name="agree" checked disabled>
			      с условиями <a href="agreement.php" target="_blank">агентского договора</a> ознакомлен и согласен
			    </label>
			  </div>
			  <button type="submit" class="btn btn-primary">Сменить партнера</button>
			</form>
		</div>
	</div>
</div>

<?php require_once 'footer.php'; ?>




