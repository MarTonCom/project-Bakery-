<?php
require_once('header.php');
?>
    <main>
  <section class="where-section">
    
    <!-- 1. МОСКВА (Текст слева) -->
    <div class="city-card">
      <div class="city-info">
        <h2 class="city-name">Москва</h2>
        <div class="city-details">
          <p class="address">ул. Арбат, д. 15, стр. 1</p>
          <p class="time">Ежедневно с 8:00 до 20:00</p>
          <p class="phone">+7 (906) 888-99-00</p>
        </div>
        <button class="city-btn">Подробнее о точке</button>
      </div>
      <div class="city-map">
        <!-- Вставь сюда код iframe из Яндекс Карт -->
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A789e3355bf04a29eac4a315f0f2be43cbf6673ffbbfcc27a29411cd72d977f10&amp;source=constructor" width="500" height="400" frameborder="0"></iframe>
      </div>
    </div>

    <!-- 2. САНКТ-ПЕТЕРБУРГ (Текст справа) -->
    <div class="city-card reverse">
      <div class="city-info">
        <h2 class="city-name">Санкт-Петербург</h2>
        <div class="city-details">
          <p class="address">Невский проспект, д. 34</p>
          <p class="time">Пн-Вс: 9:00 - 21:00</p>
          <p class="phone">+7 (906) 888-99-01</p>
        </div>
        <button class="city-btn">Подробнее о точке</button>
      </div>
      <div class="city-map">
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A789e3355bf04a29eac4a315f0f2be43cbf6673ffbbfcc27a29411cd72d977f10&amp;source=constructor" width="500" height="400" frameborder="0"></iframe>
      </div>
    </div>

    <!-- 3. НОВОСИБИРСК (Текст слева) -->
    <div class="city-card">
      <div class="city-info">
        <h2 class="city-name">Новосибирск</h2>
        <div class="city-details">
          <p class="address">ул. Фрунзе, д. 88</p>
          <p class="time">Пн-Сб: 9:00 - 19:00</p>
          <p class="phone">+7 (906) 888-99-02</p>
        </div>
        <button class="city-btn">Подробнее о точке</button>
      </div>
      <div class="city-map">
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A789e3355bf04a29eac4a315f0f2be43cbf6673ffbbfcc27a29411cd72d977f10&amp;source=constructor" width="500" height="400" frameborder="0"></iframe>
      </div>
    </div>

    <!-- 4. ЯКУТСК (Текст справа) -->
    <div class="city-card reverse">
      <div class="city-info">
        <h2 class="city-name">Якутск</h2>
        <div class="city-details">
          <p class="address">ул. Чернышевского, д. 21</p>
          <p class="time">Пн-Пт: 10:00 - 18:00</p>
          <p class="phone">+7 (906) 888-99-03</p>
        </div>
        <button class="city-btn">Подробнее о точке</button>
      </div>
      <div class="city-map">
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A789e3355bf04a29eac4a315f0f2be43cbf6673ffbbfcc27a29411cd72d977f10&amp;source=constructor" width="500" height="700" frameborder="0"></iframe>
      </div>
    </div>

  </section>
</main>
<?php
require_once 'footer.php';
?>