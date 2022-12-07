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
        <div class="my-3">
        <form method="post">
                {{ csrf_field() }}
                <span>Сортировать по:</span>
                @if(isset($sort))
                    @if($sort=="name")
                    <select name="sorted" onchange="this.form.submit()">
                        <option value="date">По дате</option>
                        <option value="name" selected>По наименованию</option>
                        <option value="price">По цене</option>
                    </select>
                    @elseif($sort=="price")
                    <select name="sorted" onchange="this.form.submit()">
                        <option value="date">По дате</option>
                        <option value="name">По наименованию</option>
                        <option value="price" selected>По цене</option>
                    </select>
                    @else
                    <select name="sorted" onchange="this.form.submit()">
                        <option value="date" selected>По дате</option>
                        <option value="name">По наименованию</option>
                        <option value="price">По цене</option>
                    </select>
                    @endif
                @else
                    <select name="sorted" onchange="this.form.submit()">
                        <option value="date" selected>По дате</option>
                        <option value="name">По наименованию</option>
                        <option value="price">По цене</option>
                    </select>
                @endif
                @if(isset($optionSorted))
                    @if($optionSorted=="descendingOrder")
                    <select name="optionSorted" onchange="this.form.submit()">
                        <option value="ascending">По возрастанию</option>
                        <option value="descendingOrder" selected>По убыванию</option>
                    </select>
                    @else
                    <select name="optionSorted"  onchange="this.form.submit()">
                        <option value="ascending" selected>По возрастанию</option>
                        <option value="descendingOrder">По убыванию</option>
                    </select>
                    @endif
                @else
                <select name="optionSorted" onchange="this.form.submit()">
                    <option value="ascending" selected>По возрастанию</option>
                    <option value="descendingOrder">По убыванию</option>
                </select>
                @endif
                
            </form>
        </div>
      </div>
    </div>

    <div class="container d-flex">
    @foreach($comic as $comi)
        <div class="d-flex flex-column col-lg-3">
            <img src="{{ $comi['img'] }}" class="img1 img-fluid d-block" alt="...">
            <h3>{{ $comi['name'] }}</h3>
            <span>{{ $comi['price'] }}</span>
            <a href="/praktik4/{id}">Подробнее</a>
            </div>
    @endforeach
    </div>
  </section>
  </body>
</html>