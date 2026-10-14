<!doctype html>
<?php
date_default_timezone_set("Yekaterinburg");
$hour = 13; // Получаем текущий час (число от 0 до 23)

// Проверяем условие строго по ТЗ с картинки:
// С 8.00 до 20.00 (не включая) — дневная тема
// С 20.00 (включительно) до 8.00 (не включая) — ночная тема
if ($hour >= 8 && $hour < 20) {
    $theme = 'day-theme';
} else {
    $theme = 'night-theme';
}
?>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ХЛЕБОПЕКАРНЯ</title>
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body class="<?php echo $theme; ?>">
<header class="header">
    <div class="logo">
        <img class="logotype" src="assets/images/logo.png" alt="логотип" />
    </div>
    <div class="menu">
        <div class="desktop-only">
            <ul class="menu-list">
                <li class="menu-element">
                    <a class="menu-element-link" href="index.php">Главная</a>
                </li>
                <li class="menu-element">
                    <a class="assets/pages/catalog.php">Каталог</a>
                </li>
                <li class="menu-element">
                    <a class="menu-element-link" href="assets/pages/about.php">О пекарне</a>
                </li>
                <li class="menu-element">
                    <a class="menu-element-link" href="assets/pages/contacts.php">Контакты</a>
                </li>
                <li class="menu-element">
                    <a class="menu-element-link" href="assets/pages/where.php">Где купить</a>
                </li>
                <li class="menu-element">
                    <a class="menu-element-link" href="assets/pages/login.php">Аккаунт</a>
                </li>
                <li class="menu-element menu-element_action">
                    <div class="action-link">
                        <a class="menu-element-link" href="assets/pages/services.php">Купить</a>
                    </div>
                </li>
            </ul>
        </div>
        <button class="burger mobile-only">
            <img
                    class="header__img"
                    src="assets/images/burger.png"
                    alt="меню"
            />
        </button>
        <button class="basket mobile-only">
            <img
                    class="header__img"
                    src="assets/images/корзина.png"
                    alt="корзина"
            />
        </button>
    </div>
</header>
<main>
    <section class="cover">
        <div class="cover-content">
            <div class="cover-title">
                <h1>ХЛЕБОПЕКАРНЯ</h1>
            </div>
            <div class="cover-text">
                <p>
                    МЫ ПЕЧЁМ ХЛЕБ С 2017 ГОДА. НАШЕ ОТНОШЕНИЕ К РАБОТЕ — НАСТОЯЩАЯ
                    СТРАСТЬ, И НАМ НРАВИТСЯ ДЕЛИТЬСЯ ЕЮ С ВАМИ. СЕЙЧАС У ХЛЕБОПЕКАРНИ
                    ТОЛЬКО 4 КАФЕ-ПЕКАРНИ, 1 ГАСТРОБИСТРО И 10 КОРНЕРОВ НА МОСКОВСКИХ
                    РЫНКАХ — МЫ ПОСТАВЛЯЕМ ХЛЕБ В ЛУЧШИЕ РЕСТОРАНЫ, КАФЕ И БАРЫ
                    МОСКВЫ. ТАМ МНОГО ИНТЕРЕСНЫХ ИСТОРИЙ ПРО ХЛЕБ И РЕМЕСЛЕННЫЕ
                    ПРОДУКТЫ.
                </p>
            </div>
            <div class="technologies desktop-only">
                <p>
                    Современные «умные» технологии работы с тестом превращают муку,
                    воду и соль в неповторимый хлеб с упругим сливочным мякишем,
                    сладковатой хрустящей коркой и ярким сбалансированным вкусом.
                </p>
                <div class="cover-button">
                    <button>Заказать</button>
                </div>
            </div>
            <div class="cover-button mobile-only">
                <button>Заказать</button>
            </div>
        </div>
    </section>

    <section class="breads">
        <ul class="scroll-list-bread">
            <li>
                <a class="scroll-list-bread__link" href="">
                    <img
                            class="image-product"
                            src="assets/images/bred1.png"
                            alt="вариант хлеба 1"
                    />
                </a>
            </li>
            <li>
                <a class="scroll-list-bread__link" href="">
                    <img
                            class="image-product"
                            src="assets/images/bred2.png"
                            alt="вариант хлеба 2"
                    />
                </a>
            </li>
            <li>
                <a class="scroll-list-bread__link" href="">
                    <img
                            class="image-product"
                            src="assets/images/bred3.png"
                            alt="вариант хлеба 3"
                    />
                </a>
            </li>
            <li>
                <a class="scroll-list-bread__link" href="">
                    <img
                            class="image-product"
                            src="assets/images/breads/bread11.jpg"
                            alt="вариант хлеба 2"
                    />
                </a>
            </li>
            <li>
                <a class="scroll-list-bread__link" href="">
                    <img
                            class="image-product"
                            src="assets/images/breads/bread10.jpg"
                            alt="вариант хлеба 2"
                    />
                </a>
            </li>
            <li>
                <a class="scroll-list-bread__link" href="">
                    <img
                            class="image-product"
                            src="assets/images/breads/bread15.jpg"
                            alt="вариант хлеба 2"
                    />
                </a>
            </li>
        </ul>
        <div class="breads-orange mobile-only">
            <div class="breads-orange-content">
                <h2 class="breds-title">ОЗНАКОМТЕСЬ С ПОЛНОЙ КОЛЛЕКЦИЕЙ ХЛЕБОВ</h2>
                <button class="button button-on-orange">
                    Перейти к хлебной карте
                </button>
            </div>
            <div class="desktop-only"></div>
            <img
                    class="breads-orange-img"
                    src="assets/images/bred_slice.png"
                    alt="разрезанный хлеб"
            />
        </div>
        <div class="preview">
            <div class="preview-title">
                <h1 class="preview_title_h">ПОЧЕМУ ИМЕННО МЫ</h1>
                <div class="preview_title_button">
                    <button>О НАШЕМ ХЛЕБЕ</button>
                </div>
            </div>
            <div class="preview_content">
                <div class="preview_content_left">
                    <p class="name-bread">
                        Настоящий Sauerteig Ржаной хлеб на живой 100-летней закваске без
                        промышленных дрожжей
                    </p>
                    <p class="quote">Мюллер Ханс</p>
                    <button class="button">Перейти к хлебной карте</button>
                </div>
                <img
                        class="preview_content_img"
                        src="assets/images/bred_slice.png"
                        alt="хлеб порезанный"
                />
            </div>
        </div>
    </section>
    <section class="cooking_method desktop-only">
        <img
                class="cooking_method_left-img"
                src="assets/images/мука.png"
                alt="качественная мука"
        />
        <div class="cooking_method_right">
            <h3 class="cooking_method_right_title">
                Мука, вода и соль. Мы работаем с минимумом ингредиентов, получая
                максимум вкуса, пользы и удовольствия.
            </h3>
            <p class="cooking_method_right_text">
                «Открытый цех» — прозрачная мастерская профессионалов, печущая с
                2017 г. аутентичный хлеб на виду у всех. За стеклом виден замес
                теста руками пекарей, подовые печи и авторские рецепты. Только
                натуральные ингредиенты без дрожжей! Длительная ферментация до 24 ч.
                обеспечивает контроль, баланс и идеальный вкус.
            </p>
        </div>
    </section>

    <section class="cooking_method mobile-only">
        <div class="background-flour"></div>
        <div class="cooking_method_orange">
            <div class="cooking_method_orange__content">
                <div class="orange__content-title">
                    <h3 class="orange__content-title-h3">
                        Мука, вода и соль. Мы работаем с минимумом ингредиентов, получая
                        максимум вкуса, пользы и удовольствия.
                    </h3>
                </div>
                <div class="orange__content-text">
                    <p class="orange__content-text-p">
                        «Открытый цех» — прозрачная мастерская профессионалов, печущая с
                        2017 г. аутентичный хлеб на виду у всех. За стеклом виден замес
                        теста руками пекарей, подовые печи и авторские рецепты. Только
                        натуральные ингредиенты без дрожжей! Длительная ферментация до
                        24 ч. обеспечивает контроль, баланс и идеальный вкус.
                    </p>
                </div>
                <button class="button">АССОРТИМЕНТ ПЕКАРНИ</button>
            </div>
            <div class="sensations-bread-title">
                <h2>ПРЕВОСХОДНАЯ ВЫПЕЧКА</h2>
                <button>АССОРТИМЕНТ ПЕКАРНИ</button>
            </div>
        </div>
    </section>
    <section class="promotion">
        <img src="assets/images/акция.png" alt="акция">
    </section>
    <section class="sensations-bread desktop-only">
        <div class="sensations-bread_title">
            <h2 class="sensations-bread_title_h">ПРЕВОСХОДНАЯ ВЫПЕЧКА</h2>
            <div class="sensations-bread_title_btn">
                <button>АССОРТИМЕНТ ПЕКАРНИ</button>
            </div>
        </div>
        <div class="sensations-bread_table">
            <a href="">
                <img
                        class="sensations-bread_table_1 img-bread"
                        src="assets/images/breads/bread1.jpg"
                        alt="вкуснейший хлеб"
                />
            </a>
            <a href=""
            ><img
                        class="sensations-bread_table_2 img-bread"
                        src="assets/images/breads/bread2.jpg"
                        alt="вкуснейший хлеб"
                /></a>
            <a href=""
            ><img
                        class="sensations-bread_table_3 img-bread"
                        src="assets/images/breads/bread3.jpg"
                        alt="вкуснейший хлеб"
                /></a>
            <a href=""
            ><img
                        class="sensations-bread_table_4 img-bread"
                        src="assets/images/breads/bread4.jpg"
                        alt="вкуснейший хлеб"
                /></a>
            <a href=""
            ><img
                        class="sensations-bread_table_5 img-bread"
                        src="assets/images/breads/bread15.jpg"
                        alt="вкуснейший хлеб"
                /></a>
            <a href=""
            ><img
                        class="sensations-bread_table_6 img-bread"
                        src="assets/images/breads/bread6.jpg"
                        alt="вкуснейший хлеб"
                /></a>
            <a href=""
            ><img
                        class="sensations-bread_table_7 img-bread"
                        src="assets/images/breads/bread7.jpg"
                        alt="вкуснейший хлеб"
                /></a>
            <a href=""
            ><img
                        class="sensations-bread_table_8 img-bread"
                        src="assets/images/breads/bread8.jpg"
                        alt="вкуснейший хлеб"
                /></a>
            <a href=""
            ><img
                        class="sensations-bread_table_9 img-bread"
                        src="assets/images/breads/bread9.jpg"
                        alt="вкуснейший хлеб"
                /></a>
        </div>
        <div class="sensations-bread_history">
            <div class="sensations-bread_history_left">
                <div class="sensations-bread_content-title">
                    <h5>
                        Тёплый аромат Sauerteig и «Шварцброт» дарит радость и детские
                        воспоминания.
                    </h5>
                </div>
                <div class="sensations-bread_content-text">
                    <p>
                        Те, кто попробовал ржаной на 100-летней закваске, хрустящие
                        «Бретцели» или утренние «Бретхен» в «Открытом цехе», становятся
                        нашими преданными поклонниками. За стеклом вы видите магию
                        замеса и печей — индивидуальность нашей выпечки запоминается
                        надолго. Хрустящая корочка, шёлковистый мякиш и новые грани
                        вкуса от длительной ферментации заставляют возвращаться снова и
                        снова.
                    </p>
                </div>
                <button>АССОРТИМЕНТ ПЕКАРНИ</button>
            </div>
            <img
                    src="assets/images/men_and_bulochki.png"
                    alt="Пекарь готовит булочки"
            />
        </div>
    </section>

    <section class="sensations-bread mobile-only">
        <div class="sensations-bread-photo">
            <ul class="scroll-list-bread2">
                <li>
                    <a class="scroll-list-bread__link" href="">
                        <img
                                class="image-product2"
                                src="assets/images/breads/bread1.jpg"
                                alt=""
                        />
                    </a>
                </li>
                <li>
                    <a class="scroll-list-bread__link" href="">
                        <img
                                class="image-product2"
                                src="assets/images/breads/bread2.jpg"
                                alt=""
                        />
                    </a>
                </li>
                <li>
                    <a class="scroll-list-bread__link" href="">
                        <img
                                class="image-product2"
                                src="assets/images/breads/bread3.jpg"
                                alt=""
                        />
                    </a>
                </li>
                <li>
                    <a class="scroll-list-bread__link" href="">
                        <img
                                class="image-product2"
                                src="assets/images/breads/bread4.jpg"
                                alt=""
                        />
                    </a>
                </li>
            </ul>
        </div>

        <div class="sensations-bread_content">
            <div class="sensations-bread_content-title">
                Тёплый аромат Sauerteig и «Шварцброт» дарит радость и детские
                воспоминания.
            </div>
            <div class="sensations-bread_content-text">
                Те, кто попробовал ржаной на 100-летней закваске, хрустящие
                «Бретцели» или утренние «Бретхен» в «Открытом цехе», становятся
                нашими преданными поклонниками. За стеклом вы видите магию замеса и
                печей — индивидуальность нашей выпечки запоминается надолго.
                Хрустящая корочка, шёлковистый мякиш и новые грани вкуса от
                длительной ферментации заставляют возвращаться снова и снова.
            </div>
            <button class="button">АССОРТИМЕНТ ПЕКАРНИ</button>
        </div>
    </section>

    <div class="cooking-methods_row">
        <section class="cooking-methods">
            <div class="cooking-methods_line">
                <img
                        class="cooking-methods_line_img"
                        src="assets/images/методы%20готовки/method_1.png"
                        alt=""
                />
                <img
                        class="cooking-methods_line_img"
                        src="assets/images/методы%20готовки/method_2.png"
                        alt=""
                />
            </div>
            <h3 class="PlayfairDisplay-h">МЕТОДЫ ГОТОВКИ</h3>
            <div class="cooking-methods_line">
                <img
                        class="cooking-methods_line_img"
                        src="assets/images/методы%20готовки/method_4.png"
                        alt=""
                />
                <img
                        class="cooking-methods_line_img"
                        src="assets/images/методы%20готовки/method_5.png"
                        alt=""
                />
            </div>
        </section>
        <img
                class="cooking-methods_img desktop-only"
                src="assets/images/методы%20готовки/method_6.png"
                alt="лепка теста руками"
        />
    </div>

    <section class="appeal">
        <div class="appeal_img">
            <img src="assets/images/men_and_nomen.png" alt="" />
        </div>

        <div class="appeal-content">
            <div class="appeal-content-title">
                <h4 class="appeal-content-title-h4">
                    В нашей хлебопекарне вы можете приобрести вкуснейшую немецкую
                    выпечку
                </h4>
            </div>
            <div class="appeal-content-text">
                <p>
                    Почему «Открытый цех» — больше, чем хлеб? Мы совершенствуемся
                    ежедневно, предлагая разнообразие, пользу и удовольствие как образ
                    жизни. Здесь — аутентичные Sauerteig на 100-летней закваске,
                    «Шварцброт» с семечками, хрустящие «Бретцели» и «Бретхен». Плюс
                    классические слойки, кондитерка и продукты лавки, идеально
                    дополняющие наши хлеба. Поддерживаем партнёров: консультации,
                    подбор меню, кейтеринг для праздников и фуршетов. Под праздники —
                    премиум-подарки из нашей продукции.
                </p>
            </div>
        </div>
    </section>
    <section class="location">
        <div class="location-title">
            <h3 class="location-title-h">НАШ ХЛЕБ В ГОРОДАХ СТРАНЫ</h3>
        </div>
        <div class="arms">
            <img
                    class="first-arms"
                    src="assets/images/гербы_городов/arm1.png"
                    alt=""
            />
            <img
                    class="first-arms"
                    src="assets/images/гербы_городов/arm2.png"
                    alt=""
            />
            <img
                    class="first-arms"
                    src="assets/images/гербы_городов/arm3.png"
                    alt=""
            />
            <img
                    class="first-arms"
                    src="assets/images/гербы_городов/arm4.png"
                    alt=""
            />
        </div>
    </section>
    <section class="answers-to-questions">
        <div class="answers-to-questions_content">
            <div class="answers-to-questions_content-title">
                <h3>Ответы на вопросы</h3>
            </div>
            <div class="answers-to-questions_content-accordion">
                <details class="accordion__item accordion__item_first">
                    <summary class="accordion__title"><p>Как добраться</p></summary>
                    <div class="accordion__content">
                        <p>
                            Москва - ул. Арбат, д. 15
                            <br />
                            Санкт-Петербург - Невский проспект, д. 34
                            <br />
                            Новосибирск - ул. Фрунзе, д. 88
                            <br />
                            Якутск - ул. Чернышевского, д. 21
                        </p>
                    </div>
                </details>

                <details class="accordion__item accordion__item_second">
                    <summary class="accordion__title"><p>Есть гарантия?</p></summary>
                    <div class="accordion__content">
                        <p>
                            Конечно! <br />
                            Гарантируем свежесть всей выпечки — хлеб печется каждые 4
                            часа, а если продукт не понравится, вернем деньги без вопросов
                        </p>
                    </div>
                </details>

                <details class="accordion__item accordion__item_first">
                    <summary class="accordion__title">
                        <p>Чем обуславливаеться стоимость?</p>
                    </summary>
                    <div class="accordion__content">
                        <p>
                            Цена складывается из натуральных ингредиентов (немецкая мука,
                            живая 100-летняя закваска) и длительной ферментации теста до
                            24 часов, что требует времени и мастерства.
                        </p>
                    </div>
                </details>

                <details class="accordion__item accordion__item_second">
                    <summary class="accordion__title"><p>Есть доставка?</p></summary>
                    <div class="accordion__content">
                        <p>
                            Да, доставляем по городу в течение 2 часов при заказе от 1500
                            ₽. Также возможен самовывоз из пекарни со скидкой 5%.
                        </p>
                    </div>
                </details>

                <details class="accordion__item accordion__item_first">
                    <summary class="accordion__title">
                        <p>Где оставить отзыв</p>
                    </summary>
                    <div class="accordion__content">
                        <p>
                            Можете оставить отзыв в наших социальных сетях или напрямую на
                            нашем сайте
                        </p>
                    </div>
                </details>
            </div>
        </div>
        <div style="position: relative; overflow: hidden">
            <a
                    href="https://yandex.ru/maps/235/magnitogorsk/?utm_medium=mapframe&utm_source=maps"
                    style="color: #eee; font-size: 12px; position: absolute; top: 0px"
            >Магнитогорск</a
            ><a
                    href="https://yandex.ru/maps/235/magnitogorsk/?ll=58.950053%2C53.412838&mode=search&sctx=ZAAAAAgBEAAaKAoSCfd2S3LAeE1AER7AIr9%2BtEpAEhIJIy9rYoGvsD8RSphp%2B1dWmj8iBgABAgMEBSgKOABAnKANSAFqAnJ1nQHNzMw9oAEAqAEAvQGCOO62wgEG3sCz3qkFggIQ0LrQu9Cw0LTQsdC40YnQtYoCCTE4NDEwODM1N5ICAJoCDGRlc2t0b3AtbWFwcw%3D%3D&sll=58.950053%2C53.412838&sspn=0.049396%2C0.019491&text=%D0%BA%D0%BB%D0%B0%D0%B4%D0%B1%D0%B8%D1%89%D0%B5&utm_medium=mapframe&utm_source=maps&whatshere%5Bpoint%5D=58.942120%2C53.414409&whatshere%5Bzoom%5D=15.82&z=14.82"
                    style="color: #eee; font-size: 12px; position: absolute; top: 14px"
            >Правобережный район — Яндекс Карты</a
            ><iframe
                    src="https://yandex.ru/map-widget/v1/?ll=58.950053%2C53.412838&mode=search&sctx=ZAAAAAgBEAAaKAoSCfd2S3LAeE1AER7AIr9%2BtEpAEhIJIy9rYoGvsD8RSphp%2B1dWmj8iBgABAgMEBSgKOABAnKANSAFqAnJ1nQHNzMw9oAEAqAEAvQGCOO62wgEG3sCz3qkFggIQ0LrQu9Cw0LTQsdC40YnQtYoCCTE4NDEwODM1N5ICAJoCDGRlc2t0b3AtbWFwcw%3D%3D&sll=58.950053%2C53.412838&sspn=0.049396%2C0.019491&text=%D0%BA%D0%BB%D0%B0%D0%B4%D0%B1%D0%B8%D1%89%D0%B5&whatshere%5Bpoint%5D=58.942120%2C53.414409&whatshere%5Bzoom%5D=15.82&z=14.82"
                    width="800"
                    height="800"
                    frameborder="1"
                    allowfullscreen="true"
                    style="position: relative"
            ></iframe>
        </div>
    </section>
</main>
<footer>
    <div class="desktop-only">
        <div class="footer-row">
            <div class="logo">
                <img
                        class="logotype"
                        src="assets/images/logo.png"
                        alt="логотип"
                />
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
                                src="assets/images/социальные%20сети/free-icon-telegram-4701496%201.png"
                                alt="Телеграмм"
                        />
                    </div>
                    <div class="social--media_square">
                        <img
                                src="assets/images/социальные%20сети/free-icon-youtube-1384028%201.png"
                                alt="Ютуб"
                        />
                    </div>
                </div>
                <div class="social_media_second-line">
                    <div class="social--media_square">
                        <img
                                src="assets/images/социальные%20сети/free-icon-yandex-152840%201.png"
                                alt="Яндекс"
                        />
                    </div>

                    <div class="social--media_square">
                        <img
                                src="assets/images/социальные%20сети/free-icon-vk-2111765%201.png"
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
                        src="assets/images/социальные%20сети/free-icon-telegram-4701496%201.png"
                        alt="телеграмм"
                />
            </div>
            <div class="social-media_element social-media_element-second">
                <img
                        class=""
                        src="assets/images/социальные%20сети/free-icon-vk-2111765%201.png"
                        alt="Вконтакте"
                />
            </div>
            <div class="social-media_element social-media_element-first">
                <img
                        class=""
                        src="assets/images/социальные%20сети/free-icon-youtube-1384028%201.png"
                        alt="Ютуб"
                />
            </div>
            <div class="social-media_element social-media_element-second">
                <img
                        class=""
                        src="assets/images/социальные%20сети/free-icon-yandex-152840%201.png"
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