<!doctype html>
<html lang="en">
  <head>
    <title>UBER партнер</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <link rel="shortcut icon" href="/imgs/fav.png" type="image/png">   
    <link href="style.css" rel="stylesheet">
  </head>

  <body>	
    <!-- Модальное окно десктоп -->
    <div id="modal-fit" class="modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="thank-you.php" method="post">
              <div class="form-group">
                <label for="name-field-modal">Фамилия, Имя<span class="red">*</span></label>
                <input id="name-field-modal" type="text" class="form-control" placeholder="Введите Фамилию и Имя" name="name" required> 
              </div>
              <div class="form-group">
                <label for="phone-field-modal">Телефон<span class="red">*</span></label>
                <input id="phone-field-modal" type="text" class="form-control" placeholder="Введите номер телефона" name="phone" required>
              </div>
              <div class="form-group">
                <label for="email-field-modal">Email (электронная почта)</label>
                <input id="email-field-modal" type="email" class="form-control" placeholder="Введите email, например ivanov@mail.ru" name="email">
              </div>
              <div class="form-group">
                <label for="brand-and-model-field-modal">Марка и модель авто</label>
                <input id="brand-and-model-field-modal" type="text" class="form-control" placeholder="Например, Ford Focus" name="brand-and-model">
              </div>
              <div class="form-group">
                <label for="year-field-modal">Год выпуска авто</label>
                <input id="year-field-modal" type="text" class="form-control" placeholder="Введите год выпуска" name="year">
              </div>
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
    </div>
    
    <!-- Модальное окно мобайл -->
    <div id="modal-fit-mob" class="modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="thank-you-mob.php" method="post">
              <div class="form-group">
                <label for="name-field-modal-mob">Фамилия, Имя<span class="red">*</span></label>
                <input id="name-field-modal-mob" type="text" class="form-control" placeholder="Введите Фамилию и Имя" name="name" required> 
              </div>
              <div class="form-group">
                <label for="phone-field-modal-mob">Телефон<span class="red">*</span></label>
                <input id="phone-field-modal-mob" type="text" class="form-control" placeholder="Введите номер телефона" name="phone" required>
              </div>
              <div class="form-group">
                <label for="email-field-modal-mob">Email (электронная почта)</label>
                <input id="email-field-modal-mob" type="email" class="form-control" placeholder="Введите email, например ivanov@mail.ru" name="email">
              </div>
              <div class="form-group">
                <label for="brand-and-model-field-modal-mob">Марка и модель авто</label>
                <input id="brand-and-model-field-modal-mob" type="text" class="form-control" placeholder="Например, Ford Focus" name="brand-and-model">
              </div>
              <div class="form-group">
                <label for="year-field-modal-mob">Год выпуска авто</label>
                <input id="year-field-modal-mob" type="text" class="form-control" placeholder="Введите год выпуска" name="year">
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" name="agree" checked disabled>
                  с условиями <a href="agreement.php" target="_blank">агентского договора</a> ознакомлен и согласен
                </label>
              </div>              
              <button type="submit" class="btn btn-primary">Стать водителем</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid sticky-top header d-none d-lg-block">
      <nav class="row navbar navbar-light bg-dark">
          <div class="col-auto d-flex align-items-center">
            <a href=""><img src="imgs/logo.png" height="40" alt=""></a>
          </div>
          <ul class="col d-flex align-items-center list-unstyled list-inline">
            <li class="list-inline-item"><a href="#why-uber-section" id="why-uber-link">Почему UBER</a></li>
            <li class="list-inline-item"><a href="#req-drivers-section" id="req-drivers-link">Требования к водителям</a></li>
            <li class="list-inline-item"><a href="#req-auto-section" id="req-auto-link">Tребования к авто</a></li>
            <li class="list-inline-item"><a href="#our-commission-section" id="our-commission-link">Наша комиссия</a></li>
            <li class="list-inline-item"><a href="#change-partner-section" id="change-partner-link">Сменить партнера</a></li> 
          </ul>
          <div class="col-auto d-flex align-items-center justify-content-end contacts">           
            <img class="phone-icon" src="imgs/phone.svg" width="17" height="17" alt="">
            <div>
              <span class="phone-digits">+38 099 000 70 00</span>
            </div>
            <img class="whatsapp-icon" src="imgs/whatsapp.svg" width="18" height="18" alt="">
            <img class="viber-icon" src="imgs/viber.png" width="16" height="18" alt="">
            <img src="imgs/telegram.png" width="18" height="18" alt="">           
          </div>
      </nav>
    </div>

  	<!-- Navbar for mobile -->
    <div id="header-mob" class="pos-f-t sticky-top header d-lg-none">
      <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
        	<ul class="col list-unstyled">
        		<li><a href="#why-uber-section" id="why-uber-link-mob">Почему UBER</a></li><br>
        		<li><a href="#req-drivers-section" id="req-drivers-link-mob">Требования к водителям</a></li><br>
        		<li><a href="#req-auto-section" id="req-auto-link-mob">Tребования к авто</a></li><br>
        		<li><a href="#our-commission-section" id="our-commission-link-mob">Наша комиссия</a></li><br>
        		<li><a href="#change-partner-section" id="change-partner-link-mob">Сменить партнера</a></li>	
        	</ul>
        </div>
      </div>
      <nav class="navbar navbar-dark bg-dark no-gutters">
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>
        <div class="col d-flex align-items-center justify-content-end contacts">				  	
      			<span class="phone-digits">+38 099 000 70 00</span>
      	</div>
    		<img class="whatsapp-icon" src="imgs/whatsapp.svg" width="14" height="14" alt="">
    		<img class="viber-icon" src="imgs/viber.png" width="12" height="14" alt="">
    		<img src="imgs/telegram.png" width="14" height="14" alt="">				
      </nav>       
    </div>