@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Notícias Brasil</div>

                <div class="panel-body">

                    <div>

                    
                      @foreach($noticiasBrasil as $noticia )
                        

                        <ul class="media-list col-md-offset-0">
                          <li class="media">
                            <div class="media-left">
                                <img class="media-object" src="img/noticias/carteiratrabalho.jpg" width="130" height="130" alt="...">
                            </div>
                                <div class="media-body">
                                  <h4 class="media-heading">{!!$noticia!!}</h4>
                                  
                                <hr>
                                </div>
                          </li>
                          
                        @endforeach 
                    

                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-3 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Notícias</div>
                <div class="list-group">
                  <a class="list-group-item active">Brasil</a>
                  <a href="{{route ('noticias.politica')}}" class="list-group-item">Política</a>
                  <a href="{{route('noticias.economia')}}" class="list-group-item">Econômia</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
