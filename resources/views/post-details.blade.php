<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Katen - Minimal Blog & Magazine HTML Theme</title>
    <meta name="description" content="Katen - Minimal Blog & Magazine HTML Theme">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assetsFrontEnd/brand/favicon.png') }}" type="image/png">

    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assetsFrontEnd/css/bootstrap.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assetsFrontEnd/css/all.min.css') }}" type="text/css')}}" media="all">
    <link rel="stylesheet" href="{{ asset('assetsFrontEnd/css/slick.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assetsFrontEnd/css/simple-line-icons.css') }}" type="text/css"
        media="all">
    <link rel="stylesheet" href="{{ asset('assetsFrontEnd/css/style.css') }}" type="text/css" media="all">

</head>

<body>
    <!-- preloader -->
    <div id="preloader">
        <div class="book">
            <div class="inner">
                <div class="left"></div>
                <div class="middle"></div>
                <div class="right"></div>
            </div>
        </div>
    </div>

    <!-- site wrapper -->
    <div class="site-wrapper">
        <div class="main-overlay"></div>
        <!-- header -->
        <header class="header-default">
            <nav class="navbar navbar-expand-lg">
                <div class="container-xl">
                    <!-- site logo -->
                    <a class="navbar-brand" href="/"><img width="118" height="26"
                            src="{{ asset('assetsFrontEnd/brand/blue.png') }}" alt="logo" /></a>
                    <div class="collapse navbar-collapse">
                        <!-- menus -->
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" href="/">Home</a>
                            </li>
                            @foreach ($categories as $key => $category)
                                <li class="nav-item">
                                    <a class="nav-link" href="category.html">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- header right section -->
                    <div class="header-right">
                        <!-- social icons -->
                        <ul class="social-icons list-unstyled list-inline mb-0">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                        <!-- header buttons -->
                        <div class="header-buttons">
                            <button class="search icon-button">
                                <i class="icon-magnifier"></i>
                            </button>
                            <button class="burger-menu icon-button">
                                <span class="burger-icon"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <!-- section main content -->
        <section class="main-content mt-3">
            <div class="container-xl">

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">{{ $post->categories->name }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $post->post_title }}</li>
                    </ol>
                </nav>

                <div class="row gy-4">
                    <div class="col-lg-8">
                        <!-- post single -->
                        <div class="post post-single">
                            <!-- post header -->
                            <div class="post-header">
                                <h1 class="title mt-0 mb-3">{{ $post->post_title }}</h1>
                                <ul class="meta list-inline mb-0">
                                    <li class="list-inline-item"><a href="#">{{ $post->categories->name }}</a>
                                    </li>
                                    <li class="list-inline-item">{{ $post->created_at->diffForHumans() }}
                                    </li>
                                </ul>
                            </div>
                            <!-- featured image -->
                            <div class="featured-image">
                                @if ($post->image)
                                    <img width='100%'
                                        src='{{ asset("post_images/post_$post->id/$post->image") }}' />
                                @else
                                    <img width='100%'
                                        src='{{ asset('assetsFrontEnd/images/posts/post-md-2.jpg') }}' />
                                @endif
                            </div>
                            <!-- post content -->
                            <div class="post-content clearfix">{{ $post->content }}</div>
                        </div>
                        <div class="spacer" data-height="50"></div>
                        <div class="about-author padding-30 rounded">
                            <div class="thumb">
                                <img src="assetsFrontEnd/images/other/avatar-about.png" alt="Katen Doe" />
                            </div>
                            <div class="details">
                                <h4 class="name"><a href="#">Katen Doe</a></h4>
                                <p>Hello, I’m a content writer who is fascinated by content fashion, celebrity and
                                    lifestyle. She helps clients bring the right content to the right people.</p>
                                <!-- social icons -->
                                <ul class="social-icons list-unstyled list-inline mb-0">
                                    <li class="list-inline-item"><a href="#"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#"><i
                                                class="fab fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i
                                                class="fab fa-pinterest"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="spacer" data-height="50"></div>

                        <!-- section header -->
                        <div class="section-header">
                            <h3 class="section-title">Comments ({{ count($post->comments) }})</h3>
                            <img src="{{ asset('assetsFrontEnd/images/wave.svg') }}" class="wave"
                                alt="wave" />
                        </div>

                        <!-- post comments -->
                        <div class="comments bordered padding-30 rounded">
                            @foreach ($post->comments as $key => $comment)
                                <ul class="comments">
                                    <!-- comment item -->
                                    <li class="comment rounded">
                                        <div class="thumb">
                                            <img src="{{ asset('assetsFrontEnd/images/other/comment-1.png') }}"
                                                alt="John Doe" />
                                        </div>
                                        <div class="details">
                                            <h4 class="name"><a href="#">{{ $comment->visitor_name }}</a>
                                            </h4>
                                            <span class="date">{{ $comment->created_at->diffForHumans() }}</span>
                                            <p>{{ $comment->body }}</p>
                                            <a href="#" onclick="getElementById({{ $comment->id }})"
                                                data-comment-id="3" class="btn btn-default btn-sm"
                                                data-bs-toggle="modal" data-bs-target="#replyModal">Reply</a>
                                        </div>
                                    </li>
                                    @foreach ($comment->replies as $key => $reply)
                                        <li class="comment child rounded mb-15" style="margin-bottom: 30px">
                                            <div class="thumb">
                                                <img src="{{ asset('assetsFrontEnd/images/other/comment-1.png') }}"
                                                    alt="John Doe">
                                            </div>
                                            <div class="details">
                                                <h4 class="name"><a href="#">{{ $reply->visitor_name }}</a>
                                                </h4>
                                                <span class="date">{{ $reply->created_at->diffForHumans() }}</span>
                                                <p>{{ $reply->body }}</p>
                                                {{-- <a href="#" data-comment-id="3"
                                                class="btn btn-default btn-sm">Reply</a> --}}
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            @endforeach
                        </div>



                        <div class="spacer" data-height="50"></div>

                        <!-- section header -->
                        <div class="section-header">
                            <h3 class="section-title">Leave Comment</h3>
                            <img src="{{ asset('assetsFrontEnd/images/wave.svg') }}" class="wave"
                                alt="wave" />
                        </div>
                        <!-- comment form -->
                        <div class="comment-form rounded bordered padding-30">

                            <form id="comment-form" action="{{ url('comment/store') }}" class="comment-form"
                                method="post">
                                @csrf
                                <div class="messages"></div>
                                <input type="hidden" name="post_id" value="{{ $post->id }}" />
                                <div class="row">

                                    <div class="column col-md-12">
                                        <!-- Comment textarea -->
                                        <div class="form-group">
                                            <textarea name="body" id="comment_body" class="form-control" rows="4" placeholder="Your comment here..."
                                                required="required"></textarea>
                                        </div>
                                    </div>

                                    <div class="column col-md-6">
                                        <!-- Email input -->
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="visitor_email"
                                                name="visitor_email" placeholder="Email address" required="required">
                                        </div>
                                    </div>

                                    <div class="column col-md-6">
                                        <!-- Website input -->
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="visitor_website"
                                                id="visitor_website" placeholder="Website" required="required">
                                        </div>
                                    </div>

                                    <div class="column col-md-12">
                                        <!-- Name input -->
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="InputName"
                                                name="visitor_name" placeholder="Your name" required="required">
                                        </div>
                                    </div>

                                </div>

                                <button type="submit" name="submit" id="submit" value="Submit"
                                    class="btn btn-default">Submit</button>
                                <!-- Submit Button -->

                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4">

                        <!-- sidebar -->
                        <div class="sidebar">
                            <!-- widget about -->
                            <div class="widget rounded">
                                <div class="widget-about data-bg-image text-center"
                                    data-bg-image="{{ asset('assetsFrontEnd/images/map-bg.png') }}">
                                    <img width="118" height="26"
                                        src="{{ asset('assetsFrontEnd/brand/blue.png') }}" alt="logo"
                                        class="mb-4" />
                                    <p class="mb-4">Hello, We’re content writer who is fascinated by content fashion,
                                        celebrity and lifestyle. We helps clients bring the right content to the right
                                        people.</p>
                                    <ul class="social-icons list-unstyled list-inline mb-0">
                                        <li class="list-inline-item"><a href="#"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i
                                                    class="fab fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i
                                                    class="fab fa-pinterest"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i
                                                    class="fab fa-medium"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i
                                                    class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- widget categories -->
                            <div class="widget rounded">
                                <div class="widget-header text-center">
                                    <h3 class="widget-title">Explore Topics</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="list">
                                        @foreach ($categories as $key => $category)
                                            <li><a
                                                    href="#">{{ $category->name }}</a><span>{{ count($category->posts) }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>

        <!-- footer -->
        <footer>
            <div class="container-xl">
                <div class="footer-inner">
                    <div class="row d-flex align-items-center gy-4">
                        <!-- copyright text -->
                        <div class="col-md-4">
                            <span class="copyright">© 2021 Katen. Template by ThemeGer.</span>
                        </div>

                        <!-- social icons -->
                        <div class="col-md-4 text-center">
                            <ul class="social-icons list-unstyled list-inline mb-0">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>

                        <!-- go to top button -->
                        <div class="col-md-4">
                            <a href="#" id="return-to-top" class="float-md-end"><i
                                    class="icon-arrow-up"></i>Back to Top</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    <!-- end site wrapper -->

    <!-- search popup area -->
    <div class="search-popup">
        <!-- close button -->
        <button type="button" class="btn-close" aria-label="Close"></button>
        <!-- content -->
        <div class="search-content">
            <div class="text-center">
                <h3 class="mb-4 mt-0">Press ESC to close</h3>
            </div>
            <!-- form -->
            <form class="d-flex search-form">
                <input class="form-control me-2" type="search" placeholder="Search and press enter ..."
                    aria-label="Search">
                <button class="btn btn-default btn-lg" type="submit"><i class="icon-magnifier"></i></button>
            </form>
        </div>
    </div>

    <!-- canvas menu -->
    <div class="canvas-menu d-flex align-items-end flex-column">
        <!-- close button -->
        <button type="button" class="btn-close" aria-label="Close"></button>

        <!-- logo -->
        <div class="logo">
            <img width="118" height="26" src="{{ asset('assetsFrontEnd/brand/blue.png') }}" alt="Katen" />
        </div>

        <!-- menu -->
        <nav>
            <ul class="vertical-menu">
                <li class="{{ url()->current() === "http://127.0.0.1:8000" ? 'active' : ''}}">
                    <a href="/">Home</a>
                </li>
                @foreach ($categories as $key => $category)
                    <li class="{{ url()->current() === "http://127.0.0.1:8000/post/categories/$category->id" ? 'active' : ''}}"><a href="{{ url('post/categories') }}/{{ $category->id }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        </nav>

        <!-- social icons -->
        <ul class="social-icons list-unstyled list-inline mb-0 mt-auto w-100">
            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
        </ul>
    </div>
    <!-- <div id="snackbar">Your comment has been sent and is pending approval by admin</div> -->


    </div>

    <!-- Modal -->
    <div class="modal fade" id="replyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            @if (!empty($comment))
            <form action="{{ url('comment/reply/add') }}/{{ $comment->id }}" id="comment-form"
                class="comment-form" method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- reply form -->
                        <div class="comment-form rounded bordered padding-30">
                            <input type="hidden" name="comment_id" value="{{ $comment->id }}" id="commentId" />

                            <div class="messages"></div>
                            <div class="row">

                                <div class="column col-md-12">
                                    <!-- Comment textarea -->
                                    <div class="form-group">
                                        <textarea name="body" id="comment_body" class="form-control" rows="4" placeholder="Your comment here..."
                                            required="required"></textarea>
                                    </div>
                                </div>

                                <div class="column col-md-6">
                                    <!-- Email input -->
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="visitor_email"
                                            name="visitor_email" placeholder="Email address" required="required">
                                    </div>
                                </div>

                                <div class="column col-md-6">
                                    <!-- Website input -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="visitor_website"
                                            id="visitor_website" placeholder="Website" required="required">
                                    </div>
                                </div>

                                <div class="column col-md-12">
                                    <!-- Name input -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="InputName"
                                            name="visitor_name" placeholder="Your name" required="required">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn  btn-default">Save
                            changes</button>
                    </div>
            </form>

            @endif
        </div>
    </div>





    <!-- JAVA SCRIPTS -->
    <script src="{{ asset('assetsFrontEnd/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assetsFrontEnd/js/popper.min.js') }}"></script>
    <script src="{{ asset('assetsFrontEnd/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assetsFrontEnd/js/slick.min.js') }}"></script>
    <script src="{{ asset('assetsFrontEnd/js/jquery.sticky-sidebar.min.js') }}"></script>
    <script src="{{ asset('assetsFrontEnd/js/custom.js') }}"></script>

    <script>
        function getElementById(commentId) {
            //localStorage.setItem('commentId', commentId);
            document.getElementById(commentId).value = commentId;
            // console.log(document.getElementById(commentId).value);
        }
    </script>


</body>

</html>
