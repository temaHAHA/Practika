@extends("layouts.app")
@section("content")
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
                    <a href="/product/sort/name/asc" class="sorter">По возрастанию</a>
                    <a href="/product/sort/name/desc" class="sorter">По убыванию</a>
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
            <a href="/tov/{{$comi['id']}}">Подробнее</a>
            </div>
    @endforeach
    </div>
  </section>
@endsection