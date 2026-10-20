<?php
require_once('header.php');
?>

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

<?php
require_once 'footer.php';
?>