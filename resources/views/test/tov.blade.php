@extends("layouts.app")
@section("content")
  <section>
    <div class="container">
      <div class="d-flex justify-content-center">
        <div>
        @foreach($comic as $comi)
          <div class="d-flex flex-column col-lg-12">
              <img src="/public/{{ $comi['img'] }}" class="img1 img-fluid d-block" alt="...">
              <h4>{{ $comi['name'] }}</h4>
              <p>Цена:{{ $comi['price'] }} рублей</p>

              </div>
        @endforeach
        </div>
      </div>
    </div>
  </section>
  @endsection