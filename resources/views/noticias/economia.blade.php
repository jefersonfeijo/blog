@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Notícias Econômia</div>

                <div class="panel-body">

                    <div>

                      @foreach($noticiasEconomia as $noticias)
                        <ul class="media-list col-md-offset-0">
                          <li class="media">
                            <div class="media-left">
                                <img class="media-object" src="img/noticias/arton2269.jpg" width="130" height="130" alt="...">
                            </div>
                                <div class="media-body">
                                  <h4 class="media-heading">{!!$noticias!!}</h4>
                                <hr>
                                </div>

                        </ul>
                      @endforeach  
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-3 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Notícias</div>
                <div class="list-group">
                  <a href="{{route('noticias.brasil')}}" class="list-group-item">Brasil</a>
                  <a href="{{route('noticias.politica')}}"class="list-group-item ">Política</a>
                  <a class="list-group-item active">Econômia</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
