@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    @if(Auth::check())
                   Mevasis bloğun anasayfasına hoşgeldiniz.
                        @else
                    Hoşgeldiniz!! Şu anda Mevasis Blog'un anasayfasını görmektesiniz. Bu sitede bir hesap oluşturmak için

                    <a href=/register>   buraya</a>
                        tıklayın
                        @endif
                </div>
            </div>
        </div>
        @forelse($articles as $article)
            <div class="col-md-6 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span>   Bu metin, {{$article->created_at}}'de {{$article->user->name}}
                            tarafından oluşturuldu.</span>

                    </div>
                    <div class="panel-heading">

                        <div> Başlık = {{$article->heading }}</div>
                    </div>
                    <div class="panel-body">
                        {{$article->shortContent }}
                        <a href="/articles/{{$article->id}}" >Devamını oku...</a>
                    </div>
                    <div class="panel-footer clearfix">
                        @if($article-> user_id==Auth::id())
                            <form action="/articles/{{$article->id}}" method="POST"
                                  class="pull-right" style="margin-left:25px">
                                {{csrf_field()}}

                            </form>
                        @endif
                        <i>Mevasis Blog </i>
                    </div>
                </div>
            </div>
    </div>
    @empty
        Gösterilecek birşey yok
    @endforelse
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            {{$articles->links()}}
        </div>
    </div>
@endsection