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
                      <a href="/praktik2" class="text justify-content-center mx-2">О нас</a>
                      <a href="/komic" class="text justify-content-center mx-2 ">Каталог</a>
                      <a href="/praktik4" class="text justify-content-center mx-2">Товар</a>
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
        <div>
        @foreach($comic as $comi)
          <div class="d-flex flex-column col-lg-3">
              <img src="{{ $comi['img'] }}" class="img1 img-fluid d-block" alt="...">
              <h3>{{ $comi['name'] }}</h3>
              <span>{{ $comi['price'] }}</span>
              </div>
        @endforeach
        </div>
      </div>
    </div>
  </section>
  </body>
</html>