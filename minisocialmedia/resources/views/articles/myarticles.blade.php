@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                        Şu anda kendi profilinizi görmektesiniz. Burada daha önceden oluşturduğunuz metinleri okuyabilir
                    , bunları düzenleyebilir ve silebilirsiniz. Metinlerinizi düzenlediğiniz zaman otomatik olarak anasayfaya
                    yönlendirileceksiniz.Ya da anasyafaya şimdi dönmek için

                    <a href=/home> buraya </a>
                    tıklayabilirsiniz.
                </div>
            </div>
        </div>
        @forelse($myarticles as $article)
        <div class="col-md-6 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span>{{$article->created_at->diffForHumans()}}</span>
                    <span class="pull-right">
                         <small><a href="/articles/edit/{{$article->id}}">  (Düzenle)</a>
                        </small>
                        {{$article->created_at->diffForHumans()}}

                    </span>

                </div>
                <div class="panel-heading">

                    <div> Başlık = {{$article->heading }}</div>
                </div>
                <div class="panel-body">

                    {{$article->shortContent }}
                    <a href="/articles/{{$article->id}}" >Devamını Oku...</a>
                </div>
                <div class="panel-footer clearfix">

                    @if($article-> user_id==Auth::id())
                        <form action="/articles/{{$article->id}}" method="POST"
                              class="pull-right" style="margin-left:25px">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button class="btn btn-danger tn-sm">
                                Sil
                            </button>
                        </form>
                    @endif

                    <i class="left">Mevasis Blog </i>
                </div>
            </div>
        </div>
    </div>
    @empty
        <div class="col-md-6 col-md-offset-2">
            Gösterilecek birşey yok</div>
    @endforelse
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
{{$myarticles->links()}}
        </div>
    </div>
@endsection