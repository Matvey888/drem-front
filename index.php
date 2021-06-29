<?php include'./local/header.php'?>
<main class="main">
   <div id="main-baner">
      <div class="main-baner" style="background-image: url('../assets/img/home/main-baner.png');">
         <div class="container">
            <div class="main-baner__wrap">
               <div class="main-baner__left">
                  <h2 class="main-baner__title">Современные и стильные интерьерные кровати</h2>
                  <div class="main-baner__text">Доступная цена - от 10 100 руб., высокое качество, современный дизайн
                  </div>
                  <a href="#" class="main-baner__button">Подробнее</a>
               </div>
               <div class="main-baner__right">
                  <div class="main-baner__sale">
                     <span class="main-baner__sale-top">Скидки до</span>
                     <span class="main-baner__sale-center">25%</span>
                     <span class="main-baner__sale-bottom">успей купить</span>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="main-baner" style="background-image: url('../assets/img/home/main-baner.png');">
         <div class="container">
            <div class="main-baner__wrap">
               <div class="main-baner__left">
                  <h2 class="main-baner__title">Lorem dolore ut maiores liber dolor sit</h2>
                  <div class="main-baner__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum dolore
                     ut maiores libero sequi.</div>
                  <a href="#" class="main-baner__button">Подробнее</a>
               </div>
               <div class="main-baner__right">
                  <div class="main-baner__sale">
                     <span class="main-baner__sale-top">Скидки до</span>
                     <span class="main-baner__sale-center">45%</span>
                     <span class="main-baner__sale-bottom">успей купить</span>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="main-baner" style="background-image: url('../assets/img/home/main-baner.png');">
         <div class="container">
            <div class="main-baner__wrap">
               <div class="main-baner__left">
                  <h2 class="main-baner__title">Заловок</h2>
                  <div class="main-baner__text">Описание текст</div>
                  <a href="#" class="main-baner__button">Подробнее</a>
               </div>
               <div class="main-baner__right">
                  <div class="main-baner__sale">
                     <span class="main-baner__sale-top">Скидки до</span>
                     <span class="main-baner__sale-center">85%</span>
                     <span class="main-baner__sale-bottom">успей купить</span>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="main-baner" style="background-image: url('../assets/img/home/main-baner.png');">
         <div class="container">
            <div class="main-baner__wrap">
               <div class="main-baner__left">
                  <h2 class="main-baner__title">Заловок 2</h2>
                  <div class="main-baner__text">Описание текст 2</div>
                  <a href="#" class="main-baner__button">Подробнее</a>
               </div>
               <div class="main-baner__right">
                  <div class="main-baner__sale">
                     <span class="main-baner__sale-top">Скидки до</span>
                     <span class="main-baner__sale-center">85%</span>
                     <span class="main-baner__sale-bottom">успей купить</span>
                  </div>
               </div>
            </div>
         </div>
      </div>

   </div>

   <div class="filter">
      <div class="container">
         <div class="filter__wrap">
            <div class="filter__left">
               <form action="/" metod="POST" class="filter__form">
                  <div class="filter__form-title">Подбор матраса</div>
                  <div class="filter__form-row">
                     <legend class="filter__form-subtitle">Размер матраса</legend>
                     <select class="filter__form-select" name="matras_size">
                        <option class="filter__form-option" value="080x186">080x186</option>
                        <option class="filter__form-option" value="090x186">090x186</option>
                        <option class="filter__form-option" value="120x186">120x186</option>
                        <option class="filter__form-option" value="140x186">140x186</option>
                        <option class="filter__form-option" value="160x186">160x186</option>
                        <option class="filter__form-option" value="180x186">180x186</option>
                     </select>
                  </div>
                  <div class="filter__form-row">
                     <legend class="filter__form-subtitle">Блок</legend>
                     <select class="filter__form-select" name="matras_block">
                        <option class="filter__form-option" value="Независема">Независимый</option>
                        <option class="filter__form-option" value="Зависимый">Зависимый</option>
                        <option class="filter__form-option" value="Беспружинный">Беспружинный</option>
                     </select>

                  </div>
                  <div class="filter__form-row">
                     <legend class="filter__form-subtitle">Жесткость</legend>
                     <select class="filter__form-select" name="matras_josc">
                        <option class="filter__form-option" value="Высокая">Высокая</option>
                        <option class="filter__form-option" value="Средняя">Средняя</option>
                        <option class="filter__form-option" value="Низкая">Низкая</option>
                        <option class="filter__form-option" value="Разная для пар">Разная для пар</option>
                     </select>
                  </div>
                  <div class="filter__form-row">
                     <legend class="filter__form-subtitle">Наполнитель</legend>
                        <select class="filter__form-select" name="matras_filler">
                           <option class="filter__form-option" value="Кокос/бикокос">Кокос/бикокос</option>
                           <option class="filter__form-option" value="ППУ/ormafoam">ППУ/ormafoam</option>
                           <option class="filter__form-option" value="Натуральный латекс">Натуральный латекс</option>
                           <option class="filter__form-option" value="С эффектом памяти">С эффектом памяти</option>
                           <option class="filter__form-option" value="Струттофайбер">Струттофайбер</option>
                           <option class="filter__form-option" value="Холлофайбер">Холлофайбер</option>
                        </select>
                  </div>
                  <input class="filter__form-button" type="submit" value="Подобрать">
               </form>

               <div class="drop-menu__couter">
                  <div class="drop-menu__couter-top">
                     <div class="drop-menu__couter-title">Распродажа!</div>
                     <div class="drop-menu__couter-wrap">
                        <span class="drop-menu__couter-text">Скидки до</span>
                        <span class="drop-menu__couter-sale">60%</span>
                     </div>
                  </div>
                  <div class="drop-menu__couter-bottom">
                     <a href="#" class="drop-menu__couter-button">Подробнее</a>
                     <div class="drop-menu__couter-row" id="counter-main">
                        <div class="drop-menu__couter-item">
                           <span class="drop-menu__couter-num days">12</span>
                           <span class="drop-menu__couter-desc">дней</span>
                        </div>

                        <div class="drop-menu__couter-item">
                           <span class="drop-menu__couter-num hours">8</span>
                           <span class="drop-menu__couter-desc">часов</span>
                        </div>

                        <div class="drop-menu__couter-item">
                           <span class="drop-menu__couter-num minutes">45</span>
                           <span class="drop-menu__couter-desc">минут</span>
                        </div>

                        <div class="drop-menu__couter-item">
                           <span class="drop-menu__couter-num seconds">32</span>
                           <span class="drop-menu__couter-desc">секунд</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="filter__right">
               <div class="filter__title">Добро пожаловать в магазин “Дрёма”</div>
               <div class="filter__desc">Мы занимаемся продажей товаров для сна уже более 5-и лет! В ассортименте нашего
                  магазина Вы найдете матрасы, кровати, мебель для спальни таких брендов, как Аскона, Орматек и др. Наша
                  миссия - улучшение качества жизни за счет улучшения качества сна. Ведь счастливое, полное заряда
                  бодрости утро - секрет успешных людей!</div>

               <div class="filter__type">
                  <a href="#" class="filter__type-item">
                     <img class="filter__type-img" src="./assets/img/sprite.svg#matras" alt="">
                     <span class="filter__type-text">Матрасы</span>
                  </a>
                  <a href="#" class="filter__type-item">
                     <img class="filter__type-img" src="./assets/img/sprite.svg#bed" alt="">
                     <span class="filter__type-text">Кровати</span>
                  </a>
                  <a href="#" class="filter__type-item">
                     <img class="filter__type-img" src="./assets/img/sprite.svg#krovat" alt="">
                     <span class="filter__type-text">Основания</span>
                  </a>
                  <a href="#" class="filter__type-item">
                     <img class="filter__type-img" src="./assets/img/sprite.svg#pillow" alt="">
                     <span class="filter__type-text">Подушки</span>
                  </a>
                  <a href="#" class="filter__type-item">
                     <img class="filter__type-img" src="./assets/img/sprite.svg#namat" alt="">
                     <span class="filter__type-text">Наматрасники</span>
                  </a>
               </div>

               <div class="filter__popular">
                  <div class="filter__popular-top">
                     <div class="filter__popular-title">
                        <span class="filter__popular-text"><img src="./assets/img/home/mtras-litle.svg"
                              alt="Матрасы по размерам">Матрасы по размерам</span>
                        <a href="" class="filter__popular-link">Нестандартный размер?</a>
                     </div>
                     <div class="filter__popular-row">
                        <div class="filter__popular-colum">
                           <div class="filter__popular-subtitle">080x</div>
                           <ul class="filter__popular-list">
                              <li class="filter__popular-item"><a href="#">080x186</a></li>
                              <li class="filter__popular-item"><a href="#">080x190</a></li>
                              <li class="filter__popular-item"><a href="#">080x195</a></li>
                              <li class="filter__popular-item"><a href="#">080x200</a></li>
                           </ul>
                        </div>
                        <div class="filter__popular-colum">
                           <div class="filter__popular-subtitle">090x</div>
                           <ul class="filter__popular-list">
                              <li class="filter__popular-item"><a href="#">080x186</a></li>
                              <li class="filter__popular-item"><a href="#">080x190</a></li>
                              <li class="filter__popular-item"><a href="#">080x195</a></li>
                              <li class="filter__popular-item"><a href="#">080x200</a></li>
                           </ul>
                        </div>
                        <div class="filter__popular-colum">
                           <div class="filter__popular-subtitle">120x</div>
                           <ul class="filter__popular-list">
                              <li class="filter__popular-item"><a href="#">080x186</a></li>
                              <li class="filter__popular-item"><a href="#">080x190</a></li>
                              <li class="filter__popular-item"><a href="#">080x195</a></li>
                              <li class="filter__popular-item"><a href="#">080x200</a></li>
                           </ul>
                        </div>
                        <div class="filter__popular-colum">
                           <div class="filter__popular-subtitle">140x</div>
                           <ul class="filter__popular-list">
                              <li class="filter__popular-item"><a href="#">080x186</a></li>
                              <li class="filter__popular-item"><a href="#">080x190</a></li>
                              <li class="filter__popular-item"><a href="#">080x195</a></li>
                              <li class="filter__popular-item"><a href="#">080x200</a></li>
                           </ul>
                        </div>
                        <div class="filter__popular-colum">
                           <div class="filter__popular-subtitle">160x</div>
                           <ul class="filter__popular-list">
                              <li class="filter__popular-item"><a href="#">080x186</a></li>
                              <li class="filter__popular-item"><a href="#">080x190</a></li>
                              <li class="filter__popular-item"><a href="#">080x195</a></li>
                              <li class="filter__popular-item"><a href="#">080x200</a></li>
                           </ul>
                        </div>
                        <div class="filter__popular-colum">
                           <div class="filter__popular-subtitle">180x</div>
                           <ul class="filter__popular-list">
                              <li class="filter__popular-item"><a href="#">080x186</a></li>
                              <li class="filter__popular-item"><a href="#">080x190</a></li>
                              <li class="filter__popular-item"><a href="#">080x195</a></li>
                              <li class="filter__popular-item"><a href="#">080x200</a></li>
                           </ul>
                        </div>



                     </div>

                  </div>
                  <div class="filter__popular-bottom">
                     <div class="filter__popular-title filter__popular--mb">
                        <span class="filter__popular-text"><img src="./assets/img/home/star.svg"
                              alt="Популярные">Популярные</span>
                     </div>
                     <div class="filter__popular-row">
                        <ul>
                           <li class="filter__popular-items">
                              <img src="./assets/img/home/popul1.svg" alt="">
                              <a href="#">Матрасы недорого <span class="filter__popular-arrow"></span></a>
                           </li>
                           <li class="filter__popular-items">
                              <img src="./assets/img/home/popul2.svg" alt="">
                              <a href="#">Пружинные матрасы <span class="filter__popular-arrow"></span></a>
                           </li>
                           <li class="filter__popular-items">
                              <img src="./assets/img/home/popul3.svg" alt="">
                              <a href="#">Матрасы на кокосовом волокне <span class="filter__popular-arrow"></span></a>
                           </li>
                        </ul>
                        <ul>
                           <li class="filter__popular-items">
                              <img src="./assets/img/home/popul4.svg" alt="">
                              <a href="#">Матрасы на независимом блоке <span class="filter__popular-arrow"></span></a>
                           </li>
                           <li class="filter__popular-items">
                              <img src="./assets/img/home/popul5.svg" alt="">
                              <a href="#">Детские матрасы <span class="filter__popular-arrow"></span></a>
                           </li>
                           <li class="filter__popular-items">
                              <img src="./assets/img/home/popul6.svg" alt="">
                              <a href="#">Матрасы в рулоне <span class="filter__popular-arrow"></span></a>
                           </li>
                        </ul>
                        <ul>
                           <li class="filter__popular-items">
                              <img src="./assets/img/home/popul7.svg" alt="">
                              <a href="#">Матрасы на латексе <span class="filter__popular-arrow"></span></a>
                           </li>
                           <li class="filter__popular-items">
                              <img src="./assets/img/home/popul8.svg" alt="">
                              <a href="#">Для людей в возрасте <span class="filter__popular-arrow"></span></a>
                           </li>
                           <li class="filter__popular-items">
                              <img src="./assets/img/home/popul9.svg" alt="">
                              <a class="pink" href="#">Распродажа, скидки</a>
                           </li>
                        </ul>
                     </div>


                  </div>
               </div>

            </div>
         </div>
      </div>
   </div>

   <div class="popul-products">
      <div class="container">
         <div class="popul-products__wrap">
            <div class="popul-products__title">Популярные товары</div>
            <div class="popul-products__row">
               <?php for ($i=0; $i < 2; $i++): ?>
               <a href="#" class="popul-products__items">
                  <div class="popul-products__items-top">
                     <img class="popul-products__items-img" src="./assets/img/home/items1.jpg" alt="">
                     <span class="popul-products__items-sale">10%</span>
                     <span class="popul-products__items-scale"></span>
                     <span class="popul-products__items-like"></span>
                     <span class="popul-products__items-libra"></span>
                  </div>
                  <div class="popul-products__items-bottom">
                     <div class="popul-products__items-name">МАТРАС DREAMLINE CLASSIC ROLL SLIM</div>
                     <div class="popul-products__items-price">
                        <div class="popul-products__items-new">6 740 р.</div>
                        <div class="popul-products__items-old">5 230 р.</div>
                     </div>
                  </div>
               </a>
               <a href="#" class="popul-products__items">
                  <div class="popul-products__items-top">
                     <img class="popul-products__items-img" src="./assets/img/home/items2.jpg" alt="">
                     <!-- <span class="popul-products__items-sale"></span> -->
                     <span class="popul-products__items-scale"></span>
                     <span class="popul-products__items-like"></span>
                     <span class="popul-products__items-libra"></span>
                  </div>
                  <div class="popul-products__items-bottom">
                     <div class="popul-products__items-name">МАТРАС DREAMLINE CLASSIC +15 BS</div>
                     <div class="popul-products__items-price">
                        <div class="popul-products__items-new">4 892 р.</div>
                        <div class="popul-products__items-old"></div>
                     </div>
                  </div>
               </a>
               <a href="#" class="popul-products__items">
                  <div class="popul-products__items-top">
                     <img class="popul-products__items-img" src="./assets/img/home/items3.jpg" alt="">
                     <span class="popul-products__items-sale">10%</span>
                     <span class="popul-products__items-scale"></span>
                     <span class="popul-products__items-like"></span>
                     <span class="popul-products__items-libra"></span>
                  </div>
                  <div class="popul-products__items-bottom">
                     <div class="popul-products__items-name">МАТРАС PROMTEX-ORIENT ERGOROLL 10</div>
                     <div class="popul-products__items-price">
                        <div class="popul-products__items-new">6 740 р.</div>
                        <div class="popul-products__items-old">5 230 р.</div>
                     </div>
                  </div>
               </a>
               <a href="#" class="popul-products__items">
                  <div class="popul-products__items-top">
                     <img class="popul-products__items-img" src="./assets/img/home/items4.jpg" alt="">
                     <span class="popul-products__items-sale">10%</span>
                     <span class="popul-products__items-scale"></span>
                     <span class="popul-products__items-like"></span>
                     <span class="popul-products__items-libra"></span>
                  </div>
                  <div class="popul-products__items-bottom">
                     <div class="popul-products__items-name">МАТРАС EVEREST РЕСТФОМ МАССАЖ</div>
                     <div class="popul-products__items-price">
                        <div class="popul-products__items-new">4 373 р.</div>
                        <div class="popul-products__items-old">3 456 р.</div>
                     </div>
                  </div>
               </a>

               <a href="#" class="popul-products__items">
                  <div class="popul-products__items-top">
                     <img class="popul-products__items-img" src="./assets/img/home/items5.jpg" alt="">
                     <span class="popul-products__items-sale">10%</span>
                     <span class="popul-products__items-scale"></span>
                     <span class="popul-products__items-like"></span>
                     <span class="popul-products__items-libra"></span>
                  </div>
                  <div class="popul-products__items-bottom">
                     <div class="popul-products__items-name">МАТРАС DREAMLINE CLASSIC +10 BS</div>
                     <div class="popul-products__items-price">
                        <div class="popul-products__items-new">6 740 р.</div>
                        <div class="popul-products__items-old">5 230 р.</div>
                     </div>
                  </div>
               </a>
               <a href="#" class="popul-products__items">
                  <div class="popul-products__items-top">
                     <img class="popul-products__items-img" src="./assets/img/home/items6.jpg" alt="">
                     <span class="popul-products__items-sale">10%</span>
                     <span class="popul-products__items-scale"></span>
                     <span class="popul-products__items-like"></span>
                     <span class="popul-products__items-libra"></span>
                  </div>
                  <div class="popul-products__items-bottom">
                     <div class="popul-products__items-name">МАТРАС DREAMLINE DREAMROLL ECO</div>
                     <div class="popul-products__items-price">
                        <div class="popul-products__items-new">6 740 р.</div>
                        <div class="popul-products__items-old">5 230 р.</div>
                     </div>
                  </div>
               </a>
               <a href="#" class="popul-products__items">
                  <div class="popul-products__items-top">
                     <img class="popul-products__items-img" src="./assets/img/home/items7.jpg" alt="">
                     <!-- <span class="popul-products__items-sale">10%</span> -->
                     <span class="popul-products__items-scale"></span>
                     <span class="popul-products__items-like"></span>
                     <span class="popul-products__items-libra"></span>
                  </div>
                  <div class="popul-products__items-bottom">
                     <div class="popul-products__items-name">МАТРАС DREAMLINE CLASSIC ROLL SLIM</div>
                     <div class="popul-products__items-price">
                        <div class="popul-products__items-new">4 892 р.</div>
                        <div class="popul-products__items-old"></div>
                     </div>
                  </div>
               </a>
               <a href="#" class="popul-products__items">
                  <div class="popul-products__items-top">
                     <img class="popul-products__items-img" src="./assets/img/home/items8.jpg" alt="">
                     <!-- <span class="popul-products__items-sale">10%</span> -->
                     <span class="popul-products__items-scale"></span>
                     <span class="popul-products__items-like"></span>
                     <span class="popul-products__items-libra"></span>
                  </div>
                  <div class="popul-products__items-bottom">
                     <div class="popul-products__items-name">МАТРАС DREAMLINE CLASSIC +15 BS</div>
                     <div class="popul-products__items-price">
                        <div class="popul-products__items-new">4 373 р.</div>
                        <div class="popul-products__items-old"></div>
                     </div>
                  </div>
               </a>
               <? endfor; ?>
            </div>
            <div class="popul-products__button-wrap">
               <a href="#" class="popul-products__button">Смотреть все популярные матрасы</a>
            </div>

         </div>
      </div>
   </div>

   <div class="main-advantages">
      <div class="container">
         <div class="main-advantages__wrap">

            <a href="#" class="main-advantages__items">
               <img class="main-advantages__img" src="./assets/img/home/advantages1.svg" alt="advantages">
               <div class="main-advantages__title">Быстрая доставка</div>
               <div class="main-advantages__desc">Мы осуществляем доставку на дом напярмую с фабрики производителя</div>
               <div class="main-advantages__button">Подробнее</div>
            </a>
            <a href="#" class="main-advantages__items">
               <img class="main-advantages__img" src="./assets/img/home/advantages2.svg" alt="advantages">
               <div class="main-advantages__title">Рассрочка 0-0-24</div>
               <div class="main-advantages__desc">Оформите рассрочку или кредит в банк ЗАО "Русский Стандарт</div>
               <div class="main-advantages__button">Подробнее</div>
            </a>
            <a href="#" class="main-advantages__items">
               <img class="main-advantages__img" src="./assets/img/home/advantages3.svg" alt="advantages">
               <div class="main-advantages__title">Оплата при получени</div>
               <div class="main-advantages__desc">Вы можете оплатить заказ удобным для Вас способом при получении товара
               </div>
               <div class="main-advantages__button">Подробнее</div>

            </a>
            <a href="#" class="main-advantages__items">
               <img class="main-advantages__img" src="./assets/img/home/advantages4.svg" alt="advantages">
               <div class="main-advantages__title">Самая низкая цена</div>
               <div class="main-advantages__desc">Матрасы и кровати в Нижнем Новгороде по лучшим ценам в стране!</div>
               <div class="main-advantages__button">Подробнее</div>
            </a>
         </div>
      </div>
   </div>

   <div class="big-banner">
      <div class="container">
         <div class="big-banner__slider" id="main-baner__big">
            <?php for ($i=0; $i < 4; $i++): ?>
            <div class="big-banner__items" style="background-image: url('../assets/img/home/big-baner1.png');">
               <div class="big-banner__text blue">Опять не выспался?Пора подобрать новый матрас!</div>
               <div class="big-banner__sale">
                  <span class="big-banner__sale-top">Скидки до</span>
                  <span class="big-banner__sale-center">60%</span>
                  <span class="big-banner__sale-bottom">успей купить</span>
               </div>
               <div class="big-banner__button">Заказать</div>
            </div>
            <div class="big-banner__items" style="background-image: url('../assets/img/home/big-baner2.png');">
               <div class="big-banner__text white">Современные и стильные интерьерные кровати</div>
               <div class="big-banner__sale">
                  <span class="big-banner__sale-top">Скидки до</span>
                  <span class="big-banner__sale-center">60%</span>
                  <span class="big-banner__sale-bottom">успей купить</span>
               </div>
               <div class="big-banner__button">Подробнее</div>
            </div>
            <? endfor; ?>
         </div>
      </div>
   </div>

   <div class="main-reviews">
      <div class="container">
         <h3 class="main-reviews__title title">Отзывы</h3>
         <div class="main-reviews__wrap" id="main-reviews" >
            <?php for ($i=0; $i < 3; $i++): ?>

               <div class="main-reviews__items">
                  <div class="main-reviews__top">
                     <div class="main-reviews__left">
                        <img src="./assets/img/home/reviews1.jpg" alt="reviews">
                     </div>
                     <div class="main-reviews__right">
                        <div class="main-reviews__stars">
                           <div class="main-reviews__stars-item strars"></div>
                           <div class="main-reviews__stars-item strars"></div>
                           <div class="main-reviews__stars-item strars"></div>
                           <div class="main-reviews__stars-item strars"></div>
                           <div class="main-reviews__stars-item strars"></div>
                        </div>
                        <div class="main-reviews__name">Борисов Денис</div>
                        <div class="main-reviews__info">
                           <div class="main-reviews__city">г. Самара</div>
                           <div class="main-reviews__date">15.07.2013</div>
                        </div>


                     </div>

                  </div>
                  <div class="main-reviews__bottom">
                     Выбрал матрас, дешевле был у Дрёмы, заказал, причем в рассрочку на полгода. Перезвонили, уточнили, сориентировали по срокам, оказалось, правда, не быстро, но было не принципиально. Потом перезвонили из банка, пообщались, одобрили рассрочку. Ближе к назначенной дате позвонили из магазина, потом привезли матрас. Все грамотно, современно, удобно. Рекомендую.
                  </div>

               </div>
               <div class="main-reviews__items">
                  <div class="main-reviews__top">
                     <div class="main-reviews__left">
                        <img src="./assets/img/home/reviews2.jpg" alt="reviews">
                     </div>
                     <div class="main-reviews__right">
                        <div class="main-reviews__stars">
                           <div class="main-reviews__stars-item strars"></div>
                           <div class="main-reviews__stars-item strars"></div>
                           <div class="main-reviews__stars-item strars"></div>
                           <div class="main-reviews__stars-item strars"></div>
                           <div class="main-reviews__stars-item strars"></div>
                        </div>
                        <div class="main-reviews__name">Хабибулина Нина</div>
                        <div class="main-reviews__info">
                           <div class="main-reviews__city">г. Самара</div>
                           <div class="main-reviews__date">10.10.2014</div>
                        </div>
                     </div>
                  </div>
                  <div class="main-reviews__bottom">
                     Заказывали матрас в данной фирме, понравился и по качеству, и по деньгам, быстро доставили, большое спасибо всей команде магазина “Дрема”
                  </div>

               </div>
               <div class="main-reviews__items">
                  <div class="main-reviews__top">
                     <div class="main-reviews__left">
                        <img src="./assets/img/home/reviews3.jpg" alt="reviews">
                     </div>
                     <div class="main-reviews__right">
                        <div class="main-reviews__stars">
                           <div class="main-reviews__stars-item strars"></div>
                           <div class="main-reviews__stars-item strars"></div>
                           <div class="main-reviews__stars-item strars"></div>
                           <div class="main-reviews__stars-item strars"></div>
                           <div class="main-reviews__stars-item strars"></div>
                        </div>
                        <div class="main-reviews__name">Стародубов Юрий</div>
                        <div class="main-reviews__info">
                           <div class="main-reviews__city">г. Самара</div>
                           <div class="main-reviews__date">27.01.2016</div>
                        </div>
                     </div>
                  </div>
                  <div class="main-reviews__bottom">
                     Быстро связались по заказу. Проинформировали о наличии товара и скорректировали дату и время доставки. Вежливое общение. Товар доставили вовремя и то, что нужно.
                  </div>
               </div>
            <? endfor; ?>
         </div>
         <div class="main-reviews__row">
            <a href="" class="main-reviews__button">
               <span>Читайте все отзывы о нас на </span>
               <i class="yandex-one"> Я</i>
               <i class="yandex-two">ндекс</i>
               <i class="yandex-tree">Маркете</i>
            </a>
         </div>
      </div>
   </div>

   <div class="main-brand" >
      <div class="container">
         <div class="main-brand__wrap" id="main-brand">
            <div class="main-brand__items">
               <img src="./assets/img/home/brand1.png" alt="Brand">
            </div>
            <div class="main-brand__items">
               <img src="./assets/img/home/brand2.png" alt="Brand">
            </div>
            <div class="main-brand__items">
               <img src="./assets/img/home/brand3.png" alt="Brand">
            </div>
            <div class="main-brand__items">
               <img src="./assets/img/home/brand4.png" alt="Brand">
            </div>
            <div class="main-brand__items">
               <img src="./assets/img/home/brand5.png" alt="Brand">
            </div>
            <div class="main-brand__items">
               <img src="./assets/img/home/brand6.png" alt="Brand">
            </div>
            <div class="main-brand__items">
               <img src="./assets/img/home/brand7.png" alt="Brand">
            </div>
            <div class="main-brand__items">
               <img src="./assets/img/home/brand3.png" alt="Brand3">
            </div>
         </div>
      </div>
   </div>

   <div class="main-articles">
      <div class="container">
         <div class="main-articles__row">
            <h2 class="main-articles__title title">Статьи по выбору матраса</h2>
            <a href="#" class="main-articles__button-top button">Все статьи</a>
         </div>
         <div class="main-articles__wrap" id="main-articles">
            <?for ($i=0; $i < 3 ; $i++):?>
               <a href="#" class="main-articles__items">
                  <div class="main-articles__top">
                     <img src="./assets/img/home/articles1.png" alt="articles">
                  </div>
                  <div class="main-articles__bottom">
                     <div class="main-articles__name">Анатомический матрас: особенности, отличие от ортопедического, как выбрать</div>
                     <div class="main-articles__info">
                        <div class="main-articles__text">Особенности анатомических матрасов. Правила выбора анатомических матрасов. Отличия между анатомическими и ортопедическими матрасами. Советы по выбору.</div>
                        <div href="#" class="main-articles__button button">Подробнее</div>
                     </div>
                  </div>
               </a>
               <a href="#" class="main-articles__items">
                  <div class="main-articles__top">
                     <img src="./assets/img/home/articles2.png" alt="articles">
                  </div>
                  <div class="main-articles__bottom">
                     <div class="main-articles__name">Вводная статья о детских матрасах</div>
                     <div class="main-articles__info">
                        <div class="main-articles__text">Руководство по выбору матраса для ребенка в зависимости от возраста. Матрасы для новорожденных, дошкольников и подростков.</div>
                        <div href="#" class="main-articles__button button">Подробнее</div>
                     </div>
                  </div>
               </a>
               <a href="#" class="main-articles__items">
                  <div class="main-articles__top">
                     <img src="./assets/img/home/articles3.png" alt="articles">
                  </div>
                  <div class="main-articles__bottom">
                     <div class="main-articles__name">Как выбрать матрас?</div>
                     <div class="main-articles__info">
                        <div class="main-articles__text">Какой матрас купить в том или ином случае? Как быть, если вы не знаете, с чего начать. Простое руководство по выбору матраса. Как выбрать жесткость. Обзор материалов.</div>
                        <div href="#" class="main-articles__button button">Подробнее</div>
                     </div>
                  </div>
               </a>
            <?endfor;?>
         </div>
      </div>
   </div>

   <div class="main-choose">
      <div class="container">
         <h3 class="main-choose__title title">Как выбрать матрас?</h3>
         <div class="main-choose__desc">На самом деле все очень просто, нужно всего лишь следовать простым рекомендациям:</div>
         <div class="main-choose__wrap">
            <div class="main-choose__items">
               <img class="main-choose__img" src="./assets/img/home/choose1.svg" alt="Choose">
               <div class="main-choose__name">Определитесь с жесткостью матраса</div>
               <p class="main-choose__text">Стоит сразу сказать, что жесткость и нагрузка на спальное место - независимые характеристики матраса. Так, если Вам нужен матрас для большой массы тела, вовсе не значит, что он должен быть жестким. </p>
               <p class="main-choose__text">Высокая жесткость - для пользы спине и позвоночнику. Мягкий - для расслабления и комфорта. Так же стоит учитывать возраст. </p>
               <p class="main-choose__text">С возрастом лучше выбирать матрас в сторону мягкости и комфорта.</p>
            </div>

            <div class="main-choose__items">
               <img class="main-choose__img" src="./assets/img/home/choose2.svg" alt="Choose">
               <div class="main-choose__name">Пружинный блок</div>
               <p class="main-choose__text">Пружинный блок всегда лучше выбирать независимый. Классический блок - доступные матрасы, больше подходят для дачи или как временный вариант. </p>
               <p class="main-choose__text">Беспружинные матрасы часто используют для детей, а также в качестве дополнительного матраса.</p>
            </div>

            <div class="main-choose__items">
               <img class="main-choose__img" src="./assets/img/home/choose3.svg" alt="Choose">
               <div class="main-choose__name">Наполнители</div>
               <p class="main-choose__text">Кокос — это распределение нагрузки по поверхности и польза для осанки, полезная жесткость.</p>
               <p class="main-choose__text">Мягкие наполнители для комфорта.  </p>
               <p class="main-choose__text">Латекс по сравнению со своими искусственными аналогами более долговечен и комфортен по ощущениям.</p>
               <p class="main-choose__text">Лучшим вариантом всегда является правильное сочетание этих материалов! </p>

            </div>

         </div>
         <div class="main-choose__row">
            <img src="./assets/img/svg/notification.svg" alt="Notification" class="main-choose__notification-img">
            <div class="main-choose__notification-text">
               Если Вы не можете определиться с выбором матраса - доверьте это профессионалам! <a href="#">Свяжитесь с нами</a>, и мы дадим Вам грамотную, профессиональную консультацию!
            </div>
         </div>

      </div>
   </div>

   <div class="main-classif">
      <div class="container">
         <h2 class="main-classif__title title">Классификация матрасов</h2>
         <div class="main-classif__wrap">

            <div class="main-classif__items">
               <div class="main-classif__row">
                  <img class="main-classif__img" src="./assets/img/home/choose3.svg" alt="">
                  <div class="main-classif__name">По наполнителям</div>
               </div>

               <div class="main-classif__accardion active">
                  <div class="main-classif__accardion-top">Кокосовое волокно<span class="main-classif__arrow"></span></div>
                  <div class="main-classif__accardion-bottom ">
                     <div class="main-classif__accardion-wrap">
                        <div class="main-classif__accardion-left"><img src="./assets/img/home/accardion-bottom1.png" alt=""></div>
                        <div class="main-classif__accardion-right"><b>Кокосовая койра</b> - это плита скрепленных и пролатексированных волокон кокосового ореха.</div>
                     </div>
                     <p class="main-classif__accardion-text">Такая плита обладает высокой плотностью (жесткостью) и низким уровнем сминаемости</p>
                     <p class="main-classif__accardion-text">Кокосовая койра равномероно распределяет нагрузку по поверхности матраса, обеспечивая надежную поддержку тела и позвоночника во время сна. Матрасы на кокосе обладают полезными свойствами для осанки, позвоночника и скелета в целом. </p>
                     <a href="#" class="main-classif__accardion-button">Матрасы на кокосовом волокне</a>
                  </div>
               </div>
               <div class="main-classif__accardion">
                  <div class="main-classif__accardion-top">ППУ/ormafoam<span class="main-classif__arrow"></span></div>
                  <div class="main-classif__accardion-bottom">
                     <div class="main-classif__accardion-wrap">
                        <div class="main-classif__accardion-left"><img src="./assets/img/home/accardion-bottom1.png" alt=""></div>
                        <div class="main-classif__accardion-right"><b>Кокосовая койра</b> - это плита скрепленных и пролатексированных волокон кокосового ореха.</div>
                     </div>
                     <p class="main-classif__accardion-text">Такая плита обладает высокой плотностью (жесткостью) и низким уровнем сминаемости</p>
                     <p class="main-classif__accardion-text">Кокосовая койра равномероно распределяет нагрузку по поверхности матраса, обеспечивая надежную поддержку тела и позвоночника во время сна. Матрасы на кокосе обладают полезными свойствами для осанки, позвоночника и скелета в целом. </p>
                     <a href="#" class="main-classif__accardion-button">Матрасы на ППУ/ormafoam</a>
                  </div>
               </div>
               <div class="main-classif__accardion">
                  <div class="main-classif__accardion-top">Натруальный латекс<span class="main-classif__arrow"></span></div>
                  <div class="main-classif__accardion-bottom">
                     <div class="main-classif__accardion-wrap">
                        <div class="main-classif__accardion-left"><img src="./assets/img/home/accardion-bottom1.png" alt=""></div>
                        <div class="main-classif__accardion-right"><b>Кокосовая койра</b> - это плита скрепленных и пролатексированных волокон кокосового ореха.</div>
                     </div>
                     <p class="main-classif__accardion-text">Такая плита обладает высокой плотностью (жесткостью) и низким уровнем сминаемости</p>
                     <p class="main-classif__accardion-text">Кокосовая койра равномероно распределяет нагрузку по поверхности матраса, обеспечивая надежную поддержку тела и позвоночника во время сна. Матрасы на кокосе обладают полезными свойствами для осанки, позвоночника и скелета в целом. </p>
                     <a href="#" class="main-classif__accardion-button">Матрасы на натруальном латексe</a>
                  </div>
               </div>
            </div>

            <div class="main-classif__items">
               <div class="main-classif__row">
                  <img class="main-classif__img" src="./assets/img/home/choose1.svg" alt="">
                  <div class="main-classif__name">По жесткости</div>
               </div>
               <div class="main-classif__accardion">
                  <div class="main-classif__accardion-top">Высокая жесткость<span class="main-classif__arrow active"></span></div>
                  <div class="main-classif__accardion-bottom">
                     <div class="main-classif__accardion-wrap">
                        <div class="main-classif__accardion-left"><img src="./assets/img/home/accardion-bottom2.png" alt=""></div>
                        <div class="main-classif__accardion-right">Матрасы <b>средней жесткости</b> универсальны во всех отношениях.</div>
                     </div>
                     <p class="main-classif__accardion-text">В сочетании с независимым пружинным блоком такой матрас будет полезен для спины, но уровень комфорта при этом совершенно не страдает. </p>
                     <p class="main-classif__accardion-text">Средняя жесткость в основном достигается за счет комбинации жестких и мягких материалов, что позволяет матрасу сохранять все свойства - и пользу для спины и комфорт спального места.  </p>
                  </div>
               </div>
               <div class="main-classif__accardion active">
                  <div class="main-classif__accardion-top">Средняя жесткость<span class="main-classif__arrow"></span></div>
                  <div class="main-classif__accardion-bottom ">
                     <div class="main-classif__accardion-wrap">
                        <div class="main-classif__accardion-left"><img src="./assets/img/home/accardion-bottom2.png" alt=""></div>
                        <div class="main-classif__accardion-right">Матрасы <b>средней жесткости</b> универсальны во всех отношениях.</div>
                     </div>
                     <p class="main-classif__accardion-text">В сочетании с независимым пружинным блоком такой матрас будет полезен для спины, но уровень комфорта при этом совершенно не страдает. </p>
                     <p class="main-classif__accardion-text">Средняя жесткость в основном достигается за счет комбинации жестких и мягких материалов, что позволяет матрасу сохранять все свойства - и пользу для спины и комфорт спального места.  </p>
                  </div>
               </div>
               <div class="main-classif__accardion">
                  <div class="main-classif__accardion-top">Низкая жесткость<span class="main-classif__arrow active"></span></div>
                  <div class="main-classif__accardion-bottom ">
                     <div class="main-classif__accardion-wrap">
                        <div class="main-classif__accardion-left"><img src="./assets/img/home/accardion-bottom2.png" alt=""></div>
                        <div class="main-classif__accardion-right">Матрасы <b>средней жесткости</b> универсальны во всех отношениях.</div>
                     </div>
                     <p class="main-classif__accardion-text">В сочетании с независимым пружинным блоком такой матрас будет полезен для спины, но уровень комфорта при этом совершенно не страдает. </p>
                     <p class="main-classif__accardion-text">Средняя жесткость в основном достигается за счет комбинации жестких и мягких материалов, что позволяет матрасу сохранять все свойства - и пользу для спины и комфорт спального места.  </p>
                  </div>
               </div>
            </div>

            <div class="main-classif__items">
               <div class="main-classif__row">
                  <img class="main-classif__img" src="./assets/img/home/choose2.svg" alt="">
                  <div class="main-classif__name">По пружинному блоку</div>
               </div>
               <div class="main-classif__accardion">
                  <div class="main-classif__accardion-top">Независимые пружины<span class="main-classif__arrow active"></span></div>
                  <div class="main-classif__accardion-bottom">
                     <div class="main-classif__accardion-wrap">
                        <div class="main-classif__accardion-left"><img src="./assets/img/home/accardion-bottom1.png" alt=""></div>
                        <div class="main-classif__accardion-right">Lorem <b>lor sit amet consectetur</b> Perferendis minima adipisci.</div>
                     </div>
                     <p class="main-classif__accardion-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis minima adipisci ducimus</p>
                     <p class="main-classif__accardion-text"> Aliquid impedit cupiditate neque magni totam velit commodi mollitia?</p>
                  </div>
               </div>
               <div class="main-classif__accardion">
                  <div class="main-classif__accardion-top">Пружины Bonnell<span class="main-classif__arrow active"></span></div>
                  <div class="main-classif__accardion-bottom">
                     <div class="main-classif__accardion-wrap">
                        <div class="main-classif__accardion-left"><img src="./assets/img/home/accardion-bottom1.png" alt=""></div>
                        <div class="main-classif__accardion-right">Lorem <b>lor sit amet consectetur</b> Perferendis minima adipisci.</div>
                     </div>
                     <p class="main-classif__accardion-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis minima adipisci ducimus</p>
                     <p class="main-classif__accardion-text"> Aliquid impedit cupiditate neque magni totam velit commodi mollitia?</p>
                  </div>
               </div>
               <div class="main-classif__accardion">
                  <div class="main-classif__accardion-top">Беспружинные матрасы<span class="main-classif__arrow active"></span></div>
                  <div class="main-classif__accardion-bottom">
                     <div class="main-classif__accardion-wrap">
                        <div class="main-classif__accardion-left"><img src="./assets/img/home/accardion-bottom1.png" alt=""></div>
                        <div class="main-classif__accardion-right">Lorem <b>lor sit amet consectetur</b> Perferendis minima adipisci.</div>
                     </div>
                     <p class="main-classif__accardion-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis minima adipisci ducimus</p>
                     <p class="main-classif__accardion-text"> Aliquid impedit cupiditate neque magni totam velit commodi mollitia?</p>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>

   <div class="main-poster">
      <div class="container">
         <div class="main-poster__wrap" id="main-poster">

            <div class="main-poster__items" style="background-image: url('./assets/img/home/poster1.png');">
               <div class="main-poster__top">
                  <div class="main-poster__name">НУЖЕН МАТРАС ДЛЯ УСТАЛОЙ СПИНЫ?</div>
                  <div class="main-poster__text">Проверенные временем технологии на благо Вашего сна!</div>
               </div>
               <a href="" class="main-poster__button">Заказать</a>
               <div class="main-poster__sale">
                  <span class="main-poster__sale-top">Скидки до</span>
                  <span class="main-poster__sale-center">60%</span>
                  <span class="main-poster__sale-botton">успей купить</span>
               </div>
            </div>
            <div class="main-poster__items" style="background-image: url('./assets/img/home/poster2.png');">
               <div class="main-poster__top">
                  <div class="main-poster__name">НУЖЕН МАТРАС ?</div>
                  <div class="main-poster__text">Проверенные временем технологии на благо Вашего сна!</div>
               </div>
               <a href="" class="main-poster__button">Заказать</a>
               <div class="main-poster__sale">
                  <span class="main-poster__sale-top">Скидки до</span>
                  <span class="main-poster__sale-center">20%</span>
                  <span class="main-poster__sale-botton">успей купить</span>
               </div>
            </div>
            <div class="main-poster__items" style="background-image: url('./assets/img/home/poster3.png');">
               <div class="main-poster__top">
                  <div class="main-poster__name">НУЖЕН МАТРАС ДЛЯ УСТАЛОЙ СПИНЫ?</div>
                  <div class="main-poster__text">Проверенные временем технологии на благо Вашего сна!</div>
               </div>
               <a href="" class="main-poster__button">Заказать</a>
               <div class="main-poster__sale">
                  <span class="main-poster__sale-top">Скидки до</span>
                  <span class="main-poster__sale-center">35%</span>
                  <span class="main-poster__sale-botton">успей купить</span>
               </div>
            </div>
            <div class="main-poster__items" style="background-image: url('./assets/img/home/poster2.png');">
               <div class="main-poster__top">
                  <div class="main-poster__name">НУЖЕН МАТРАС ?</div>
                  <div class="main-poster__text">Проверенные временем технологии на благо Вашего сна!</div>
               </div>
               <a href="" class="main-poster__button">Заказать</a>
               <div class="main-poster__sale">
                  <span class="main-poster__sale-top">Скидки до</span>
                  <span class="main-poster__sale-center">45%</span>
                  <span class="main-poster__sale-botton">успей купить</span>
               </div>
            </div>

         </div>
      </div>
   </div>

</main>

<?php include'./local/footer.php'?>
