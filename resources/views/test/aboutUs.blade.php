@extends("layouts.app")
@section("content")
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
            @if($loop->first)
            <div class="carousel-item active">
              <img src="{{ $comi['img'] }}" class="img-fluid d-block w-100" alt="...">
              <h3>{{ $comi['name'] }}</h3>
              <span>{{ $comi['price'] }}</span>
            </div>
            @else
            <div class="carousel-item">
              <img src="{{ $comi['img'] }}" class="img-fluid d-block w-100" alt="...">
              <h3>{{ $comi['name'] }}</h3>
              <span>{{ $comi['price'] }}</span>
            </div>
            @endif
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
@endsection