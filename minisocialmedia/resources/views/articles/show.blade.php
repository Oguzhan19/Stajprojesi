@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">

                    <span>
                       Bu metin, {{$article->created_at}}'de {{$article->user->name}}
                        tarafından oluşturuldu.
                    </span>

                </div>
                <div class="panel-heading">

                    <div> Başlık = {{$article->heading }}</div>
                </div>
                <div class="panel-body">
                  {{$article->content}}
                </div>
                <div class="panel-footer clearfix">

                    <a href=/seeprofile/show/{{$article->user->id}}>
                        << {{$article->user->name}} adlı kullanıcının profiline git.
                    </a>
                    <a href=/home  class="pull-right">Mevasis Bloğun anasayfa>>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection