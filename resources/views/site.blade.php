@extends('template.layouts')
@section('content')

<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

            <div class="item active" style="background-image: url({{asset('images/slider/bg1.jpg')}})">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                            </div>
                        </div>

                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <img src="{{asset('images/slider/img1.png')}}" class="img-responsive">
                            </div>
                        </div>

                    </div>
                </div>
            </div><!--/.item-->

            <div class="item" style="background-image: url({{asset('images/slider/bg2.jpg')}}">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                            </div>
                        </div>

                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <img src="{{asset('images/slider/img2.png')}}" class="img-responsive">
                            </div>
                        </div>

                    </div>
                </div>
            </div><!--/.item-->

            <div class="item" style="background-image: url({{asset('images/slider/bg3.jpg')}}">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                            </div>
                        </div>
                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <img src="{{asset('images/slider/img3.png')}}" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="fa fa-chevron-right"></i>
    </a>
</section><!--/#main-slider-->

<section id="feature" >
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>О Нас</h2>
            <p class="lead">Компания «Упаковкин» работает в сфере оптово-розничных продаж упаковочных материалов, и одноразовой посуды уже более 20 лет. Ассортимент продукции позволяет любому покупателю – от организации до физического лица – приобрести у нас все необходимое. Так, мы предлагаем упаковочные материалы, упаковочные пакеты полиэтиленовые, контейнеры пищевые. Кроме того мы реализуем такую продукцию как бытовая химия, хоз.товары, бумажная продукция, подарочная упаковка, а также одноразовая посуда. Мы доверяем исключительно ведущими производителям соответствующего товара и реализуем только те упаковочные материалы в Ульяновске и Ульяновской области, которые произведены проверенными производителями. Выбрав «Упаковкин», вы экономите свое время и деньги.</p>
        </div>

        <div class="row">
            <div class="features">
                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-cutlery"></i>
                        <h2>Большой выбор</h2>
                        <h3>одноразовой продукции</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-handshake-o"></i>
                        <h2>Retina ready</h2>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-shopping-cart"></i>
                        <h2>Бесплатная</h2>
                        <h3>доставка по городу</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-leaf"></i>
                        <h2>Adipisicing elit</h2>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-phone"></i>
                        <h2>Sed do eiusmod</h2>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-heart"></i>
                        <h2>Отзывчивый</h2>
                        <h3>Клиент-сервис</h3>
                    </div>
                </div><!--/.col-md-4-->
            </div><!--/.services-->
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#feature-->

<section id="recent-works">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Последние поступления</h2>
        </div>
        <div class="row">
            @if(isset($goods) && is_object($goods))
                @foreach($goods as $good)
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="{{asset($good['images'])}}" alt="{{$good['name']}}">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">{{$good['name']}}</a> </h3>
                                    <p>{{$good['description']}}</p>
                                    <a class="preview" href="{{asset($good['images'])}}" rel="prettyPhoto"><i class="fa fa-eye"></i> Показать</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#recent-works-->

<section id="partner">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Наши партнеры</h2>
        </div>

        <div class="partners">
            <ul>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="{{asset('images/partners/partner1.png')}}"></a></li>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="{{asset('images/partners/partner2.png')}}"></a></li>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="{{asset('images/partners/partner3.png')}}"></a></li>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="{{asset('images/partners/partner4.png')}}"></a></li>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="{{asset('images/partners/partner5.png')}}"></a></li>
            </ul>
        </div>
    </div><!--/.container-->
</section><!--/#partner-->

@endsection