<!-- /.wrapper -->
<div class="wrapper light-wrapper">
    <div class="container inner">
        <h2 class="section-title text-center">Bài viết nổi bật</h2>
        <p class="lead larger text-center">Những chiếc ảnh <i>"xinhxan"</i> tại ChuyenCuaSaiGon</p>
        <div class="cube-carousel cbp boxed grid-view text-center">

            <!-- /.cbp-item -->
            @foreach ($data as $value)
                <div class="cbp-item">
                    <div class="box bg-white shadow p-30">
                        <figure class="main polaroid overlay overlay1"><a href="{{ $value->slug_title }}.html"><img
                                    src="{{ $value->thumbnail }}" alt="{{ $value->title }}" /></a>
                            <figcaption>
                                <h5 class="text-uppercase from-top mb-0">Xem bài viết</h5>
                            </figcaption>
                        </figure>
                        <h4 class="mb-0">{{ $value->title }}</h4>

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
                    </div>

                    <!-- /.box -->
                </div>
            @endforeach

        </div>
        <!-- /.cbp -->
    </div>
    <!-- /.container -->
</div>
