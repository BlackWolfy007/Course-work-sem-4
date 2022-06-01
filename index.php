<!DOCTYPE html>
<html lang='ru'>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <title>Оформление заказа</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/source/css/style.css">
</head>
<body>
  <h1>Оформление заказа</h1>

  <div class="row">
    <div class="col-75">
      <div class="container">
        <form action="../action_page.php">
        
          <div class="row">
            <div class="col-50">
              <h3>Платежный адрес</h3>
              <label for="fname"><i class="fa fa-user"></i> ФИО</label>
              <input type="text" id="fname" name="firstname" placeholder="Щипунов Андрей Леонидович">
              <label for="email"><i class="fa fa-envelope"></i> Email</label>
              <input type="text" id="email" name="email" placeholder="and-shhipunov@mail.ru">
              <label for="adr"><i class="fa fa-address-card-o"></i> Адрес</label>
              <input type="text" id="adr" name="address" placeholder="Томская 44-39">
              <label for="city"><i class="fa fa-institution"></i> Город</label>
              <input type="text" id="city" name="city" placeholder="Пермь">

              <div class="row">
                <div class="col-50">
                  <label for="state">Страна</label>
                  <input type="text" id="state" name="state" placeholder="Россия">
                </div>
                <div class="col-50">
                  <label for="zip">Индекс</label>
                  <input type="text" id="zip" name="zip" placeholder="10001">
                </div>
              </div>
            </div>
            
          </div>
          <label>
            <input type="checkbox" checked="checked" name="sameadr"> Адрес доставки совпадает с платежным адресом
          </label>
          <input type="submit" value="Продолжить оформление заказа" class="btn">
        </form>
      </div>
    </div>
    <div class="col-25">
      <div class="container">
        <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
        <p><a href="#">Товар 1</a> <span class="price">₽150</span></p>
        <p><a href="#">Товар 2</a> <span class="price">₽50</span></p>
        <p><a href="#">Товар 3</a> <span class="price">₽80</span></p>
        <p><a href="#">Товар 4</a> <span class="price">₽200</span></p>
        <hr>
        <p>Всего <span class="price" style="color:black"><b>₽480</b></span></p>
      </div>
    </div>
  </div>

</body>
</html>
