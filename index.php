<?php require_once 'header.php'; ?>

<!-- Main-screen for desktop -->
<div class="container-fluid d-none d-lg-block main-screen">
	<div class="row">
		<div class="col-8 headers">
			<h1>Подключение к UBER</h1>
			<p id="for-30-min">за 30 минут</p>
			<h2>Официальный партнер UBER в Киеве</h2>
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
			<h2 class="text-center">Официальный партнер UBER в Киеве</h2>
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
			<ul>
				<li>Вы <b>сами</b> определяете, когда, сколько и где вы будете выполнять заказы.</li>
				<li>У вас всегда есть <b>заказы</b>. Минимальное время простоя. Минимальный холостой пробег.</li>
				<li>Повышающие <b>коэффициенты</b> и бонусы за работу в загруженных районах.</li>
				<li><b>Ежедневная</b> или еженедельная оплата по вашему выбору</li>
				<li><b>Скидки</b> на топливо, запчасти, автосервис, страхование, повседневные товары.</li>
				<li><b>Безопасность:</b> все ваши пассажиры идентифицированы и имеют рейтинг.</li>
				<li>Техподдержка официального партнера – мы поможем в любых внештатных ситуациях.</li>
			</ul>
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
		<div class="col col-lg-5 offset-lg-1">
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
		<div class="col col-lg-5">
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


	<div id="req-auto-section" class="anchor-page"></div>

		<h1>Требования к авто</h1>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptas quia vitae ea, veritatis totam numquam enim alias tempore architecto aperiam eaque unde laborum explicabo. Aliquid inventore iure quam necessitatibus.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex rem tempora deleniti debitis accusantium explicabo doloremque, quibusdam numquam commodi adipisci? Quis, veniam dolorem officiis blanditiis dicta iusto possimus quasi dolorum.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id assumenda exercitationem, quis laboriosam maiores cum eius, consectetur adipisci ipsam perferendis recusandae labore minima minus eveniet, tenetur explicabo deleniti nam optio!
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, quibusdam numquam aliquam. Quod temporibus pariatur quam, accusamus quia dicta quis, eos velit perspiciatis praesentium. Nemo fugiat nisi distinctio incidunt tempore?
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptas quia vitae ea, veritatis totam numquam enim alias tempore architecto aperiam eaque unde laborum explicabo. Aliquid inventore iure quam necessitatibus.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex rem tempora deleniti debitis accusantium explicabo doloremque, quibusdam numquam commodi adipisci? Quis, veniam dolorem officiis blanditiis dicta iusto possimus quasi dolorum.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id assumenda exercitationem, quis laboriosam maiores cum eius, consectetur adipisci ipsam perferendis recusandae labore minima minus eveniet, tenetur explicabo deleniti nam optio!
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, quibusdam numquam aliquam. Quod temporibus pariatur quam, accusamus quia dicta quis, eos velit perspiciatis praesentium. Nemo fugiat nisi distinctio incidunt tempore?		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptas quia vitae ea, veritatis totam numquam enim alias tempore architecto aperiam eaque unde laborum explicabo. Aliquid inventore iure quam necessitatibus.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex rem tempora deleniti debitis accusantium explicabo doloremque, quibusdam numquam commodi adipisci? Quis, veniam dolorem officiis blanditiis dicta iusto possimus quasi dolorum.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id assumenda exercitationem, quis laboriosam maiores cum eius, consectetur adipisci ipsam perferendis recusandae labore minima minus eveniet, tenetur explicabo deleniti nam optio!
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, quibusdam numquam aliquam. Quod temporibus pariatur quam, accusamus quia dicta quis, eos velit perspiciatis praesentium. Nemo fugiat nisi distinctio incidunt tempore?
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptas quia vitae ea, veritatis totam numquam enim alias tempore architecto aperiam eaque unde laborum explicabo. Aliquid inventore iure quam necessitatibus.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex rem tempora deleniti debitis accusantium explicabo doloremque, quibusdam numquam commodi adipisci? Quis, veniam dolorem officiis blanditiis dicta iusto possimus quasi dolorum.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id assumenda exercitationem, quis laboriosam maiores cum eius, consectetur adipisci ipsam perferendis recusandae labore minima minus eveniet, tenetur explicabo deleniti nam optio!
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, quibusdam numquam aliquam. Quod temporibus pariatur quam, accusamus quia dicta quis, eos velit perspiciatis praesentium. Nemo fugiat nisi distinctio incidunt tempore?
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptas quia vitae ea, veritatis totam numquam enim alias tempore architecto aperiam eaque unde laborum explicabo. Aliquid inventore iure quam necessitatibus.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex rem tempora deleniti debitis accusantium explicabo doloremque, quibusdam numquam commodi adipisci? Quis, veniam dolorem officiis blanditiis dicta iusto possimus quasi dolorum.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id assumenda exercitationem, quis laboriosam maiores cum eius, consectetur adipisci ipsam perferendis recusandae labore minima minus eveniet, tenetur explicabo deleniti nam optio!
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, quibusdam numquam aliquam. Quod temporibus pariatur quam, accusamus quia dicta quis, eos velit perspiciatis praesentium. Nemo fugiat nisi distinctio incidunt tempore?
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptas quia vitae ea, veritatis totam numquam enim alias tempore architecto aperiam eaque unde laborum explicabo. Aliquid inventore iure quam necessitatibus.
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex rem tempora deleniti debitis accusantium explicabo doloremque, quibusdam numquam commodi adipisci? Quis, veniam dolorem officiis blanditiis dicta iusto possimus quasi dolorum.
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id assumenda exercitationem, quis laboriosam maiores cum eius, consectetur adipisci ipsam perferendis recusandae labore minima minus eveniet, tenetur explicabo deleniti nam optio!
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, quibusdam numquam aliquam. Quod temporibus pariatur quam, accusamus quia dicta quis, eos velit perspiciatis praesentium. Nemo fugiat nisi distinctio incidunt tempore?
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptas quia vitae ea, veritatis totam numquam enim alias tempore architecto aperiam eaque unde laborum explicabo. Aliquid inventore iure quam necessitatibus.
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex rem tempora deleniti debitis accusantium explicabo doloremque, quibusdam numquam commodi adipisci? Quis, veniam dolorem officiis blanditiis dicta iusto possimus quasi dolorum.
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id assumenda exercitationem, quis laboriosam maiores cum eius, consectetur adipisci ipsam perferendis recusandae labore minima minus eveniet, tenetur explicabo deleniti nam optio!
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, quibusdam numquam aliquam. Quod temporibus pariatur quam, accusamus quia dicta quis, eos velit perspiciatis praesentium. Nemo fugiat nisi distinctio incidunt tempore?		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptas quia vitae ea, veritatis totam numquam enim alias tempore architecto aperiam eaque unde laborum explicabo. Aliquid inventore iure quam necessitatibus.
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex rem tempora deleniti debitis accusantium explicabo doloremque, quibusdam numquam commodi adipisci? Quis, veniam dolorem officiis blanditiis dicta iusto possimus quasi dolorum.
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id assumenda exercitationem, quis laboriosam maiores cum eius, consectetur adipisci ipsam perferendis recusandae labore minima minus eveniet, tenetur explicabo deleniti nam optio!
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, quibusdam numquam aliquam. Quod temporibus pariatur quam, accusamus quia dicta quis, eos velit perspiciatis praesentium. Nemo fugiat nisi distinctio incidunt tempore?
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptas quia vitae ea, veritatis totam numquam enim alias tempore architecto aperiam eaque unde laborum explicabo. Aliquid inventore iure quam necessitatibus.
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex rem tempora deleniti debitis accusantium explicabo doloremque, quibusdam numquam commodi adipisci? Quis, veniam dolorem officiis blanditiis dicta iusto possimus quasi dolorum.
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id assumenda exercitationem, quis laboriosam maiores cum eius, consectetur adipisci ipsam perferendis recusandae labore minima minus eveniet, tenetur explicabo deleniti nam optio!
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, quibusdam numquam aliquam. Quod temporibus pariatur quam, accusamus quia dicta quis, eos velit perspiciatis praesentium. Nemo fugiat nisi distinctio incidunt tempore?
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptas quia vitae ea, veritatis totam numquam enim alias tempore architecto aperiam eaque unde laborum explicabo. Aliquid inventore iure quam necessitatibus.
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex rem tempora deleniti debitis accusantium explicabo doloremque, quibusdam numquam commodi adipisci? Quis, veniam dolorem officiis blanditiis dicta iusto possimus quasi dolorum.
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id assumenda exercitationem, quis laboriosam maiores cum eius, consectetur adipisci ipsam perferendis recusandae labore minima minus eveniet, tenetur explicabo deleniti nam optio!
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, quibusdam numquam aliquam. Quod temporibus pariatur quam, accusamus quia dicta quis, eos velit perspiciatis praesentium. Nemo fugiat nisi distinctio incidunt tempore?</div>
<div>
	<div id="our-commission-section" class="anchor-page"></div>
		<h1>Наши комиссии</h1>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptas quia vitae ea, veritatis totam numquam enim alias tempore architecto aperiam eaque unde laborum explicabo. Aliquid inventore iure quam necessitatibus.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex rem tempora deleniti debitis accusantium explicabo doloremque, quibusdam numquam commodi adipisci? Quis, veniam dolorem officiis blanditiis dicta iusto possimus quasi dolorum.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id assumenda exercitationem, quis laboriosam maiores cum eius, consectetur adipisci ipsam perferendis recusandae labore minima minus eveniet, tenetur explicabo deleniti nam optio!
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, quibusdam numquam aliquam. Quod temporibus pariatur quam, accusamus quia dicta quis, eos velit perspiciatis praesentium. Nemo fugiat nisi distinctio incidunt tempore?
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptas quia vitae ea, veritatis totam numquam enim alias tempore architecto aperiam eaque unde laborum explicabo. Aliquid inventore iure quam necessitatibus.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex rem tempora deleniti debitis accusantium explicabo doloremque, quibusdam numquam commodi adipisci? Quis, veniam dolorem officiis blanditiis dicta iusto possimus quasi dolorum.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id assumenda exercitationem, quis laboriosam maiores cum eius, consectetur adipisci ipsam perferendis recusandae labore minima minus eveniet, tenetur explicabo deleniti nam optio!
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, quibusdam numquam aliquam. Quod temporibus pariatur quam, accusamus quia dicta quis, eos velit perspiciatis praesentium. Nemo fugiat nisi distinctio incidunt tempore?		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptas quia vitae ea, veritatis totam numquam enim alias tempore architecto aperiam eaque unde laborum explicabo. Aliquid inventore iure quam necessitatibus.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex rem tempora deleniti debitis accusantium explicabo doloremque, quibusdam numquam commodi adipisci? Quis, veniam dolorem officiis blanditiis dicta iusto possimus quasi dolorum.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id assumenda exercitationem, quis laboriosam maiores cum eius, consectetur adipisci ipsam perferendis recusandae labore minima minus eveniet, tenetur explicabo deleniti nam optio!
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, quibusdam numquam aliquam. Quod temporibus pariatur quam, accusamus quia dicta quis, eos velit perspiciatis praesentium. Nemo fugiat nisi distinctio incidunt tempore?
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptas quia vitae ea, veritatis totam numquam enim alias tempore architecto aperiam eaque unde laborum explicabo. Aliquid inventore iure quam necessitatibus.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex rem tempora deleniti debitis accusantium explicabo doloremque, quibusdam numquam commodi adipisci? Quis, veniam dolorem officiis blanditiis dicta iusto possimus quasi dolorum.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id assumenda exercitationem, quis laboriosam maiores cum eius, consectetur adipisci ipsam perferendis recusandae labore minima minus eveniet, tenetur explicabo deleniti nam optio!
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, quibusdam numquam aliquam. Quod temporibus pariatur quam, accusamus quia dicta quis, eos velit perspiciatis praesentium. Nemo fugiat nisi distinctio incidunt tempore?
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptas quia vitae ea, veritatis totam numquam enim alias tempore architecto aperiam eaque unde laborum explicabo. Aliquid inventore iure quam necessitatibus.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex rem tempora deleniti debitis accusantium explicabo doloremque, quibusdam numquam commodi adipisci? Quis, veniam dolorem officiis blanditiis dicta iusto possimus quasi dolorum.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id assumenda exercitationem, quis laboriosam maiores cum eius, consectetur adipisci ipsam perferendis recusandae labore minima minus eveniet, tenetur explicabo deleniti nam optio!
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, quibusdam numquam aliquam. Quod temporibus pariatur quam, accusamus quia dicta quis, eos velit perspiciatis praesentium. Nemo fugiat nisi distinctio incidunt tempore?	
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex rem tempora deleniti debitis accusantium explicabo doloremque, quibusdam numquam commodi adipisci? Quis, veniam dolorem officiis blanditiis dicta iusto possimus quasi dolorum.
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id assumenda exercitationem, quis laboriosam maiores cum eius, consectetur adipisci ipsam perferendis recusandae labore minima minus eveniet, tenetur explicabo deleniti nam optio!
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, quibusdam numquam aliquam. Quod temporibus pariatur quam, accusamus quia dicta quis, eos velit perspiciatis praesentium. Nemo fugiat nisi distinctio incidunt tempore?
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptas quia vitae ea, veritatis totam numquam enim alias tempore architecto aperiam eaque unde laborum explicabo. Aliquid inventore iure quam necessitatibus.
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex rem tempora deleniti debitis accusantium explicabo doloremque, quibusdam numquam commodi adipisci? Quis, veniam dolorem officiis blanditiis dicta iusto possimus quasi dolorum.
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id assumenda exercitationem, quis laboriosam maiores cum eius, consectetur adipisci ipsam perferendis recusandae labore minima minus eveniet, tenetur explicabo deleniti nam optio!
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, quibusdam numquam aliquam. Quod temporibus pariatur quam, accusamus quia dicta quis, eos velit perspiciatis praesentium. Nemo fugiat nisi distinctio incidunt tempore?</div>
<div>
	<div id="change-partner-section" class="anchor-page"></div>
		<h1>Сменить партнера</h1>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptas quia vitae ea, veritatis totam numquam enim alias tempore architecto aperiam eaque unde laborum explicabo. Aliquid inventore iure quam necessitatibus.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex rem tempora deleniti debitis accusantium explicabo doloremque, quibusdam numquam commodi adipisci? Quis, veniam dolorem officiis blanditiis dicta iusto possimus quasi dolorum.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id assumenda exercitationem, quis laboriosam maiores cum eius, consectetur adipisci ipsam perferendis recusandae labore minima minus eveniet, tenetur explicabo deleniti nam optio!
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, quibusdam numquam aliquam. Quod temporibus pariatur quam, accusamus quia dicta quis, eos velit perspiciatis praesentium. Nemo fugiat nisi distinctio incidunt tempore?
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptas quia vitae ea, veritatis totam numquam enim alias tempore architecto aperiam eaque unde laborum explicabo. Aliquid inventore iure quam necessitatibus.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex rem tempora deleniti debitis accusantium explicabo doloremque, quibusdam numquam commodi adipisci? Quis, veniam dolorem officiis blanditiis dicta iusto possimus quasi dolorum.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id assumenda exercitationem, quis laboriosam maiores cum eius, consectetur adipisci ipsam perferendis recusandae labore minima minus eveniet, tenetur explicabo deleniti nam optio!
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, quibusdam numquam aliquam. Quod temporibus pariatur quam, accusamus quia dicta quis, eos velit perspiciatis praesentium. Nemo fugiat nisi distinctio incidunt tempore?		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptas quia vitae ea, veritatis totam numquam enim alias tempore architecto aperiam eaque unde laborum explicabo. Aliquid inventore iure quam necessitatibus.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex rem tempora deleniti debitis accusantium explicabo doloremque, quibusdam numquam commodi adipisci? Quis, veniam dolorem officiis blanditiis dicta iusto possimus quasi dolorum.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id assumenda exercitationem, quis laboriosam maiores cum eius, consectetur adipisci ipsam perferendis recusandae labore minima minus eveniet, tenetur explicabo deleniti nam optio!
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, quibusdam numquam aliquam. Quod temporibus pariatur quam, accusamus quia dicta quis, eos velit perspiciatis praesentium. Nemo fugiat nisi distinctio incidunt tempore?
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptas quia vitae ea, veritatis totam numquam enim alias tempore architecto aperiam eaque unde laborum explicabo. Aliquid inventore iure quam necessitatibus.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex rem tempora deleniti debitis accusantium explicabo doloremque, quibusdam numquam commodi adipisci? Quis, veniam dolorem officiis blanditiis dicta iusto possimus quasi dolorum.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id assumenda exercitationem, quis laboriosam maiores cum eius, consectetur adipisci ipsam perferendis recusandae labore minima minus eveniet, tenetur explicabo deleniti nam optio!
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, quibusdam numquam aliquam. Quod temporibus pariatur quam, accusamus quia dicta quis, eos velit perspiciatis praesentium. Nemo fugiat nisi distinctio incidunt tempore?
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptas quia vitae ea, veritatis totam numquam enim alias tempore architecto aperiam eaque unde laborum explicabo. Aliquid inventore iure quam necessitatibus.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex rem tempora deleniti debitis accusantium explicabo doloremque, quibusdam numquam commodi adipisci? Quis, veniam dolorem officiis blanditiis dicta iusto possimus quasi dolorum.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id assumenda exercitationem, quis laboriosam maiores cum eius, consectetur adipisci ipsam perferendis recusandae labore minima minus eveniet, tenetur explicabo deleniti nam optio!
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, quibusdam numquam aliquam. Quod temporibus pariatur quam, accusamus quia dicta quis, eos velit perspiciatis praesentium. Nemo fugiat nisi distinctio incidunt tempore?
	giat nisi distinctio incidunt tempore?
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptas quia vitae ea, veritatis totam numquam enim alias tempore architecto aperiam eaque unde laborum explicabo. Aliquid inventore iure quam necessitatibus.
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex rem tempora deleniti debitis accusantium explicabo doloremque, quibusdam numquam commodi adipisci? Quis, veniam dolorem officiis blanditiis dicta iusto possimus quasi dolorum.
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id assumenda exercitationem, quis laboriosam maiores cum eius, consectetur adipisci ipsam perferendis recusandae labore minima minus eveniet, tenetur explicabo deleniti nam optio!
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, quibusdam numquam aliquam. Quod temporibus pariatur quam, accusamus quia dicta quis, eos velit perspiciatis praesentium. Nemo fugiat nisi distinctio incidunt tempore?
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <!-- My Own Js-scripts -->
    <script src="js/main.js"></script>
    
    <!-- Маска ввода -->
    <script src="js/jquery.maskedinput.js" type="text/javascript"></script>

  </body>
</html>


