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
                      <a href="/aboutUs" class="text justify-content-center mx-2">О нас</a>
                      <a href="/komic" class="text justify-content-center mx-2 ">Каталог</a>
                      <a href="/catalog" class="text justify-content-center mx-2">Товар</a>
                      <a href="/local" class="text justify-content-center mx-2">Где нас найти?</a>
                      <a href="/login" class="text justify-content-center mx-2">Вход</a>
                      <a href="/register" class="text justify-content-center mx-2">Регистрация</a>
                  </nav>
              </div>
          </div>
      </div>
  </header>
  </body>
</html>