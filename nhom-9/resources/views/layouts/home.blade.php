<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ $page_title or 'Fun of Study' }}</title>

    <!-- Bootstrap  CSS -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        {{-- <link rel="stylesheet" href="q/css/bootstrap.min.css"> --}}
        {{-- <link rel="stylesheet" href="q/css/bootstrap-theme.min.css"> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="/q/css/home.css" rel="stylesheet">
    <!-- Custom CSS -->
        <link href="/css/shop-homepage.css" rel="stylesheet">
        <link href="/css/radio.css" rel="stylesheet">


</head>

<body>
    <div class="container-fluid nb-1">
               <div class="container-fluid">
                
                        @if (Auth::check())

                            <div class="" style="color:rgb(51, 204, 204)">
                                {{ Auth::user()->name }}
                            <form action="{{ route('auth.logout') }}" method="post">
                                {{ csrf_field() }}
                                <input type="submit" value="Logout" class="btn-link">
                            </form>
                            </div>
                        @else
                        <a class="login" href="{{ route('auth.login') }}"><i class="fa fa-fw fa-user"></i>Đăng nhập</a>
                        <a class="signup" href="{{ route('auth.register') }}">Đăng ký </a>
                        @endif

                        {{-- <h1 style="font-family: Monospace; color: rgb(102, 0, 255);font-size: 50px;" class="text-center"><strong>FoS - Fun of Study</strong></h1> --}}
                        <h1 class="text-center">FoS - Fun of Study</h1>
                        <br>
                    </div>
                </div>
                </div>  
        </div>              
         <div class="container-fluid nb-2">
            <div class="navbar-header">
               <a class="navbar-brand" href="/" >Fun of Study</a>
            </div>
         </div>

    <!-- Page Content -->
    <div class="container-fluid nb-3">
        <br>
        <div class="container">
        <div class="row">
        
            <div class="col-md-3">

                @yield('sidebar')

            </div>
    
            <div class="col-md-9">
                <div class="row">
                
                    @yield('main')

                </div>
            </div>

        </div>
        </div>
    </div>
    {{-- <br> --}}
    <!-- /.container -->


        <!-- Footer -->
            
            <footer>
                <div class="container footerr">
                    <div class="row">

                            <div class="col-sm-3">              
                                <ul class="uull">
                                    <h3>FOS-Fun of Study</h3>
                                    {{-- <li><p></p></li> --}}
                                </ul>
                            </div>
                            <div class="col-sm-2">
                                <ul class="uull">
                                    <h3>Dịch vụ</h3>
                                    {{-- <li><a href="#">Blog FoS</a></li> --}}
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <ul class="uull">
                                    <h3>Hỗ trợ khách hàng</h3>
                                    <li><p>Email: <strong style="color: rgb(0, 51, 128)">funofstudy@gmail.com</strong></p></li>
                                    <li><p>Điện thoại liên hệ: <strong style="color: rgb(0, 51, 128)">0397154233</strong></p></li>
                                </ul>
                            </div>
                            <div class="col-sm-3 icon">
                                <div class="uull">
                                <h3>Thông tin liên hệ</h3>
                                <a style="font-size:34px;" href="https://www.linkedin.com/" title="LinkedIn" target="_blank"><i class="fa fa-linkedin-square"></i></a>
                                <a style="font-size:34px;" href="https://www.facebook.com/" title="Facebook" target="_blank"> <i class="fa fa-facebook-square"></i></a>
                                <a style="font-size:34px;" href="https://github.com/" title="GitHub" target="_blank"> <i class="fa fa-github"></i></a>
                                <a style="font-size:34px;" href="https://twitter.com/" title="Twitter" target="_blank"> <i class="fa fa-twitter"></i></a>
                                </div>
                                
                            </div>

                        </div>

                    <div class="panel panel-default"></div>
                    <div class="row">
                        <div class="col-sm-6">
                            {{-- <p>Nguyễn Hữu Minh Quang</p> --}}
                            <p>Địa chỉ: 144 Xuân Thủy - Cầu Giấy - Hà Nội</p>
                        </div>
                        <div class="col-sm-6">
                            <p>Trường đại học Công nghệ - Đại học Quốc Gia Hà Nội</p>
                        </div>
                    </div>
                </div>
            </footer>



    <!-- /.container -->
    <script>

    </script>

    <!-- jQuery -->
    <script src="/js/jquery.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script>
    $( "button" ).click(function() {
      $( "#item" ).toggle("slow");
    });
    </script>
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>

</body>

</html>
