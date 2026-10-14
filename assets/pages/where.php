<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Где можно купить</title>
    <link rel="stylesheet" href="../css/style.css" />
  </head>
  <body>
    <header class="header catalog-header">
      <div class="logo">
        <img class="logotype" src="../images/logo.png" alt="логотип" />
      </div>
      <div class="menu">
        <div class="desktop-only">
          <ul class="menu-list">
            <li class="menu-element">
              <a class="menu-element-link" href="/index.php">Главная</a>
            </li>
            <li class="menu-element">
              <a class="menu-element-link" href="catalog.php">Каталог</a>
            </li>
            <li class="menu-element">
              <a class="menu-element-link" href="about.php">О пекарне</a>
            </li>
            <li class="menu-element">
              <a class="menu-element-link" href="contacts.php">Контакты</a>
            </li>
            <li class="menu-element">
              <a class="menu-element-link" href="where.php">Где купить</a>
            </li>
            <li class="menu-element">
              <a class="menu-element-link" href="login.php">Аккаунт</a>
            </li>
            <li class="menu-element menu-element_action">
              <div class="action-link">
                <a class="menu-element-link" href="services.php">Купить</a>
              </div>
            </li>
          </ul>
        </div>
        <button class="burger mobile-only">
          <img class="header__img" src="../images/burger.png" alt="меню" />
        </button>
        <button class="basket mobile-only">
          <img class="header__img" src="../images/корзина.png" alt="корзина" />
        </button>
      </div>
    </header>
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
    <footer>
      <div class="desktop-only">
        <div class="footer-row">
          <div class="logo">
            <img class="logotype" src="../images/logo.png" alt="логотип" />
          </div>

          <div class="mini-menu">
            <ul class="mini-menu_list">
              <li class="mini-menu_list_element">
                <a class="mini-menu_list_element-link" href="">главная</a>
              </li>
              <li class="mini-menu_list_element">
                <a class="mini-menu_list_element-link" href="">доставка</a>
              </li>
              <li class="mini-menu_list_element">
                <a class="mini-menu_list_element-link" href="">о пекарне</a>
              </li>
              <li class="mini-menu_list_element">
                <a class="mini-menu_list_element-link" href="">контакты</a>
              </li>
              <li class="mini-menu_list_element">
                <a class="mini-menu_list_element-link" href="">где купить</a>
              </li>
              <li class="mini-menu_list_element">
                <a class="mini-menu_list_element-link" href="">карьера</a>
              </li>
            </ul>
          </div>
          <div class="applied">
            <ul class="number-phone_list">
              <li>
                <div class="number-phone_list_item">
                  <div class="number-phone_list_item_title">
                    <p>ТЕЛЕФОН ДОСТАВКИ</p>
                  </div>
                  <div class="number-phone_list_item_number">
                    <a class="delivery-phone-number" href="tel:+99995555555"
                      >+7 (906) 888-99-00</a
                    >
                  </div>
                  <div class="number-phone_list_item_additionally">
                    <p>Ежедневно с 8 до 20</p>
                  </div>
                </div>
              </li>

              <li>
                <div class="number-phone_list_item">
                  <div class="number-phone_list_item_title">
                    <p>ТЕЛЕФОН CЛУЖБЫ ПОДДЕРЖКИ</p>
                  </div>
                  <div class="number-phone_list_item_number">
                    <a class="delivery-phone-number" href="tel:+99995555555"
                      >124</a
                    >
                  </div>
                  <div class="number-phone_list_item_additionally">
                    <p>Круглосуточно</p>
                  </div>
                </div>
              </li>
            </ul>
            <div class="applied_personal-data">
              <p>Политика обработки персональных данных</p>
            </div>
          </div>
          <div class="social_media">
            <div class="social_media_first-line">
              <div class="social--media_square">
                <img
                  src="../images/социальные сети/free-icon-telegram-4701496 1.png"
                  alt="Телеграмм"
                />
              </div>
              <div class="social--media_square">
                <img
                  src="../images/социальные сети/free-icon-youtube-1384028 1.png"
                  alt="Ютуб"
                />
              </div>
            </div>
            <div class="social_media_second-line">
              <div class="social--media_square">
                <img
                  src="../images/социальные сети/free-icon-yandex-152840 1.png"
                  alt="Яндекс"
                />
              </div>

              <div class="social--media_square">
                <img
                  src="../images/социальные сети/free-icon-vk-2111765 1.png"
                  alt="Вконтакте"
                />
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="mobile-only">
        <div class="social-media">
          <div class="social-media_element social-media_element-first">
            <img
              class=""
              src="../images/социальные сети/free-icon-telegram-4701496 1.png"
              alt="телеграмм"
            />
          </div>
          <div class="social-media_element social-media_element-second">
            <img
              class=""
              src="../images/социальные сети/free-icon-vk-2111765 1.png"
              alt="Вконтакте"
            />
          </div>
          <div class="social-media_element social-media_element-first">
            <img
              class=""
              src="../images/социальные сети/free-icon-youtube-1384028 1.png"
              alt="Ютуб"
            />
          </div>
          <div class="social-media_element social-media_element-second">
            <img
              class=""
              src="../images/социальные сети/free-icon-yandex-152840 1.png"
              alt="Яндекс Цзен"
            />
          </div>
        </div>
        <div class="others">
          <div class="delivery-phone">
            <div class="delivery-phone-title"><h5>Телефон доставки:</h5></div>
            <div class="number">
              <a class="delivery-phone-number" href="tel:+99995555555"
                >+9 999 555 5555</a
              >
            </div>
            <div class="delivery-phone-note"><p>Ежедневно с 8 до 20</p></div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
