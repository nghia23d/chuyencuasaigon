@extends('layout')

@section('title', $data->title)
@section('keywords', $data->tag)
@section('description', $data->meta_description)

@section('content')
    <div class="wrapper light-wrapper">
        <div class="container inner pt-120">
            <div class="blog classic-view">
                {{-- Content --}}
                <div class="post text-center">
                    <figure class="rounded"><img width="85%" src="{{ $data->thumbnail }}" alt="" /></figure>
                    <div class="space40"></div>
                    <div class="row post-content text-left">
                        <div class="col-md-8 offset-md-2">
                            <h1 class="post-title">{{ $data->title }}</h1>
                            <div class="meta">
                                <time class="entry-date" datetime="{{ $data->created_at->toIso8601String() }}"> <i
                                        class="fa fa-clock-o cmt-textcolor-skincolor"></i>
                                    {{ $data->created_at->format('G:i - d/m/Y') }}
                                </time>

                                <span class="author">- By <a href="#">Admin</a></span>
                                <span class="comments"> <a href="#">0</a> </span>
                                <span class="cmt-meta-line byline">
                                    <i class="fa fa-tags cmt-textcolor-skincolor"></i>
                                    {{-- <a
                                        href="/chuyen-muc/{{ $data->category->slug_title }}.html">{{ $data->category->title ?? 'Khác' }}</a> --}}
                                </span>
                            </div>
                            <div class="custom-content">
                                {!! $data->content !!}
                            </div>

                            <div class="meta tags mb-10 text-center pt-30">
                                Share now
                            </div>
                            <ul class="social social-mute social-s text-center">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                            <!-- /.social -->
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                    {{-- Tag --}}
                    <div class="sidebox widget">
                        <h3 class="widget-title">Tags</h3>
                        <ul class="list-unstyled tag-list">
                            @foreach ($data->tag_array as $tag)
                                <li><a href="#" class="btn btn-white shadow">{{ $tag }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>



                <!-- /.row -->
            </div>
            <!-- /.blog -->
        </div>
        <!-- /.container -->
    </div>
@endsection
