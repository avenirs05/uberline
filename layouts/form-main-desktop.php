<form action="/thanks-desktop.php" method="post">
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
      с условиями <a href="downloads/agreement.docx" target="_blank">агентского договора</a> ознакомлен и согласен
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Стать водителем</button>
</form>