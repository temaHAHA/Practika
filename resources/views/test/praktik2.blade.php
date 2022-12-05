<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Демо Bootstrap</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="public/css/style.css">
  </head>
  <body>
    <header class="logo">
      <div class="container">
          <div class="flex-wrap">
              <div class="justify-content-center justify-content-lg-between d-flex align-items-center flex-wrap">
                  <div class="col-lg-2">
                      <img src="img/2.png" alt="" class="img-fluid">
                  </div>
                  <nav class="col-lg-10 d-flex justify-content-around flex-wrap">
                      <a href="#" class="text justify-content-center mx-2">О нас</a>
                      <a href="#" class="text justify-content-center mx-2 ">Каталог</a>
                      <a href="#" class="text justify-content-center mx-2">Товар</a>
                      <a href="#" class="text justify-content-center mx-2">Где нас найти?</a>
                      <a href="/login" class="text justify-content-center mx-2">Вход</a>
                      <a href="/register" class="text justify-content-center mx-2">Регистрация</a>
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <section>
    <div class="container">
      <div class="d-flex">
        <div class="my-4">
          <h3>О нас</h3>
        <div>
          <p>Мы предлогаем вам нашу уникальную колекцию комиксов с вашим любимым героем, на наш сайт ежедневно могут заходят множество людей интересующиеся этим занятием. 
            Достаточно просто зарегестрироваться на сайте и вам будет открыта вся коллеция комиксов.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="d-flex justify-content-center">
              <div id="carouselExampleControls" class="carousel w-25 h-25" data-bs-ride="carousel">
          <div class="carousel-inner">
            @foreach($comic as $comi)
            <div class="carousel-item active">
              <img src="{{ $comi['img'] }}" class="img-fluid d-block w-100" alt="...">
              <h3>{{ $comi['name'] }}</h3>
              <span>{{ $comi['price'] }}</span>
            </div>
            @endforeach
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
          </button>
        </div>
      </div>
    </div>
  </section>
  </body>
</html>