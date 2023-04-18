<!DOCTYPE html>
<html>
<head>
    <title>Contact US</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />


    <link rel="icon" href="agency-studio/img1/favicon1.png">    <!-- Bundle -->
    <link rel="stylesheet" href="vendor/css/bundle.min-1.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- Plugin Css -->
    <link rel="stylesheet" href="vendor/css/revolution-settings.min-1.css">
    <link rel="stylesheet" href="vendor/css/owl.carousel.min-1.css">
    <link rel="stylesheet" href="vendor/css/jquery.fancybox.min-1.css">
    <link rel="stylesheet" href="vendor/css/LineIcons.min-1.css">
    <link rel="stylesheet" href="vendor/css/cubeportfolio.min-1.css">
    <!-- Style Sheet -->
    <link rel="stylesheet" href="agency-studio/css/swiper.css">
    <link rel="stylesheet" href="agency-studio/css/settings.css">
    <link rel="stylesheet" href="agency-studio/css/style.css">
    <link rel="stylesheet" href="css1/settings.css">
    <link rel="stylesheet" href="agency-studio/css1/style.css">
    <link rel="stylesheet" href="creative-studio/css/style.css">
    <!-- Custom Style CSS File -->
    <link rel="stylesheet" href="creative-studio/css/custom.css">
    <link rel="stylesheet" href="creative-studio/css/navigation.css">
    <link rel="stylesheet" href="creative-studio/css/settings.css">
    <link rel="stylesheet" href="creative-studio/css/owl.carousel.min.css">
    <link rel="stylesheet" href="creative-studio/css/owl.theme.default.min.css">
    <link href="architect-studio/css/blog.css" rel="stylesheet">
    <link href="architect-studio/css/style.css" rel="stylesheet">
    <link href="architect-studio/css/slick.css" rel="stylesheet">
    <link href="architect-studio/css/slick-theme.css" rel="stylesheet">
    <link href="architect-studio/css/line-awesome.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


    <style>
        body {

    background-image: url("chc.jpg");
    background-repeat: no-repeat;
    background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

            /* background:
	repeating-linear-gradient(
		to top left,
		beige 0,
		beige 2em,
		moccasin 2em,
		moccasin 4em,
		wheat 4em,
		wheat 6em
	),
	repeating-linear-gradient(
		to left,
		white 0,
		white 2em,
		wheat 2em,
		wheat 4em,
		beige 4em,
		beige 6em
	), white;

background-blend-mode: multiply; */
        }
    </style>

</head>
<body >

@include('components.navbar')
   

      
    <div class="container" style="margin-top: 5%;">
        <div class="row">
          <div class="col-md-5" style="margin-left: 8%; opacity:0.75; border-radius: 5rem;width: 450px; ">
          <div class="card" style="border-radius: 3rem;padding: 2%;border: 1px solid #AE042A;border-radius: 2rem;box-shadow: 10px 10px #ff3838;">
                    <!-- <div class="card-header bg-primary" style="background-color: red;" >
                        <h3 class="text-white"></h3>
                    </div> -->
                    <div class="card-body" style="height: 500px;">
  
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
                     
                        
                        <form method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm">
                            {{ csrf_field() }}
                              
                            <div class="row" >
                                <div class="col-md-12" style="margin-top:5%;">
                                    <div class="form-group">
                                        <strong></strong>
                                        <input type="text" name="name" class="form-control ici" placeholder="Name" value="{{ old('name') }}" style="box-shadow: 2.5px 2.5px 1.25px 3px #ff3838;" >
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12" style="margin-top:5%;">
                                    <div class="form-group">
                                        <strong></strong>
                                        <input type="text" name="email" class="form-control ici" placeholder="Email" value="{{ old('email') }}"  style="box-shadow: 2.5px 2.5px 1.25px 3px #ff3838;">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" style="margin-top:5%;">
                                    <div class="form-group">
                                        <strong></strong>
                                        <input type="text" name="phone" class="form-control ici" placeholder="Phone" value="{{ old('phone') }}"  style="box-shadow: 2.5px 2.5px 1.25px 3px #ff3838;">
                                        @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12" style="margin-top:5%;">
                                    <div class="form-group">
                                        <strong>Service Name</strong>
                                        <!-- <input type="text" name="subject" class="form-control" placeholder="Service Name" value="{{ old('subject') }}"> -->
                                        <select name="subject" class="form-select" id="service" value="{{ old('service') }}"  style="box-shadow: 2.5px 2.5px 1.25px 3px #ff3838;">                                  
                                            <option value="Web Development">Web Development</option>
                                            <option value="App Development">App Development</option>
                                            <option value="Software Development">Software Development</option>
                                            <option value="Graphics Design">Graphics Design</option>
                                            <option value="Social Media Marketing">Social Media Marketing</option>
                                            <option value="Animation">Animation</option>
                                            <option value="Video Editing">Video Editing</option>
                                            <option value="Logo">Logo</option>
                                        </select>
                                        @if ($errors->has('subject'))
                                            <span class="text-danger">{{ $errors->first('subject') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" style="margin-top:5%;">
                                    <div class="form-group">
                                        <strong>Message:</strong>
                                        <textarea type="text" name="message" rows="3" class="form-control ici" style="box-shadow: 2.5px 2.5px 1.25px 3px #ff3838;">{{ old('message') }}</textarea>
                                        @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                                    </div>  
                                </div>
                            </div>

                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-success btn-submit" style="background-color:#AE042A;">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
          
          <div class="col-md-5">
            <img src="unnamed.gif" alt="check" style="height: 580px; width: 440px; padding-bottom: 5%;">
          </div>
        </div>
      </div>


  

    <div class="container"  style="margin-top: 10%;">
        <div class="row align-items-center">
            <!--Social-->
            <div class="col-lg-12">
                <div class="footer-social text-center ">
                    <ul class="list-unstyled" style="color: black;">
                        <li><a class="bgo wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-facebook-f" style="color: black;"></i></a></li>
                        <li><a class="bgo wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-twitter" style="color: black;" ></i></a></li>
                        <li><a class="bgo wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-google-plus-g" style="color: black;"></i></a></li>
                        <li><a class="bgo wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-linkedin-in" style="color: black;"></i></a></li>
                        <li><a class="bgo wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-instagram" style="color: black;"></i></a></li>
                        <li><a class="bgo wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-pinterest-p" style="color: black;"></i></a></li>
                    </ul>
                </div>
            </div>
            <!--Text-->
            <!-- <div class="col-lg-6 text-center text-lg-right">
                <p class="company-about fadeIn">&copy; 2023 MegaOne. Made With Love By <a href="javascript:void(0);">Themesindustry</a>
                </p>
            </div> -->
        </div>
    </div>
</body>
</html>