@extends('layout')

@section('title', $data->title)

@section('content')
    <div class="wrapper light-wrapper">
        <div class="container inner pt-150">
            <h2 class="mb-30 section-title text-center">{{ $data->title }} </h2>
            <div class="row">
                <div class="col-md-8">
                    <div class="blog grid grid-view boxed boxed-classic-view">
                        @if (count($data->blogs) == 0)
                            Chuyên mục này chưa có bài viết. Quay lại <a class="text-warning" href="/">trang chủ</a>
                        @endif
                        @foreach ($data->blogs as $value)
                            <div class="post">
                                <div class="box bg-white shadow">
                                    <figure class="main mb-30 overlay overlay1 rounded"><a
                                            href="{{ asset($value->slug_title) }}.html"> <img
                                                src="{{ $value->thumbnail }}" alt="" /></a>
                                        <figcaption>
                                            <h5 class="text-uppercase from-top mb-0">Xem thêm</h5>
                                        </figcaption>
                                    </figure>
                                    <div class="post-meta">
                                        <span class="cmt-meta-line byline">
                                            <i class="fa fa-user cmt-textcolor-skincolor"></i>
                                            Admin
                                        </span>
                                        <span class="cmt-meta-line comments-link">
                                            <i class="fa fa-clock-o cmt-textcolor-skincolor"></i>
                                            {{ $value->diff_for_humans }}
                                        </span>
                                        <span class="cmt-meta-line byline">
                                            <i class="fa fa-tags cmt-textcolor-skincolor"></i>
                                            {{ $value->category->title ?? 'Khác' }}
                                        </span>
                                    </div>
                                    <h2 class="post-title">
                                        <a href="{{ asset($value->slug_title) }}.html">{{ $value->title }}</a>
                                    </h2>
                                    <div class="post-content">
                                        {!! $value->short_content !!}
                                    </div>
                                    <!-- /.post-content -->
                                    <hr />
                                    <div class="meta meta-footer d-flex justify-content-between mb-0">
                                        @if ($value->created_at->isToday())
                                            Hôm nay
                                        @else
                                            {{ $value->created_at->format('d') }}
                                            <span
                                                class="entry-month entry-year">{{ $value->created_at->format('M') }}</span>
                                        @endif
                                        <span class="comments">
                                            <a href="#">3</a>
                                        </span>
                                    </div>
                                </div>
                                <!-- /.box -->
                            </div>
                        @endforeach
                    </div>

                    <!-- /.blog -->
                    {{-- <div class="pagination bg">
                        <ul>
                            <li><a href="#" class="btn btn-white shadow"><i class="mi-arrow-left"></i></a></li>
                            <li class="active"><a href="#" class="btn btn-white shadow"><span>1</span></a></li>
                            <li><a href="#" class="btn btn-white shadow"><span>2</span></a></li>
                            <li><a href="#" class="btn btn-white shadow"><span>3</span></a></li>
                            <li><a href="#" class="btn btn-white shadow"><i class="mi-arrow-right"></i></a></li>
                        </ul>
                    </div> --}}
                    <!-- /.pagination -->
                </div>
                <!--/column -->
                <aside class="col-md-4 sidebar">

                    <div class="sidebox widget">
                        <h3 class="widget-title">Search</h3>
                        <form class="search-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search something">
                            </div>
                            <!-- /.form-group -->
                        </form>
                        <!-- /.search-form -->
                    </div>

                    <div class="sidebox widget">
                        <h3 class="widget-title">Categories</h3>
                        <ul class="unordered-list">
                            <li><a href="#">Lifestyle (21)</a></li>
                            <li><a href="#">Photography (19)</a></li>
                            <li><a href="#">Journal (16)</a></li>
                            <li><a href="#">Works (7)</a></li>
                            <li><a href="#">Conceptual (12)</a></li>
                            <li><a href="#">Videography (14)</a></li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                    <div class="sidebox widget">
                        <h3 class="widget-title">Tags</h3>
                        <ul class="list-unstyled tag-list">
                            <li><a href="#" class="btn btn-white shadow">Still Life</a></li>
                            <li><a href="#" class="btn btn-white shadow">Urban</a></li>
                            <li><a href="#" class="btn btn-white shadow">Nature</a></li>
                            <li><a href="#" class="btn btn-white shadow">Landscape</a></li>
                            <li><a href="#" class="btn btn-white shadow">Macro</a></li>
                            <li><a href="#" class="btn btn-white shadow">Fun</a></li>
                            <li><a href="#" class="btn btn-white shadow">Workshop</a></li>
                            <li><a href="#" class="btn btn-white shadow">Photography</a></li>
                        </ul>
                    </div>
                </aside>
                <!-- /column .sidebar -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </div>
@endsection
