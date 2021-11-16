@extends('welcomePages.layouts.app')

@section('content')
<section class="event-venue padding-tb bg-ash">
    <div class="container container-1310">
        <div class="row my-15">

            @forelse ($events as $event)
            <div class="col-md-6">
                <div class="venue-item">
                    <div class="venue-thumb">
                        <a href="#"><img src="{{asset($event->image() ? $event->image()[0]['image_path'] : '')}}" alt="venue"></a>
                    </div>
                    <div class="venue-content">
                        <a href="#"><h6>{{$event->title}}</h6></a>
                        <div class="meta-post">
                           
                        </div>
                        <p>{{$event->description}}</p>
                        <div class="venue-location">
                            <p><i class="fa fa-home"></i>{{$event->location}}</p>
                            <p><a href="{{route('eventsDetails', $event->id)}}"><b>Voir plus ...</b></a></p>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <h4> Pas d'événements disponible pour cette catégorie</h4>
            @endforelse

        </div>
       
    </div>
    <div class="d-flex justify-content-center">
        {!! $events->links() !!}
    </div>
    
</section>
@endsection