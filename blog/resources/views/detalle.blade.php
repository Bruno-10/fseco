@extends('layouts.layout')

@section('titulo')
    Detalle
@endsection

@section('principal')
<body>
        <main>
          <div class="card">
            <div class="card__title">
              <div class="icon">
                <a href="#"><i class="fa fa-arrow-left"></i></a>
              </div>
              <h3>New products</h3>
            </div>
            <div class="card__body">
              <div class="half">
                <div class="featured_text">
                  <h1>{{$producto->titulo}}</h1>
                  <p class="price">{{$producto->id}}</p>
                </div>
                <div class="image">
                  <img src="" alt="">
                </div>
              </div>
              <div class="half">
                <div class="description">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero voluptatem nam pariatur voluptate perferendis, asperiores aspernatur! Porro similique consequatur, nobis soluta minima, quasi laboriosam hic cupiditate perferendis esse numquam magni.</p>
                </div>
                <span class="stock"><i class="fa fa-pen"></i> In stock</span>
                <div class="reviews">
                  <ul class="stars">
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star-o"></i></li>
                  </ul>
                  <span>(64 reviews)</span>
                </div>
              </div>
            </div>
            <div class="card__footer">
              <div class="recommend">
                <p>Recommended by</p>
                <h3>Andrew Palmer</h3>
              </div>
              <div class="action">
                <button type="button">Add to cart</button>
              </div>
            </div>
          </div>
        </main>
      </body>
@endsection