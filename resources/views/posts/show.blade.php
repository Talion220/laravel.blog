@extends('layouts.layout')


@section('title','Markedia - Marketing Blog Template :: ' . $post->title)

@section('content')

    <div class="page-wrapper">
        <div class="blog-title-area">
            <ol class="breadcrumb hidden-xs-down">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('categories.single', ['slug'=>$post->category->slug])}}">{{$post->category->title}}</a></li>
                <li class="breadcrumb-item active">{{$post->title}}</li>
            </ol>

            <span class="color-yellow"><a href="{{route('categories.single', ['slug'=>$post->category->slug])}}">{{$post->category->title}}</a></span>

            <h3>{{$post->title}}</h3>

            <div class="blog-meta big-meta">
                <small>{{$post->getPostDate()}}</small>
                <small><i class="fa fa-eye"></i>{{$post->views}}</small>
            </div><!-- end meta -->

            <div class="post-sharing">
                <ul class="list-inline">
                    <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                    <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                    <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div><!-- end post-sharing -->
        </div><!-- end title -->

        <div class="single-post-media">
            <img src="{{$post->getImage()}}" alt="" class="img-fluid">
        </div><!-- end media -->

        <div class="blog-content">
            {!! $post->content !!}
        </div><!-- end content -->

        <style>
            img {
                display: block;
                max-width: 400px;
                height: auto;

            }
        </style>

        <div class="blog-title-area">
            @if($post->tags->count())
                <div class="tag-cloud-single">
                    <span>Tags</span>
                    @foreach($post->tags as $tag)
                        <small><a href="{{route('tags.single', ['slug'=>$tag->slug])}}" title="">{{$tag->title}}</a></small>
                    @endforeach
                </div><!-- end meta -->
            @endif
                <hr class="invis1">

                <div class="custombox clearfix">
                    <h4 class="small-title">{{$post->commentsCount()}} Comments</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="comments-list">

                                @foreach($post->comments as $comment)
                                    <div class="media">
                                        <a class="media-left" href="#">
                                            <img src="upload/author.jpg" alt="" class="rounded-circle">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading user_name">{{$comment->name}} <small>{{$comment->getCommentDate()}}</small></h4>
                                            <p>{{ $comment->comment }}</p>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end custom-box -->

                <hr class="invis1">

                @if (Auth::check())
                    <div class="custombox clearfix">
                        <h4 class="small-title">Leave a comment</h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <form method="POST" action="{{ route('comments.store', $post->id) }}" class="form-wrapper">
                                    @csrf
                                    <input type="text" name="name" class="form-control" placeholder="Your name">

                                    <textarea name="comment" class="form-control" placeholder="Your comment"></textarea>
                                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                                    <button type="submit" class="btn btn-primary">Submit Comment</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @else
                    <a href="{{route('login')}}" title="">Войдите, чтобы оставить комментарий</a>
                @endif

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif


        </div><!-- end title -->


    </div><!-- end page-wrapper -->

@endsection
