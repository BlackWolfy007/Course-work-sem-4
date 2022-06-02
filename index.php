<!DOCTYPE html>
<html lang='ru'>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <title>Оформление заказа</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/source/css/style.css">
</head>
<body>
  <h1>Оформление заказа</h1>

  <div class="row">
    <div class="col-75">
      <div class="container">
        <form action="check.php" method="post">
        
          <div class="row">
            <div class="col-50">
              <h3>Платежный адрес</h3>
              <label for="fname"><i class="fa fa-phone"></i> Телефон</label>
              <input type="tel" id="phone" name="phone" placeholder="8-800-500-11-11" class="form-control" pattern="8-[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}">
              <label for="email"><i class="fa fa-envelope"></i> Email</label>
              <input type="email" id="email" name="email" placeholder="and-shhipunov@mail.ru" class="form-control">
              <label for="adr"><i class="fa fa-address-card-o"></i> Адрес</label>
              <select id="address" name="address" size="1">
                <option value="1">Пл. Карла Маркса, 3, Новосибирск</option>
                <option value="2">Ул. Коммунистическая, 7, Новосибирск</option>
                <option value="3">Ул. Богдана Хмельницкого, 38, Новосибирск</option>
                <option value="4">Ул. Кропоткина, 130/7, Новосибирск</option>
                <option value="5">Ул. Нарымская, 37, Новосибирск</option>
              </select>
            </div>
            
          </div>
          <input type="submit" value="Продолжить оформление заказа" class="btn btn-success">
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
