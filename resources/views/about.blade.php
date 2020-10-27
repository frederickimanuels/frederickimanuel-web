<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        
        {{-- Import CSS --}}
        <link rel="stylesheet" type="text/css" href="{{ url('css/aboutstyle.css') }}"/>

        {{-- Import Rubik Font --}}
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


        <title>Frederick Imanuel</title>
    </head>
    <body class="pb-5" style="font-family: 'Rubik', sans-serif;">

        {{-- Navbar --}}
        <nav class="navbar fixed-top navbar-light bg-white py-0">
            <a class="navbar-brand mx-auto" href="{{ url('/')}}">FREDERICK</a>
        </nav>

        {{-- Banner --}}
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-1"  style="height: 5vh"></div>
                <div class="col-md-3"  style="height: 100vh">
                    <table style="height: 100%; width: 100%">
                        <tbody>
                            <td class="align-middle">
                                <img class="profile-image rounded-circle" src="{{URL::asset('img/profile-image.jpg')}}" >
                            </td>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-1"  style="height: 5vh"></div>
                <div class="col-md-7" style="height: 100vh">
                    <table style="height: 100%; width: 100%">
                        <tbody>
                            <td>
                                <div class="row align-middle"  style="font-weight: bold; font-size: 3em;">
                                    Frederick Imanuel Setiawan
                                </div>
                            
                                <div class="row align-middle text-black-50" style="font-weight: semibold; font-size: 1.5em">
                                    Undergraduate Student
                                </div>
                            </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Content --}}
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">

                    {{-- About --}}
                    <div class="about-text">
                        <h4 style="font-weight: semibold; font-size:2em">About</h4>

                        <div class="mt-3">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu ante vitae purus consectetur tempor. Etiam eleifend in leo eget molestie. Donec diam eros, rutrum at ultrices in, tristique eu ante. Proin vitae purus molestie ipsum dapibus consectetur tempor vel ipsum. Suspendisse ullamcorper a justo nec suscipit. Nunc finibus libero sed augue auctor venenatis. Duis scelerisque tristique quam eget porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris nulla enim, tincidunt eget eros laoreet, porta dictum lorem. Proin eleifend, velit et ullamcorper egestas, odio tortor hendrerit metus, at rhoncus neque felis faucibus dui. Aenean ante nisl, pharetra sit amet aliquet sit amet, efficitur eu purus. Quisque sodales viverra ex, nec mattis velit sodales quis. Nullam quis erat sit amet risus condimentum venenatis non ut dui. Maecenas faucibus, nulla porttitor venenatis tristique, augue quam dapibus ligula, sit amet bibendum elit risus ac dolor.
                        </div>

                        <div class="mt-3">
                            Quisque a quam non augue gravida commodo a vel neque. Donec tortor nisl, porttitor vitae dui scelerisque, accumsan mollis leo. Quisque bibendum ante augue, sit amet porta ligula dignissim et. Nullam sagittis ornare purus. Maecenas at scelerisque orci. Quisque iaculis laoreet lectus lacinia venenatis. Maecenas scelerisque porta vulputate. Suspendisse dapibus placerat arcu at rhoncus. Vestibulum in metus ullamcorper, vestibulum tortor eget, blandit nibh. Sed ornare, purus ac convallis varius, est odio vestibulum leo, non tristique quam turpis non dolor. Mauris vel euismod nunc. Proin feugiat diam ac felis interdum, eget venenatis tellus mollis. Morbi laoreet tellus sed lacus tincidunt malesuada. Maecenas quis vestibulum elit, in blandit urna.
                        </div>

                        <div class="mt-3">
                            Donec nibh nisi, dapibus sit amet orci sed, suscipit elementum ante. Mauris maximus massa est, sed sagittis eros maximus vel. Ut a ullamcorper eros, sed semper tellus. Praesent non eleifend ipsum, quis porta purus. Sed fringilla mauris in urna imperdiet, vitae posuere arcu viverra. Cras pretium est ut urna ultrices, et hendrerit mauris convallis. Nunc tempus rhoncus risus a tincidunt. Nulla auctor velit eu egestas luctus.
                        </div>

                        <div class="mt-3">
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed dapibus semper scelerisque. Cras eu urna vel sapien vehicula volutpat a quis purus. Aenean a efficitur tellus. Ut facilisis scelerisque euismod. Donec venenatis velit risus, quis faucibus est fermentum a. Sed et scelerisque ante. Vestibulum maximus odio ut cursus iaculis. Etiam lobortis turpis vel pulvinar auctor. Donec id elit quis libero efficitur tempus vitae eget purus. Nunc ut vehicula purus. Maecenas auctor urna diam, eu porta nunc pellentesque eget. Vestibulum cursus leo augue. Suspendisse id convallis odio. Vivamus luctus est at magna suscipit, vitae varius urna luctus.
                        </div>

                        <div class="mt-3">
                            Sed vulputate volutpat purus, quis efficitur justo porta eget. Integer vel magna gravida, pulvinar risus vel, placerat mauris. Cras dapibus ligula a lacus faucibus venenatis. Ut luctus purus non tortor vulputate hendrerit. Praesent vulputate commodo odio. Proin auctor non turpis ac blandit. Nam volutpat, velit a feugiat pretium, nisl arcu tristique orci, malesuada laoreet sapien tortor eget nulla. Phasellus congue sapien leo, sit amet blandit nibh eleifend ut. Suspendisse nec nisl tristique lorem pellentesque viverra sed sed dui. Nulla mauris quam, elementum sed mi id, blandit ultricies augue. Etiam luctus ultrices erat. Vivamus blandit pharetra orci nec ultrices. Pellentesque vitae sapien tempor, tristique mauris a, posuere leo. Suspendisse id dolor vel ipsum rutrum blandit eu at sapien. Sed dapibus tortor et ornare varius. Suspendisse a neque orci.
                        </div>
                    </div>

                    {{-- Resume Download --}}
                    <div class="mt-4">
                        <a href="#" class="btn about-text btn-outline-primary">My Resume</a>
                    </div>

                    {{-- Blog Updates --}}
                    
                <div class="col-md-2"></div>
            </div>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        -->
    </body>
</html>