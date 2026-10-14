<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Форма заказа</title>
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
              <a class="menu-element-link" href="/index.html">Главная</a>
            </li>
            <li class="menu-element">
              <a class="menu-element-link" href="./catalog.html">Каталог</a>
            </li>
            <li class="menu-element">
              <a class="menu-element-link" href="./about.html">О пекарне</a>
            </li>
            <li class="menu-element">
              <a class="menu-element-link" href="./contacts.html">Контакты</a>
            </li>
            <li class="menu-element">
              <a class="menu-element-link" href="./where.html">Где купить</a>
            </li>
            <li class="menu-element">
              <a class="menu-element-link" href="./login.html">Аккаунт</a>
            </li>
            <li class="menu-element menu-element_action">
              <div class="action-link">
                <a class="menu-element-link" href="./services.html">Купить</a>
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
      <section class="checkout-section">
        <div class="checkout-wrapper">
          <!-- ЛЕВАЯ КОЛОНКА -->
          <div class="checkout-left">
            <div class="checkout-header">
              <h2 class="checkout-title">ВАШ ЗАКАЗ</h2>
              <span class="checkout-count">1 ТОВАР</span>
            </div>

            <h3 class="section-subtitle">ХЛЕБНАЯ КАРТА</h3>

            <ul class="order-list">
              <li class="order-item">
                <div class="item-img">
                  <!-- <div class="img-placeholder"></div> -->
                  <img
                    class="img-placeholder"
                    src="../images/breads/bread1.jpg"
                    alt="выбранный хлеб"
                  />
                </div>
                <div class="item-info">
                  <h4 class="item-name">    
                      Хлеб #1 пшеничный
                  </h4>
                  <p class="item-desc">
                    Ржаной (80%) ржаной муки заварной хлеб на ржаной закваске с
                    вяленой клюквой, грецким орехом, семенами тыквы и
                    подсолнечника. Плотный-влажный мякиш пряный и насыщенный.
                  </p>
                </div>
                <div class="item-controls">
                  <div class="qty-selector">
                    <button type="button" class="qty-btn qty-minus">−</button>
                    <span class="qty-value">1шт</span>
                    <button type="button" class="qty-btn qty-plus">+</button>
                  </div>
                  <button type="button" class="remove-btn">УДАЛИТЬ</button>
                  <div class="item-price">ИТОГО: 470Р.</div>
                </div>
              </li>
            </ul>
          </div>

          <div class="checkout-right">
            <p class="form-top-label">ОФОРМЛЕНИЕ ЗАКАЗА</p>

            <div class="form-group">
              <label class="form-label">СПОСОБ ДОСТАВКИ:</label>
              <div class="select-box">
                <select class="form-select">
                  <option>КУРЬЕРОМ</option>
                  <option>САМОВЫВОЗ</option>
                </select>
                <span class="select-arrow">▼</span>
              </div>
            </div>

            <div class="form-group">
              <label class="form-label">АДРЕС ДОСТАВКИ:</label>
              <input type="text" class="form-input" placeholder="Город" />
              <input
                type="text"
                class="form-input"
                placeholder="Напишите свой адрес здесь*"
              />

              <div class="input-row">
                <input type="text" class="form-input" placeholder="Дом*" />
                <input type="text" class="form-input" placeholder="Корпус" />
                <input type="text" class="form-input" placeholder="Подъезд" />
              </div>
              <div class="input-row">
                <input type="text" class="form-input" placeholder="Этаж" />
                <input type="text" class="form-input" placeholder="Квартира" />
                <input type="text" class="form-input" placeholder="Домофон" />
              </div>

              <p class="legal-text">описание описание описание описанеи</p>

              <input
                type="text"
                class="form-input"
                placeholder="Когда доставить?"
              />
              <input type="text" class="form-input" placeholder="Ваше имя" />
              <input
                type="tel"
                class="form-input"
                placeholder="Ваш мобильный телефон"
              />
              <input type="email" class="form-input" placeholder="Ваш email" />

              <p class="legal-text">
                описание описание описание описанеи описание описание описание
                описанеи описание описание описание описанеи описание описание
                описание описанеи
              </p>

              <textarea
                class="form-textarea"
                placeholder="Комментарий"
              ></textarea>
            </div>

            <div class="totals-block">
              <div class="total-row">
                <span>СТОИМОСТЬ ТОВАРОВ:</span>
                <span>470 Р.</span>
              </div>
              <div class="total-row">
                <span>СТОИМОСТЬ ДОСТАВКИ:</span>
                <span>0 Р.</span>
              </div>
            </div>

            <div class="checkout-footer">
              <div class="final-price">470 Р.</div>
              <button type="submit" class="submit-btn">ОФОРМИТЬ</button>
            </div>
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
