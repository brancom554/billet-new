@extends('welcomePages.layouts.app')


@section('content')
<!-- banner section start here -->
<!-- <section class="banner-section style-3" style="background-image: url({{asset('welcome/images/banner/02.png')}}); background-color: #f2f2f2">
    <div class="banner-content-area">
        <div class="container container-1310">
            <div class="banner-content">
                <h1>Découvrer vos meilleurs événements</h1> -->
                <!-- <span>Find The Conference, Festival, Exhibition, Meetup, Seaker & Vanue</span> -->
            <!-- </div>
        </div>
    </div>
</section> -->
<!-- banner section ending here -->

<!-- ======= hero Section ======= -->
<!-- <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url({{asset('welcome/images/banner/02.png')}})">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">The Best Business Information </h2>
                <p class="animate__animated animate__fadeInUp">We're In The Business Of Helping You Start Your Business</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url({{asset('welcome/images/banner/02.png')}})">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">At vero eos et accusamus</h2>
                <p class="animate__animated animate__fadeInUp">Helping Business Security & Peace of Mind for Your Family</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url({{asset('welcome/images/banner/02.png')}})">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Temporibus autem quibusdam</h2>
                <p class="animate__animated animate__fadeInUp">Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section>End Hero Section -->

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('welcome/images/banner/02.png')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('welcome/images/banner/02.png')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('welcome/images/banner/02.png')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<section class="feature-section-two mt-5">
    <div class="section-header wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s">
        <h2>Nos catégories d'événements !!!</h2>

    </div>
    <div class="container">
    <div class="row section-wrapper">
    
    <div class="feature-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
    <div class="inner-box">
    <div class="icon"><img src="{{asset('images/clubsoirees.png')}}" width="500px" heigth="500px alt=""></div>
    <h4><a href="{{route('eventsByCategory', $eventsCategories[0]->name)}}">{{$eventsCategories[0]->name}}</a></h4>
    <div class="text">Ex vim lorem homero. Te sit mutat graece deserunt ea has. Sumo</div>
    <div class="link-box"><a href="{{route('eventsByCategory', $eventsCategories[0]->name)}}">Voir les événements</a></div>
    </div>
    </div>
    
    <div class="feature-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
    <div class="inner-box">
    <div class="icon"><img src="{{asset('images/concertetspectacles.png')}}" width="500px" heigth="500px alt=""></div>
    <h4><a href="{{route('eventsByCategory', $eventsCategories[1]->name)}}">{{$eventsCategories[1]->name}}</a></h4>
    <div class="text">Ex vim lorem homero. Te sit mutat graece deserunt ea has. Sumo</div>
    <div class="link-box"><a href="{{route('eventsByCategory', $eventsCategories[1]->name)}}">Voir les événements</a></div>
    </div>
    </div>
    
    <div class="feature-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
    <div class="inner-box">
    <div class="icon"><img src="{{asset('images/festivale.png')}}" width="500px" heigth="500px" alt=""></div>
    <h4><a href="{{route('eventsByCategory', $eventsCategories[2]->name)}}">{{$eventsCategories[2]->name}}</a></h4>
    <div class="text">Ex vim lorem homero. Te sit mutat graece deserunt ea has. Sumo</div>
    <div class="link-box"><a href="{{route('eventsByCategory', $eventsCategories[2]->name)}}">Voir les événements</a></div>
    </div>
    </div>

    <div class="feature-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
        <div class="inner-box">
        <div class="icon"><img src="{{asset('images/loisirsetlieuxcuturels.png')}}" width="500px" heigth="500px alt=""></div>
        <h4><a href="{{route('eventsByCategory', $eventsCategories[3]->name)}}">{{$eventsCategories[3]->name}}</a></h4>
        <div class="text">Ex vim lorem homero. Te sit mutat graece deserunt ea has. Sumo</div>
        <div class="link-box"><a href="{{route('eventsByCategory', $eventsCategories[3]->name)}}">Voir les événements</a></div>
        </div>
        </div>

        <div class="feature-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
            <div class="inner-box">
            <div class="icon"><img src="{{asset('images/conferences.png')}}" width="500px" heigth="500px alt=""></div>
            <h4><a href="{{route('eventsByCategory', $eventsCategories[4]->name)}}">{{$eventsCategories[4]->name}}</a></h4>
            <div class="text">Ex vim lorem homero. Te sit mutat graece deserunt ea has. Sumo</div>
            <div class="link-box"><a href="{{route('eventsByCategory', $eventsCategories[4]->name)}}">Voir les événements</a></div>
            </div>
            </div>

            <div class="feature-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                <div class="inner-box">
                <div class="icon"><img src="{{asset('images/salonsgrandpublic.png')}}" width="500px" heigth="500px alt=""></div>
                <h4><a href="{{route('eventsByCategory', $eventsCategories[5]->name)}}">{{$eventsCategories[5]->name}}</a></h4>
                <div class="text">Ex vim lorem homero. Te sit mutat graece deserunt ea has. Sumo</div>
                <div class="link-box"><a href="{{route('eventsByCategory', $eventsCategories[0]->name)}}">Voir les événements</a></div>
                </div>
                </div>

                <div class="feature-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                    <div class="icon"><img src="{{asset('images/salonsprofessionnels.png')}}" width="500px" heigth="500px alt=""></div>
                    <h4><a href="{{route('eventsByCategory', $eventsCategories[6]->name)}}">{{$eventsCategories[6]->name}}</a></h4>
                    <div class="text">Ex vim lorem homero. Te sit mutat graece deserunt ea has. Sumo</div>
                    <div class="link-box"><a href="{{route('eventsByCategory', $eventsCategories[6]->name)}}">Voir les événements</a></div>
                    </div>
                    </div>
    
    <div class="feature-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
    <div class="inner-box">
    <div class="icon"><img style="filter: invert(88%) sepia(30%) grayscale(100%);" src="{{asset('images/lotoonline.png')}}" width="500px" heigth="500px alt=""></div>
    <h4><a href="{{route('eventsByCategory', $eventsCategories[7]->name)}}">{{$eventsCategories[7]->name}}</a></h4>
    <div class="text">Ex vim lorem homero. Te sit mutat graece deserunt ea has. Sumo</div>
    <div class="link-box"><a href="{{route('eventsByCategory', $eventsCategories[7]->name)}}">Voir les événements</a></div>
    </div>
    </div>
    </div>
    </div>
    </section>


<!-- event schedule section start here -->
<section class="event-schedule style-3 padding-tb">
    <div class="container container-1310">
        <div class="section-header wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s">
            <h2>Les prochains événements</h2>
            <!-- <span>More then 200 upcoming exclusive events are comming in this year. You can join our event & get unlimited of happyness.</span> -->
        </div>
        <div class="section-wrapper">
            <div class="tabcontent">
                <ul>
          
                    @forelse ($incommingEvents as $event)
                    
                    <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="con-schedule">
                            <div class="con-schedule-thumb">
                                <img src="{{asset($event->image() ? $event->image()[0]['image_path'] : '')}}" alt="speaker">
                            </div>
                            <div class="con-schedule-content">
                                <h4>{{$event->title}}</h4>
                                <p>{{$event->description ?? $event->description}}</p>
                                <ul>
                                    <li>
                                        <div class="con-info-title">Time</div>
                                        <div class="con-info-text">{{$event->start_date->format('Y-m-d')}} at {{$event->start_date->format('H:i:s')}}</div>
                                    </li>
                                    <li>
                                        <div class="con-info-title">{{$event->venue_name}}</div>
                                        <div class="con-info-text">{{$event->location ?? $event->location}}</div>
                                    </li>
                                </ul>
                               
                            </div>
                        </div>
                        
                        <div class="con-ticket">
                            <img src="{{asset('welcome/images/speaker/ticket.png')}}" alt="meta-con">
                            <span class="con-t-text">Ticket From</span>
                            <span class="con-t-price">{{$event->ticket() ? $event->ticket()[0]['price'] : ''}}</span>
                            <a href="{{route('showEventPage', [$event->id, $event->title])}}" class="btn-defult">Réserver</a>
                            <a href="{{route('eventsDetails', $event->id)}}" class="btn-defult">Détails</a>
                        </div>
                    </li>

                    @empty

                    <h4>Pas d'événement disponible</h4>

                    @endforelse
                    
                    
                </ul>
            </div>

            @if(count($incommingEvents) > 0)
            <div class="row mt-5 col-md-12 justify-content-center">
                <a href="{{route('seeMore')}}"><button class="voirPlus">Voir plus <i class="fa fa-arrow-right"></i></button></a>
            </div>
            @endif
        </div>
    </div>
</section>	
<!-- event schedule section ending here -->

<!-- blog section start here -->
<section class="blog-section padding-tb">
    <div class="container container-1310">
        <div class="section-header d-flex align-items-center flex-wrap wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s">
            <h2>Quelques événements passés</h2>
            <div class="blog-btn">
                <div class="blog-btn-prev blog-navy"></div>
                <div class="blog-btn-next blog-navy"></div>
            </div>
        </div>
        <div class="section-wrapper">
            <div class="blog-slider">
                <div class="swiper-wrapper">
                    @foreach ($events as $event)
                    @if ($event->end_date <= \Carbon\Carbon::now()->format('Y-m-d H:i:s') && $event->is_live == 1)
                    <div class="swiper-slide wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                        <div class="post-item">
                            <div class="post-item-inner">
                                <div class="post-thumb">
                                    <a href="{{route('eventsDetails', $event->id)}}"><img src="{{asset($event->image() ? $event->image()[0]['image_path'] : 'welcome/css/images/corporate.png')}}" style="object-fit:contain;
                                        width:410px;
                                        height:300px;" alt="blog"></a>
                                </div>
                                <div class="post-content">
                                    <span>{{$event->category}}</span>
                                    <h5><a href="#">{{$event->title}}</a></h5>
                                    <p>{{$event->description}}</p>
                                    <div class="meta-post">
                                        <span class="by"> Organisé par <a class="name" href="{{route('eventsDetails', $event->id)}}">{{$event->organiser->name}}</a><a class="date" href="{{route('eventsDetails', $event->id)}}"></a><img  src="{{$event->organiser->logo_path ? $event->organiser->logo_path : 'welcome/images/blog/meta.png'}}" class="organiser_image" alt="organizer"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                   
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog section ending here -->
@endsection