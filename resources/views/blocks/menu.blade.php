<nav class="navbar wide transparent absolute inverse-text navbar-expand-lg @if (\Request::route()->getName() != 'home') custom-menu @endif">
    <div class="container-fluid flex-row justify-content-center menu">
        <div class="navbar-header">
            <div class="navbar-brand"><a href="/"><img src="#"
                        srcset="/themes/{{ $theme }}/style/images/ccsg.png 1x, style/images/ccsg.png 2x" alt="" /></a>
            </div>
            <div class="navbar-hamburger ml-auto d-lg-none d-xl-none"><button class="hamburger animate"
                    data-toggle="collapse" data-target=".navbar-collapse"><span></span></button></div>
        </div>
        <div class="navbar-collapse collapse justify-content-between align-items-center">
            <ul class="navbar-nav plain mx-auto text-center">
                <li class="nav-item"><a class="nav-link" href="#">Trang chủ</a> </li>

                @foreach ($categories as $value)
                <li class="nav-item"><a class="nav-link" href="/chuyen-muc/{{$value->slug_title}}.html">{{$value->title}}</a> </li>
                @endforeach

                <li class="nav-item"><a class="nav-link" href="#">Blog</a> </li>
                <li class="nav-item"><a class="nav-link" href="{{asset('lien-he.html')}}">Liên hệ</a> </li>
                {{-- <li class="nav-item"><a class="nav-link" href="#">Home</a>
                    <ul class="dropdown-menu mega-menu boxed list-view text-left">
                        <li class="mega-menu-content">
                            <div class="image-block-wrapper">
                                <div class="image-block col-lg-4 col-xl-5">
                                    <div class="image-block-bg bg-image"
                                        data-image-src="/themes/{{ $theme }}/style/images/art/me2.jpg"></div>
                                </div>
                                <!--/.image-block -->
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-8 offset-lg-4 col-xl-7 offset-xl-5">
                                            <div class="box">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <ul class="list-unstyled">
                                                            <li><a href="index.html">Home Demo 1</a></li>
                                                            <li><a href="index2.html">Home Demo 2</a></li>
                                                            <li><a href="index3.html">Home Demo 3</a></li>
                                                            <li><a href="index4.html">Home Demo 4</a></li>
                                                            <li><a href="index5.html">Home Demo 5</a></li>
                                                            <li><a href="index6.html">Home Demo 6</a></li>
                                                            <li><a href="index7.html">Home Demo 7</a></li>
                                                            <li><a href="index8.html">Home Demo 8</a></li>
                                                            <li><a href="index9.html">Home Demo 9</a></li>
                                                            <li><a href="index10.html">Home Demo 10</a></li>
                                                            <li><a href="index11.html">Home Demo 11</a></li>
                                                            <li><a href="index12.html">Home Demo 12</a></li>
                                                            <li><a href="index13.html">Home Demo 13</a></li>
                                                            <li><a href="index14.html">Home Demo 14</a></li>
                                                            <li><a href="index15.html">Home Demo 15</a></li>
                                                            <li><a href="index16.html">Home Demo 16</a></li>
                                                        </ul>
                                                    </div>
                                                    <!--/column -->
                                                    <div class="col-lg-4">
                                                        <ul class="list-unstyled">
                                                            <li><a href="index17.html">Home Demo 17</a></li>
                                                            <li><a href="index18.html">Home Demo 18</a></li>
                                                            <li><a href="index19.html">Home Demo 19</a></li>
                                                            <li><a href="index20.html">Home Demo 20</a></li>
                                                            <li><a href="index21.html">Home Demo 21</a></li>
                                                            <li><a href="index22.html">Home Demo 22</a></li>
                                                            <li><a href="index23.html">Home Demo 23</a></li>
                                                            <li><a href="index24.html">Home Demo 24</a></li>
                                                            <li><a href="index25.html">Home Demo 25</a></li>
                                                            <li><a href="index26.html">Home Demo 26</a></li>
                                                            <li><a href="index27.html">Home Demo 27</a></li>
                                                            <li><a href="index28.html">Home Demo 28</a></li>
                                                            <li><a href="index29.html">Home Demo 29</a></li>
                                                            <li><a href="index30.html">Home Demo 30</a></li>
                                                            <li><a href="index31.html">Home Demo 31</a></li>
                                                            <li><a href="index32.html">Home Demo 32</a></li>
                                                        </ul>
                                                    </div>
                                                    <!--/column -->
                                                    <div class="col-lg-4">
                                                        <ul class="list-unstyled">
                                                            <li><a href="index33.html">Home Demo 33</a></li>
                                                            <li><a href="index34.html">Home Demo 34</a></li>
                                                            <li><a href="index35.html">Home Demo 35</a></li>
                                                            <li><a href="index36.html">Home Demo 36</a></li>
                                                            <li><a href="index37.html">Home Demo 37</a></li>
                                                            <li><a href="index38.html">Home Demo 38</a></li>
                                                            <li><a href="index39.html">Home Demo 39</a></li>
                                                            <li><a href="index40.html">Home Demo 40</a></li>
                                                            <li><a href="index41.html">Home Demo 41</a></li>
                                                            <li><a href="index42.html">Home Demo 42</a></li>
                                                            <li><a href="index43.html">Home Demo 43</a></li>
                                                            <li><a href="index44.html">Home Demo 44</a></li>
                                                            <li><a href="index45.html">Home Demo 45</a></li>
                                                            <li><a href="index46.html">Home Demo 46</a></li>
                                                            <li><a href="index47.html">Home Demo 47</a></li>
                                                            <li><a href="index48.html">Home Demo 48</a></li>
                                                        </ul>
                                                    </div>
                                                    <!--/column -->
                                                </div>
                                                <!--/.row -->
                                            </div>
                                            <!-- /.box -->
                                        </div>
                                        <!--/column -->
                                    </div>
                                    <!--/.row -->
                                </div>
                                <!--/.container-fluid -->
                            </div>
                            <!--/.image-block-wrapper -->
                        </li>
                        <!--/.mega-menu-content-->
                    </ul>
                    <!--/.dropdown-menu -->
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#">Porfolio</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item" href="portfolio.html">Text Style
                                I</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="portfolio2.html">Text Style
                                II</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="portfolio3.html">List
                                Type</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="portfolio4.html">One
                                Column</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="portfolio5.html">Two
                                Columns</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="portfolio6.html">Three
                                Columns</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="portfolio7.html">Video
                                Album</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="portfolio8.html">Photo
                                Album</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#">Gallery</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item" href="gallery.html">Polaroid
                                Style</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="gallery2.html">List Type</a>
                        </li>
                        <li class="nav-item"><a class="dropdown-item" href="gallery3.html">Three
                                Columns</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="gallery4.html">Titled
                                Gallery</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="gallery5.html">Lightbox -
                                Three Column Grid</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="gallery6.html">Lightbox - Two
                                Column Grid</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="gallery7.html">Lightbox -
                                Fullscreen Grid</a></li>
                        <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle" href="#">Gallery
                                Posts</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="dropdown-item"
                                        href="gallery-post.html">Post with Carousel</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="gallery-post2.html">Post with Images</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="gallery-post3.html">Post with Lightbox</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="gallery-post4.html">Post with Thumbnail Slider</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#">Pages</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item" href="about.html">About I</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="about2.html">About II</a>
                        </li>
                        <li class="nav-item"><a class="dropdown-item" href="services.html">Services</a>
                        </li>
                        <li class="nav-item"><a class="dropdown-item" href="page-loading.html">Page
                                Loading</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#">Blog</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item" href="blog.html">Classic View No
                                Sidebar</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="blog2.html">Classic View with
                                Sidebar</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="blog3.html">Grid View I</a>
                        </li>
                        <li class="nav-item"><a class="dropdown-item" href="blog4.html">Grid View II</a>
                        </li>
                        <li class="nav-item"><a class="dropdown-item" href="blog5.html">Box Style with
                                Sidebar</a></li>
                        <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle" href="#">Blog
                                Posts</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="dropdown-item"
                                        href="blog-post.html">Post No Sidebar</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="blog-post2.html">Post with Sidebar</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="blog-post3.html">Post with Box Style</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#">Features</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle"
                                href="#">Header</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="dropdown-item" href="header.html">Simple
                                        Centered</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="header2.html">Bordered Centered</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="header3.html">Light
                                        Centered</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="header4.html">Dark
                                        Centered</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="header5.html">Light
                                        Extended</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="header6.html">Dark
                                        Extended</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="header7.html">Simple Wide</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="header8.html">Light
                                        Wide</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="header9.html">Dark
                                        Wide</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle"
                                href="#">Slider</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="dropdown-item"
                                        href="slider.html">Revolution Slider - Static Caption</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="slider2.html">Revolution Slider - Single Slide</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="slider3.html">Revolution Slider - Classic Fullscreen</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="slider4.html">Revolution Slider - Classic Fullwidth</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="slider5.html">Revolution Slider - Single Video</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="slider6.html">Revolution Slider - Static Caption Auto</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="slider7.html">Revolution Slider - Classic Caption Auto</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="slider8.html">Revolution Slider - Scroll Slider</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="slider9.html">Revolution Slider - Side Tab Slider</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="slider10.html">Revolution Slider - Split Slider I</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="slider11.html">Revolution Slider - Split Slider II</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="slider12.html">Revolution Slider - Fullscreen YouTube Video</a>
                                </li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="slider13.html">Revolution Slider - Popup Video</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="slider14.html">Flickity - Thumbnail Slider</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="slider15.html">Flickity - Fullwidth Carousel</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="slider16.html">Flickity - Fullscreen View</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle"
                                href="#">Footer</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="dropdown-item" href="footer.html">Footer
                                        I</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="footer2.html">Footer II</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="footer3.html">Footer III</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="footer4.html">Footer IV</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle"
                                href="#">Fonts</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="dropdown-item" href="font1.html">Louis
                                        George Café</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="font2.html">Poppins</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="font3.html">IBM
                                        Plex Serif</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="font4.html">Zilla
                                        Slab</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="font5.html">Playfair Display</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="font6.html">Abhaya
                                        Libre</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="font7.html">Quattrocento & Unica One</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle"
                                href="#">Colors</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="dropdown-item"
                                        href="color1.html">Aqua</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="color2.html">Blue</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="color3.html">Brown</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="color4.html">Green</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="color5.html">Hibiscus</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="color6.html">Lavender</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="color7.html">Leaf</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="color8.html">Meander</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="color9.html">Orange</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="color10.html">Pink</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="color11.html">Purple</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="color12.html">Red</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="color13.html">Rose</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="color14.html">Teal</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="color15.html">Violet</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="color16.html">Yellow</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle"
                                href="#">Onepage</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="dropdown-item" href="index15.html">Demo
                                        I</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="index24.html">Demo
                                        II</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="dropdown-item" href="box-layout.html">Box
                                Layout</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">Elements</a>
                    <ul class="dropdown-menu mega-menu boxed list-view text-left">
                        <li class="mega-menu-content">
                            <div class="image-block-wrapper">
                                <div class="image-block col-lg-4 col-xl-5">
                                    <div class="image-block-bg bg-image"
                                        data-image-src="/themes/{{ $theme }}/style/images/art/me1.jpg"></div>
                                </div>
                                <!--/.image-block -->
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-8 offset-lg-4 col-xl-7 offset-xl-5">
                                            <div class="box">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <ul class="list-unstyled">
                                                            <li><a href="accordion.html">Accordion</a></li>
                                                            <li><a href="alerts.html">Alerts</a></li>
                                                            <li><a href="blockquote.html">Blockquote</a></li>
                                                            <li><a href="buttons-badges.html">Buttons &
                                                                    Badges</a></li>
                                                            <li><a href="caption.html">Caption</a></li>
                                                            <li><a href="color-box.html">Color Box</a></li>
                                                            <li><a href="countdown.html">Countdown</a></li>
                                                            <li><a href="counter.html">Counter</a></li>
                                                            <li><a href="dividers.html">Dividers</a></li>
                                                            <li><a href="dropcap.html">Dropcap</a></li>
                                                            <li><a href="forms.html">Forms</a></li>
                                                        </ul>
                                                    </div>
                                                    <!--/column -->
                                                    <div class="col-lg-4">
                                                        <ul class="list-unstyled">
                                                            <li><a href="icon-solid.html">Icons - Solid</a></li>
                                                            <li><a href="icon-line.html">Icons - Line</a></li>
                                                            <li><a href="instagram-feed.html">Instagram Feed</a>
                                                            </li>
                                                            <li><a href="hover.html">Hover</a></li>
                                                            <li><a href="lightbox.html">Lightbox</a></li>
                                                            <li><a href="lists.html">Lists</a></li>
                                                            <li><a href="list-group.html">List Group</a></li>
                                                            <li><a href="player.html">Media Player</a></li>
                                                            <li><a href="pagination.html">Pagination</a></li>
                                                            <li><a href="pricing.html">Pricing Tables</a></li>
                                                            <li><a href="progressbar.html">Progress Bar</a></li>
                                                        </ul>
                                                    </div>
                                                    <!--/column -->
                                                    <div class="col-lg-4">
                                                        <ul class="list-unstyled">
                                                            <li><a href="animations.html">Scroll Animations</a>
                                                            </li>
                                                            <li><a href="services-icon.html">Services - Icon</a>
                                                            </li>
                                                            <li><a href="services-image.html">Services -
                                                                    Image</a></li>
                                                            <li><a href="social-icons.html">Social Icons</a>
                                                            </li>
                                                            <li><a href="tables.html">Tables</a></li>
                                                            <li><a href="tabs.html">Tabs</a></li>
                                                            <li><a href="team.html">Team</a></li>
                                                            <li><a href="testimonials.html">Testimonials</a>
                                                            </li>
                                                            <li><a href="tooltip-popover.html">Tooltip &
                                                                    Popover</a></li>
                                                            <li><a href="typography.html">Typography</a></li>
                                                            <li><a href="wrappers.html">Wrappers</a></li>
                                                        </ul>
                                                    </div>
                                                    <!--/column -->
                                                </div>
                                                <!--/.row -->
                                            </div>
                                            <!-- /.box -->
                                        </div>
                                        <!--/column -->
                                    </div>
                                    <!--/.row -->
                                </div>
                                <!--/.container-fluid -->
                            </div>
                            <!--/.image-block-wrapper -->
                        </li>
                        <!--/.mega-menu-content-->
                    </ul>
                    <!--/.dropdown-menu -->
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#">Contact</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item" href="contact.html">Contact I</a>
                        </li>
                        <li class="nav-item"><a class="dropdown-item" href="contact2.html">Contact
                                II</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="contact3.html">Contact
                                III</a></li>
                    </ul>
                </li> --}}
            </ul>
        </div>
        <div class="social-wrapper text-right">
            <ul class="social social-mute social-s mb-0">
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</nav>