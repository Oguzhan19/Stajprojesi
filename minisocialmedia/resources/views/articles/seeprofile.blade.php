@extends('layouts.app')


@section('content')
    <div class="row">

        @forelse($articles as $article)
            <div class="col-md-6 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span> Bu metin, {{$article->created_at}}'de {{$article->user->name}}
                            tarafından oluşturuldu.</span>

                    </div>
                    <div class="panel-heading">

                        <div> Başlık = {{$article->heading }}</div>
                    </div>
                    <div class="panel-body">

                        {{$article->content }}
                        <a href="/articles/{{$article->id}}" >Devamını Oku</a>
                    </div>
                    <div class="panel-footer clearfix">
                        @if($article-> user_id==Auth::id())
                            <form action="/articles/{{$article->id}}" method="POST"
                                  class="pull-right" style="margin-left:25px">
                                {{csrf_field()}}

                            </form>
                        @endif
                        <i>Mevasis Blog. Anasayfa için
                            <a href=/home> buraya </a>
                        tıklayınız
                        </i>
                    </div>
                </div>
            </div>
    </div>
    @empty
        <div class="col-md-6 col-md-offset-2">
            Gösterilecek birşey yok.</div>
    @endforelse
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
{{$articles->links()}}
        </div>
    </div>
@endsection