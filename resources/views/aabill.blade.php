<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{URL::asset('css/index.css')}}">
    <link rel="stylesheet" href="{{URL::asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <script src="{{URL::asset('js/jquery min-3.3.1.js')}}"></script>
    <title>Aaron Bill Domingo</title>
    </head>
    <body id='foo'>

    <div class="wrapper">
            <nav id='nav-tablet'>
                    <a href="#one" id="home">
                         Home</a>
                    <a href="#two" id="about">
                        About</a>
                    <a href="#three" id="resume">
                        Resume</a>
                    <a href="#four" id="contact">
                        Contact</a>
            </nav>
        <div class="nav">

            <div class="burger">
                <span class="line"></span>
                <span class="line"></span>
                <!-- <span class="line"></span> -->
            </div>


        </div>

        <div class="burger-dropdown" >
            <a href="#one" id="home-burger" >Home</a>
            <a href="#two" id="about-burger" >About</a>
            <a href="#three" id="resume-burger" >Resume</a>
            <a href="#four" id="contact-burger" >Contact</a>
        </div>

        <section class="item-1" id="one">
            <div class="home-div">
                <div class="home-main">
                        <h1>I'm Aaron Bill Domingo.</h1>
                </div>

                <div class="home-submain">
                <p>
                    I'm a
                    <span class='text-lit'>Fresher</span> who needs a work relating to
                    <span class='text-lit'>Web Development</span>
                    from the <span class="text-lit">Philippines.</span>
                    Learn more <a href="#two"><span class="text-lit">about me.</span></a>
                </p>
                </div>

                <div class="home-links">
                    <a href="https://twitter.com/R_on_Bill"
                        target="_blank">
                        <i class='fa fa-twitter'></i></a>
                    <a href="https://fb.com/aabill.domingo" target="_blank">
                        <i class='fa fa-facebook'></i></a>
                    <a href="https://instagram.com/aabb.domingo" target="_blank">
                        <i class='fa fa-instagram'></i></a>
                </div>

            </div>


        </section>
        <section class="item-2" id="two">

            <div class="container-about">

            <div class="profile-pic-1">
                <div>

                </div>
            </div>

            <div class="about-me">
                <h2>About Me</h2>
                <p>I'm currently searching and hoping to get a job.
                When I'm not coding, I like to play ping-pong
                    or dota.
                </p>
            </div>

            <div class="contact-details">
                <h2>Contact Details</h2>
                <p>Aaron Bill Domingo</p>
                <p>Bambang, Nueva Vizcaya</p>
                <p>Philippines</p>
                <p>+63 961 139 6893</p>
                <p>domingoaaronbill@gmail.com</p>

            </div>

            <div class="download-resume">
                <a href="#" download>
                    <i class="fa fa-download"  aria-hidden="true"> </i>
                    &nbsp;&nbsp;&nbsp; Download Resume</a>
            </div>

            </div>



        </section>
        <section class="item-3" id="three">

            <div class="container-resume">
                <div class='about-title' id='st'>
                    <legend>Skills <span></span></legend>

                </div>
                <div id='prog'>
                    <h2>Programming</h2>
                    <p>PHP</p>
                        <div class="progress-bar">
                            <span style="width: 25%"></span>
                        </div>
                        <br>
                    <p>JAVASCRIPT</p>
                        <div class="progress-bar">
                            <span style="width: 25%"></span>
                        </div>
                        <br>
                    <p>HTML & CSS</p>
                        <div class="progress-bar">
                            <span style="width: 50%"></span>
                        </div>
                    <br>

                </div>

                <div id="db">
                    <h2>Databases</h2>
                    <p>MYSQL</p>
                        <div class="progress-bar">
                            <span style="width: 30%"></span>
                        </div>
                    <br>
                </div>

                <div id='frame-tools'>
                    <h2>Frameworks & Toolkits</h2>

                    <p>Laravel</p>
                        <div class="progress-bar">
                            <span style="width: 30%"></span>
                        </div>
                    <br>
                    <p>Jquery</p>
                        <div class="progress-bar">
                            <span style="width: 50%"></span>
                        </div>
                    <br>
                    <p>Bootstrap</p>
                        <div class="progress-bar">
                            <span style="width: 30%"></span>
                        </div>
                    <br>

                </div>
                <div id="hr">
                        <hr>
                </div>
                <div class='about-title' id='ed'>

                    <legend> Education <span></span></legend>
                </div>
                    <div class="education" id='smu'>
                        <h2>Saint Mary's University</h1>
                        <p> BS in Computer Engineering | 2014 ~ 2019</p>
                        <p style="right:0; width: 100%; font-style: italic; font-size: 12px;">Philippines</p>
                    </div>



            </div>
        </section>
        <section class="item-4" id="four">
            <div class="container-contact">

                <div class="tell-me">
                    <div>
                    <h1><span style="color: rgb(145, 145, 145);">Tell me something</span> </h1>
                    <p>Things like...</p>
                    <p>your secrets. &nbsp;<span style="color:rgb(145, 145, 145);">Nice.</span></p>
                    </div>
                    <div class='envelope'>
                        <div>
                            <span style="color: rgb(61, 61, 61);"><i class="fa fa-envelope fa-3x" aria-hidden="true"></i></span>
                        </div>
                    </div>
                </div>
            <form action="/send" method="POST">
                <div class="form">
                    @csrf
                        <div>
                        <label for="name">Name <span style="color:rgb(119, 41, 41);">*</span></label>

                        <input type="text" name='name' id='name' value="{{old('name')}}">

                        <label for="email">Email <span style="color: rgb(119, 41, 41);">*</span></label>

                        <input type="email" name="email" id="email" value="{{old('email')}}">

                        <label for="subject">Subject</label>

                        <input type="text" name='subject' id='subject' value="{{old('subject')}}">
                        </div>
                        <div>
                        <label for="message">Message <span style="color: rgb(119, 41, 41);">*</span></label>

                        <textarea name="message" id="message" rows="10" value="{{old('message')}}"></textarea>

                        <div class="submit" id='button'>
                        <button type='submit'>Submit</button>
                        </div>
                        </div>

                </div>
                </form>
                <br><br>

                @if ($errors->any())
                    <script>
                        $(document).ready(function(){
                            $('html, body').animate({
                            scrollTop: $('#errormsg').offset().top});
                        });
                    </script>
                <div class="alert-message"
                style="color: rgb(119, 41, 41);" id='errormsg'>

                        @foreach ($errors->all() as $error)
                            <p>{{$error}}</p>
                        @endforeach

                </div>
                @endif

                @if (Session::has('success'))
                <script>
                        $(document).ready(function(){
                            $('html, body').animate({
                            scrollTop: $('#successmsg').offset().top});
                            $('#button').hide();
                        });
                </script>
                <div class="alert-message"
                style="color: #6d8f88;" id='successmsg'>

                    <p>{{Session::get('success')}}</p>

                </div>
                @endif
            </div>

            <div class="footer">
                    <a href="https://twitter.com/R_on_Bill"
                        target="_blank">
                        <i class='fa fa-twitter fa-lg'></i>
                    </a>
                    <a href="https://fb.com/aabill.domingo"
                        target="_blank">
                        <i class='fa fa-facebook fa-lg'></i>
                    </a>
                    <a href="https://instagram.com/aabb.domingo"
                        target="_blank">
                        <i class='fa fa-instagram fa-lg'></i>
                    </a>
            </div>

            <div class='arrow-up'>
                <a href="#one">
                    <i class="fa fa-arrow-up fa-2x" aria-hidden="true"></i>
                </a>
            </div>
        </section>


    </div>

    <script src="{{URL::asset('js/index.js')}}"></script>


</body>
</html>
