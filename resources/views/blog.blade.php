@extends('layouts.app')

@section('title', __('messages.blog_page_title'))

@section('content')
            <main id="main">

                <section class="breadcumb-section">
                    <div class="tf-container">
                        <div class="row">
                            <div class="col-lg-12 center z-index1">
                                <h1 class="title">{{ __('messages.blog_page_title') }}</h1>
                                <ul class="breadcumb-list flex-five">
                                    <li><a href="index.html">{{ __('messages.blog_home') }}</a></li>
                                    <li><span>{{ __('messages.blog_page_title') }}</span></li>
                                </ul>
                                <img class="bcrumb-ab" src="assets/images/page/mask-bcrumb.png" alt="">
                            </div>
                        </div>

                    </div>
                </section>

                <section class="our-blog pd-main">
                    <div class="tf-container">
                        <div class="row">
                            <div class="col-lg-8 col-12">
                                @forelse ($blogs as $blog)
                                <article class="side-blog mb-56px">
                                    <div class="blog-image">
                                        <div class="list-categories">
                                            <a href="#" class="new">{{ $blog->published_at->format('d M') }}</a>
                                        </div>
                                        <a class="post-thumbnail" href="{{ route('blog.detail', $blog->slug) }}">
                                            @if($blog->image)
                                                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                                            @else
                                                <img src="assets/images/blog/blog.jpg" alt="{{ $blog->title }}">
                                            @endif
                                        </a>

                                    </div>
                                    <div class="blog-content">
                                        <div class="top-detail-info">
                                            <ul class="flex-three">
                                                <li>
                                                    <i class="icon-user"></i>
                                                    <a href="#">{{ $blog->author }}</a>
                                                </li>
                                                <li>
                                                    <i class="icon-25"></i>
                                                    <span class="date">{{ __('messages.blog_comments_label') }} (0)</span>
                                                </li>
                                                <li>
                                                    <i class="icon-24"></i>
                                                    <span class="date">{{ $blog->views }} {{ __('messages.blog_read_time') }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="entry-title">
                                            <a href="{{ route('blog.detail', $blog->slug) }}">{{ $blog->title }}</a>
                                        </h3>
                                        <p class="description">{{ $blog->excerpt }}</p>
                                        <div class="button-main ">
                                            <a href="{{ route('blog.detail', $blog->slug) }}" class="button-link">{{ __('messages.blog_read_more') }} <i
                                                    class="icon-Arrow-11"></i></a>
                                        </div>
                                    </div>
                                </article>
                                @empty
                                <div class="alert alert-info">
                                    <p>{{ __('No articles published yet') }}</p>
                                </div>
                                @endforelse

                                <div class="row">
                                    <div class="col-md-12 ">
                                        {{ $blogs->links('pagination::bootstrap-4') }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="side-bar-right">
                                    <div class="sidebar-widget">
                                        <div class="profile-widget center">
                                            <img src="assets/images/avata/avt-blog.jpg" alt="Image Blog"
                                                class="avata">
                                            <div class="name">Rosalina D. Willaim</div>
                                            <span class="job">Blogger/Photographer</span>
                                            <p class="des">he whimsically named Egg Canvas is the
                                                design director and photographer
                                                in New York. Why the nam
                                            </p>
                                            <ul class="social">
                                                <li>
                                                    <a href="#">
                                                        <i class="icon-icon-2"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="icon-x"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="icon-icon_03"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="icon-2"></i>
                                                    </a>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                    <div class="sidebar-widget">
                                        <h4 class="block-heading">search here</h4>
                                        <form action="https://themesflat.co/" id="search-bar-widget">
                                            <input type="text" placeholder="Search here...">
                                            <button type="button"><i class="icon-search-2"></i></button>
                                        </form>

                                    </div>
                                    <div class="sidebar-widget">
                                        <h4 class="block-heading">Recent News</h4>
                                        <div class="recent-post-list">
                                            @forelse ($blogs->take(3) as $recentBlog)
                                            <div class="list-recent flex-three">
                                                <a href="{{ route('blog.detail', $recentBlog->slug) }}" class="recent-image">
                                                @if ($recentBlog->image)
                                                <img src="{{ asset('storage/' . $recentBlog->image) }}" alt="{{ $recentBlog->title }}">
                                            @else
                                                <img src="assets/images/blog/re-blog1.jpg" alt="{{ $recentBlog->title }}">
                                            @endif
                                                </a>
                                                <div class="recent-info">
                                                    <div class="date">
                                                        <i class="icon-4"></i>
                                                        <span>{{ $recentBlog->published_at->format('M d,Y') }}</span>
                                                    </div>
                                                    <h4 class="title">
                                                        <a href="{{ route('blog.detail', $recentBlog->slug) }}">{{ Str::limit($recentBlog->title, 40) }}</a>
                                                    </h4>
                                                </div>
                                            </div>
                                            @empty
                                            <p class="text-muted">No recent articles</p>
                                            @endforelse
                                        </div>
                                    </div>
                                    <div class="sidebar-widget">
                                        <h4 class="block-heading">Categories</h4>
                                        <ul class="category-blog">
                                            <li>
                                                <a href="#" class="flex-two">
                                                    <span>Mobile Set</span>
                                                    <span>03</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="flex-two">
                                                    <span>Mobile Set</span>
                                                    <span>03</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="flex-two">
                                                    <span>Mobile Set</span>
                                                    <span>03</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="flex-two">
                                                    <span>Mobile Set</span>
                                                    <span>03</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="sidebar-widget">
                                        <h4 class="block-heading">Tags</h4>
                                        <ul class="tag">
                                            <li>
                                                <a href="#">Tourist</a>
                                            </li>
                                            <li>
                                                <a href="#">Traveling</a>
                                            </li>
                                            <li>
                                                <a href="#">Cave</a>
                                            </li>
                                            <li>
                                                <a href="#">Sky Dive</a>
                                            </li>
                                            <li>
                                                <a href="#">Hill Climb</a>
                                            </li>
                                            <li>
                                                <a href="#">Oppos</a>
                                            </li>
                                            <li>
                                                <a href="#" class="active">Landing</a>
                                            </li>
                                            <li>
                                                <a href="#">Oppos</a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="mb--93">
                    <div class="tf-container">
                        <div class="callt-to-action flex-two">
                            <div class="callt-to-action-content flex-three">
                                <div class="image">
                                    <img src="assets/images/page/ready.png" alt="Image">
                                </div>
                                <div class="content">
                                    <h2 class="title-call">Ready to adventure and enjoy natural</h2>
                                    <p class="des">Lorem ipsum dolor sit amet, consectetur notted adipisicin</p>
                                </div>
                            </div>
                            <img src="assets/images/page/vector4.png" alt="" class="shape-ab">
                            <div class="callt-to-action-button">
                                <a href="#" class="get-call">Let,s get started</a>
                            </div>
                        </div>
                    </div>

                </section>

            </main>
@endsection
