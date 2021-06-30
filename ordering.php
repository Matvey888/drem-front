<?include'./local/header.php'?>


    <main class="main ordering">
      <div class="container">
        <div class="ordering__wrap">
          <h1 class="ordering__title">Оформление заказа</h1>
          <form action="#" method="post" class="ordering__form">
            <div class="ordering__form-left">
              <div class="ordering__form-your-data your-data">
                <div class="your-data__field">

                  <div class="your-data__top block-top">
                    <span class="your-data__num block-top__num">1</span>
                    <h3 class="yor-data__title block-top__title">Ваши данные</h3>
                    <span class="your-data__btn-toggle block-top__btn-toggle"></span>
                  </div>

                  <div class="your-data__bottom">
                    <div class="your-data__inputs your-data__inputs-left">
                      <input type="text" id="your-data__name" name="your-data__name" class="your-data__name-input" placeholder="Имя">
                      <label for="your-data__name" class="your-data__name-label"></label>
                      <input type="text" id="your-data__email" name="your-data__email" class="your-data__email-input" placeholder="Email">
                      <label for="your-data__email" class="your-data__email-label"></label>
                    </div>

                    <div class="your-data__inputs your-data__inputs-right">
                      <input type="text" id="your-data__last-name" name="your-data__last-name" class="your-data__last-name-input" placeholder="Фамилия">
                      <label for="your-data__last-name" class="your-data__last-name-label"></label>
                      <input type="text" id="your-data__tel" name="your-data__tel" class="your-data__tel-input" placeholder="Телефон">
                      <label for="your-data__tel" class="your-data__tel-label"></label>
                    </div>
                  </div>

                </div>

              </div>

              <div class="ordering__form-your-order your-order">
                <h3 class="your-order__title">Ваш заказ</h3>
                <div class="your-order__product-list">
                  <div class="your-order__product-item">
                    <div class="your-order__product-img">
                      <img src="" alt="">
                    </div>
                    <div class="your-order__product-description">
                      <h4 class="your-order__product-name">МАТРАС ОРМАТЕК ЭКО КЛЕРАН</h4>
                      <div class="your-order__product-params">
                        <p class="your-order__product-params-size">Размер: 140х200м</p>
                        <p class="your-order__product-params-color">Цвет: Бежевый</p>
                        <p class="your-order__product-params-material">Материал: Хлопок</p>
                        <p class="your-order__product-params-height">Высота: 20 см</p>
                      </div>
                    </div>

                    <div class="your-order__product-count">
                      <span class="your-order__product-count-minus">-</span>
                      <span class="your-order__product-count-num">1</span>
                      <span class="your-order__product-count-plus">+</span>
                    </div>
                    <div class="your-order__product-price">
                      <p>6 740 р.</p>
                      <span></span>
                    </div>
                  </div>

                  <div class="your-order__product-item">
                    <div class="your-order__product-img">
                      <img src="" alt="">
                    </div>
                    <div class="your-order__product-description">
                      <h4 class="your-order__product-name">МАТРАС DREAMLINE ECO FOAM BONNEL</h4>
                      <div class="your-order__product-params">
                        <p class="your-order__product-params-size">Размер: 140х200м </p>
                        <p class="your-order__product-params-color">Цвет: Бежевый</p>
                        <p class="your-order__product-params-material">Материал: Хлопок</p>
                        <p class="your-order__product-params-height">Высота: 20 см</p>
                      </div>
                    </div>

                    <div class="your-order__product-count">
                      <span class="your-order__product-count-minus">-</span>
                      <span class="your-order__product-count-num">3</span>
                      <span class="your-order__product-count-plus">+</span>
                    </div>
                    <div class="your-order__product-price">
                      <p>4 373 р.</p>
                      <span>5 230 p.</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="ordering__form-delivery form-delivery">
                <div class="form-delivery__top block-top">
                  <span class="form-delivery__num block-top__num">2</span>
                  <h3 class="form-delivery__title block-top__title">Зона доставки</h3>
                  <span class="form-delivery__btn-toggle block-top__btn-toggle"></span>
                </div>

                <div class="form-delivery__choose">
                  <h4 class="form-delivery__choose-title">
                    Выберите зону доставки
                  </h4>
                  <div class="form-delivery__choose-block choose-block">
                    <div class="choose-block__left">
                      <p class="choose-block__left-txt-top">Самара <span>(отдаленные районы)</span></p>
                      <p>
                      Куйбышевский р-н, Крутые Ключи, п. Зубчаниновка, п. Мехзавод, п. Управленческий, п. Шмидта, Южный Город и т.д.
                      </p>
                    </div>

                    <div class="choose-block__right">
                      <p class="choose-block__price">300 p.</p>
                      <span class="choose-block__btn"></span>
                    </div>
                  </div>
                </div>

                <div class="form-delivery__address address">
                  <h4 class="address__title">
                    Укажите полный адрес
                  </h4>
                  <div class="address__inputs">
                    <div class="address__inputs-left">
                      <input type="text" id="address-field" name="address-field" class="address-field-input">
                      <label for="address-field"></label>
                      <input type="text" id="address-street" name="address-street" class="address-street-input">
                      <label for="address-street"></label>
                    </div>

                    <div class="address__inputs-right">
                      <input type="text" id="address-city" name="address-city" class="address-city-input">
                      <label for="address-city" class="address-city-label"></label>

                      <input type="text" id="address-house" name="address-house" class="address-house-input">
                      <label for="address-house" class="address-house-label"></label>

                      <input type="text" id="address-apartment" name="address-apartment" class="address-apartment-input">
                      <label for="address-apartment" class="address-apartment-label"></label>
                      
                    </div>
                  </div>
                </div>
              </div>

              <div class="ordering__form-pay form__pay">
                <div class="form-pay__top block-top">
                  <span class="form-pay__num block-top__num">3</span>
                  <h3 class="form-pay__title block-top__title">Выберите способ оплаты</h3>
                  <span class="form-pay__btn-toggle block-top__btn-toggle"></span>
                </div>

                <div class="form-pay__list">
                  <div class="form-pay__item">
                    <img src="" alt="">
                    <p>Наличными курьеру</p>
                  </div>
                  <div class="form-pay__item">
                    <img src="" alt="">
                    <p>Картой онлайн</p>
                  </div>
                  <div class="form-pay__item">
                    <img src="" alt="">
                    <p>В магазине</p>
                  </div>
                  <div class="form-pay__item">
                    <img src="" alt="">
                    <p>Кредит / Рассрочка</p>
                  </div>
                  <div class="form-pay__item">
                    <img src="" alt="">
                    <p>По счету для юр. лиц</p>
                  </div>
                  
                </div>
              </div>

              <div class="ordering__form-comment form-comment">
                <div class="form-comment__top block-top">
                  <span class="form-comment__num block-top__num">4</span>
                  <h3 class="form-comment__title block-top__title">Комментарий к заказу</h3>
                  <span class="form-comment__btn-toggle block-top__btn-toggle"></span>
                </div>
                <label for="comment-field"></label>
                <textarea name="comment-field" id="comment-field" cols="30" rows="10" placeholder="Оставите Ваш комментарий к заказу"></textarea>
              </div>
            </div>
              
              <div class="ordering__form-right">
                <div class="ordering__form-total form-total">
                  <div class="form-total__price">
                    <div class="form-total__price-sum">
                      <p>Итого</p>
                      <p>3 793 p.</p>
                    </div>
                    <div class="form-total__price-products">
                      <p>Товары, 2 шт.</p>
                      <p>4 892 р.</p>
                    </div>
                    <div class="form-total__price-sale">
                      <p>Скидка</p>
                      <p>- 1399 p.</p>
                    </div>
                  </div>

                  <div class="form-total__delivery">
                    <div class="form-total__delivery-zone">
                      <p>Зона доставки</p>
                      <p>Отдаленные районы</p>
                    </div>
                    <div class="form-total__delivery-price">
                      <p>Цена доставки</p>
                      <p>300 p.</p>
                    </div>
                    <div class="form-total__delivery-status">
                      <p>Статус оплаты</p>
                      <p>Заказ не оплачен</p>
                    </div>
                    <div class="form-total__delivery-pay">
                      <p>Способ оплаты</p>
                      <p>Картой онлайн</p>
                    </div>
                  </div>

                  <div class="form-total__promo">
                    <p>Промокод</p>
                    <a href="#">Добавить</a>
                  </div>

                  <button type="submit">Оформить заказ</button>

                  <input type="checkbox" id="oferta">
                  <label for="oferta"></label>
                </div>
              </div>

          </form>
        </div>
        
      </div>
      
    </main>

<?include'./local/footer.php'?>