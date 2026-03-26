@extends('layouts.app')

@section('title', __('messages.blog_detail_title'))

@section('content')
            <main id="main">

                <section class="breadcumb-section">
                    <div class="tf-container">
                        <div class="row">
                            <div class="col-lg-12 center z-index1">
                                <h1 class="title">{{ __('messages.blog_detail_title') }}</h1>
                                <ul class="breadcumb-list flex-five">
                                    <li><a href="#">{{ __('messages.blog_home') }}</a></li>
                                    <li><span>{{ __('messages.blog_detail_title') }}</span></li>
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
                                <article class="side-blog side-blog-single">
                                    <div class="image">
                                        @if($blog->image)
                                            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                                        @else
                                            <img src="assets/images/blog/blog-details.jpg" alt="{{ $blog->title }}">
                                        @endif
                                    </div>
                                    <div class="top-detail-info">
                                        <ul class="flex-three">
                                            <li>
                                                <i class="icon-4"></i>
                                                <span>{{ $blog->published_at->format('d M Y') }}</span>
                                            </li>
                                            <li>
                                                <i class="icon-25"></i>
                                                <span>{{ __('messages.blog_comments_label') }} (0)</span>
                                            </li>
                                            <li>
                                                <i class="icon-24"></i>
                                                <span>{{ $blog->views }} {{ __('messages.blog_read_time') }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h2 class="entry-title">
                                        {{ $blog->title }}
                                    </h2>
                                    <p class="des lh-32 mb-37">
                                        {!! $blog->content !!}
                                    </p>
                                    <p class="des lh-32 mb-32">We have covered many special events such as fireworks,
                                        fairs, parades, races, walks, awards ceremonies,
                                        fashion shows, sporting events, and even a memorial service.
                                    </p>
                                    <p class="des lh-32 mb-25">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Curabitur vulputate vestibulum rhon cus,
                                        dolor eget viverra pretium, dolor tellus aliquet nunc, vitae ultricies erat elit
                                        eu lacus. Vestibulum non
                                        justo fun consectetur, cursus ante, tincidunt sapien. Nulla quis diam sit amet
                                        turpis interd enim.
                                        Vivamus fauc ex sed nibh egestas elementum. Mauris et bibendum
                                    </p>
                                    <div class="blockquote-blog mb-40">
                                        <blockquote class="blockquote">
                                            <p>Your time is limited, so don’t waste it living someone else’s life.
                                                Don’t be trapped by dogma – which is living with the results</p>
                                            <h5 class="quote-title">John Mehedii</h5>
                                            <i class="icon-Group-21081"></i>
                                        </blockquote>

                                    </div>



                                </article>
                                <div class="side-blog-single-content">
                                    <div class="ux-content mb-70">
                                        <h3 class="title mb-32">Let our investment management team</h3>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <ul class="icon-listing">
                                                    <li>
                                                        <i class="icon-Vector-5"></i>
                                                        <span>Lorem Ipsum generators on the tend to repeat.</span>
                                                    </li>
                                                    <li>
                                                        <i class="icon-Vector-5"></i>
                                                        <span> If you are going to use a passage.</span>
                                                    </li>
                                                    <li>
                                                        <i class="icon-Vector-5"></i>
                                                        <span> Lorem Ipsum generators on the tend to repeat.</span>
                                                    </li>
                                                    <li>
                                                        <i class="icon-Vector-5"></i>
                                                        <span> Lorem Ipsum generators on the tend to repeat.</span>
                                                    </li>
                                                    <li>
                                                        <i class="icon-Vector-5"></i>
                                                        <span> If you are going to use a passage.</span>
                                                    </li>
                                                </ul>

                                            </div>
                                            <div class="col-md-5 text-end">
                                                <img src="assets/images/blog/blog-details-list.jpg" alt="">

                                            </div>
                                        </div>

                                    </div>
                                    <div class="row mb-40">
                                        <div class="col-6">
                                            <img src="assets/images/blog/blog-img1.jpg" alt="">
                                        </div>
                                        <div class="col-6">
                                            <img src="assets/images/blog/blog-img-2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p class="des">We have covered many special events such as fireworks, fairs,
                                                parades, races, walks, awards
                                                ceremonies, fashion shows, sporting events, and even a memorial
                                                service.Lorem ipsum dolor
                                                sit amet, consectetur adipiscing elit. vestibulum rhoncus, dolor eget
                                                viverra pretium, dolor
                                                ellus aliquet nunc,
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex-two share-blog">
                                        <div class="tag-blog flex-three">
                                            <span>{{ __('messages.blog_detail_tag_label') }}</span>
                                            <ul class="tag">
                                                <li>
                                                    <a href="#">Business</a>
                                                </li>
                                                <li>
                                                    <a href="#">Design</a>
                                                </li>
                                                <li>
                                                    <a href="#">Apps</a>
                                                </li>
                                                <li>
                                                    <a href="#">Data</a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="social-blog flex-three">
                                            <span>{{ __('messages.blog_detail_share_label') }}</span>
                                            <ul class="social">
                                                <li>
                                                    <a href="#">
                                                        <i class="icon-icon"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="icon-icon-2"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="icon-instagram-1"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="icon-x"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-single">
                                    <h3 class="title mb-32">(04) Comment</h3>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="comment-blog flex mb-40">
                                                <div class="avata">
                                                    <img src="assets/images/avata/avt-coment.jpg" alt="">
                                                </div>
                                                <div class="content">
                                                    <div class="flex-one">
                                                        <div class="info">
                                                            <h6 class="name">Rohan De Spond</h6>
                                                            <p class="date">25 january 2021</p>
                                                        </div>
                                                        <div class="repply">
                                                            <i class="icon-reply-all"></i>
                                                        </div>
                                                    </div>
                                                    <div class="des">There are many variations of passages of Lorem
                                                        Ipsum available, but the leap into electronic
                                                        type setting, remaining essentiallyuncha opularisedthe with the
                                                        release of Letrasetsheets
                                                        containingth leap electrtypesetting remainingmajority have.
                                                        There are many variations
                                                        of passages of Lorem Ipsum</div>
                                                </div>
                                            </div>
                                            <div class="comment-blog flex">
                                                <div class="avata">
                                                    <img src="assets/images/avata/avt-comment-2.jpg" alt="">
                                                </div>
                                                <div class="content">
                                                    <div class="flex-one">
                                                        <div class="info">
                                                            <h6 class="name">Johan Ritaxon</h6>
                                                            <p class="date">25 january 2021</p>
                                                        </div>
                                                        <div class="repply">
                                                            <i class="icon-reply-all"></i>
                                                        </div>
                                                    </div>
                                                    <div class="des">There are many variations of passages of Lorem
                                                        Ipsum available, but the
                                                        majority have. There are many variations of passages</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-comment">
                                    <h3 class="title mb-32">{{ __('messages.blog_detail_write_comment') }}</h3>
                                    <form action="https://themesflat.co/" id="comment">
                                        <div class="group-gap">
                                            <input type="text" class="input-cmt" placeholder="{{ __('messages.blog_detail_comment_name') }}">
                                            <input type="email" class="input-cmt" placeholder="{{ __('messages.blog_detail_comment_email') }}">
                                        </div>
                                        <div class="group-gap">
                                            <input type="tel" class="input-cmt" placeholder="{{ __('messages.blog_detail_comment_phone') }}">
                                            <input type="url" class="input-cmt" placeholder="{{ __('messages.blog_detail_comment_website') }}">
                                        </div>
                                        <textarea cols="30" class="input-cmt" rows="15"
                                            placeholder="{{ __('messages.blog_detail_comment_message') }}">
                                        </textarea>
                                        <div class="checkbox">
                                            <input id="check" type="checkbox" name="check" value="check">
                                            <label for="check">Save my name, email, and website in this browser for the
                                                next time I comment.</label>
                                        </div>
                                        <input type="submit" value="{{ __('messages.blog_detail_send_message') }}">
                                    </form>

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
                                        <h4 class="block-heading">{{ __('messages.blog_detail_search') }}</h4>
                                        <form action="https://themesflat.co/" id="search-bar-widget">
                                            <input type="text" placeholder="Search here...">
                                            <button type="button"><i class="icon-search-2"></i></button>
                                        </form>

                                    </div>
                                    <div class="sidebar-widget">
                                        <h4 class="block-heading">{{ __('messages.blog_detail_recent') }}</h4>
                                        <div class="recent-post-list">
                                            @php
                                                $relatedBlogs = \App\Models\Blog::published()->where('id', '!=', $blog->id)->take(3)->get();
                                            @endphp
                                            @forelse ($relatedBlogs as $relatedBlog)
                                            <div class="list-recent flex-three">
                                                <a href="{{ route('blog.detail', $relatedBlog->slug) }}" class="recent-image">
                                                @if($relatedBlog->image)
                                                    <img src="{{ asset('storage/' . $relatedBlog->image) }}" alt="{{ $relatedBlog->title }}">
                                                @else
                                                    <img src="assets/images/blog/re-blog1.jpg" alt="{{ $relatedBlog->title }}">
                                                @endif
                                                </a>
                                                <div class="recent-info">
                                                    <div class="date">
                                                        <i class="icon-4"></i>
                                                        <span>{{ $relatedBlog->published_at->format('M d,Y') }}</span>
                                                    </div>
                                                    <h4 class="title">
                                                        <a href="{{ route('blog.detail', $relatedBlog->slug) }}">{{ Str::limit($relatedBlog->title, 40) }}</a>
                                                    </h4>
                                                </div>
                                            </div>
                                            @empty
                                            <p class="text-muted">No related articles</p>
                                            @endforelse
                                        </div>
                                    </div>
                                    <div class="sidebar-widget">
                                        <h4 class="block-heading">{{ __('messages.blog_detail_categories') }}</h4>
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
                                        <h4 class="block-heading">{{ __('messages.blog_detail_tags') }}</h4>
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
