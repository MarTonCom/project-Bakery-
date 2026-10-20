<?php
require_once('header.php');
?>

    <main>
      <section class="registration-section">
        <div class="registration-card">
          <h2 class="reg-title">РЕГИСТРАЦИЯ</h2>

          <form action="#" method="POST" class="reg-form">
            <div class="input-group">
              <label for="name">Имя</label>
              <input type="text" id="name" placeholder="Введите ваше имя" />
            </div>

            <div class="input-group">
              <label for="email">Email</label>
              <input type="email" id="email" placeholder="example@mail.com" />
            </div>

            <div class="input-group">
              <label for="phone">Телефон</label>
              <input type="tel" id="phone" placeholder="+7 (___) ___-__- __" />
            </div>

            <div class="input-group">
              <label for="password">Пароль</label>
              <input type="password" id="password" placeholder="пароль" />
            </div>

            <button type="submit" class="reg-btn">СОЗДАТЬ АККАУНТ</button>

            <div class="reg-footer">
              Уже есть аккаунт? <a href="#0" class="login-link">Войти</a>
            </div>
          </form>
        </div>
      </section>
    </main>
<?php
require_once 'footer.php';
?>
