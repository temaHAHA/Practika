@extends("layouts.app")
@section("content")
  <section>
    <div class="container">
      <div class="d-flex">
        <div>
        @foreach($comic as $comi)
          <div class="d-flex flex-column col-lg-12">
              <img src="/public/{{ $comi['img'] }}" class="img1 img-fluid d-block" alt="...">
              <h3>{{ $comi['name'] }}</h3>
              <span>{{ $comi['price'] }}</span>
              </div>
        @endforeach
        </div>
      </div>
    </div>
  </section>
  @endsection