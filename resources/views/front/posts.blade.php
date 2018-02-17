@extends('layouts.default')

  @section('title')
    Nina
  @endsection


@section('content')
@include('includes.header')

<section class="row content-wrap">
    <div class="container">
        <div class="row">
          @foreach($posts as $post)
            <div class="col-md-8 single-post-contents">
                <article class="single-post-content row m0 post">
                    <header class="row">
                        <h5 class="post-meta">
                            <a href="#" class="date">{{$post->created_at}}</a>
                            <span class="post-author"><i>by</i><a href="#">Christina Hagen</a></span>
                        </h5>
                        <h2 class="post-title">{{$post->title}}</h2>
                    </header>
                    @if($post->image)
                    <div class="featured-content row m0">
                        <a href="/"><img src="{{asset('img/$post->image')}}" alt=""></a>
                    </div>
                    @endif
                    <div class="post-content row">
                        <h4>{{$post->body}}</h4>
                        @if($post->quote)
                        <br>
                        <blockquote class="has-sign row m0">
                            <div>
                                <p>{{$post->quote}}</p>
                                <footer>- {{$post->author}}</footer>
                            </div>
                        </blockquote>
                        @endif
                        <br>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
            <div class="col-md-4 sidebar">
                <!--Author Widget-->
                <aside class="row m0 widget-author widget">
                    <div class="widget-author-inner row">
                        <div class="author-avatar row"><a href="#"><img src="http://placehold.it/108x108" alt="" class="img-circle"></a></div>
                        <a href="#"><h2 class="author-name">Mark Sanders</h2></a>
                        <h5 class="author-title">small title</h5>
                        <p>The word nature is derived from the Latin word natura, or "essential qualities, innate disposition", and in ancient times, literally meant "birth".</p>
                        <a href="#" class="know-more">know more</a>
                    </div>
                    <ul class="nav social-nav">
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </aside>
                <!--Twitter Widget-->
                <aside class="row m0 widget widget-twitter">
                    <div class="widget-twitter-inner">
                        <h5 class="widget-meta"><i class="fa fa-twitter"></i>Twitter feed <a href="http://twitter.com/chivalricblog">@chivalricblog</a></h5>
                        <div class="row tweet-texts">
                            <p>Check out new post on my blog <a href="http://twitter.com/#natureshot">#natureshot</a> <a href="http://bit.ly/blog">http://bit.ly/blog</a></p>
                        </div>
                        <div class="row timepast">1 day ago</div>
                    </div>
                </aside>
                <!--Instagram Widget-->
                <aside class="row m0 widget widget-instagram">
                    <div class="widget-instagram-inner">
                        <h5 class="widget-meta"><i class="fa fa-twitter"></i>instagram feed <a href="http://twitter.com/chivalricblog">@chivalricblog</a></h5>
                        <div id="instafeed"></div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>





@endsection
