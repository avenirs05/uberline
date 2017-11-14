<form action="/thanks-mob.php" method="post">
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