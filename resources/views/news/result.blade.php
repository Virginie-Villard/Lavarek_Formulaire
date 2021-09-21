@extends('template')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Resultats du formulaire news</h2>
        </div>
        <div class="panel-body">
            <h3>Formulaire #2 News</h3>
            <p>Title : <b>{{ $news['title'] }}</b></p>
            
            <p>Content : <b>{{ $news['content'] }}</b></p>

        </div>
    </div>

    
@endsection
