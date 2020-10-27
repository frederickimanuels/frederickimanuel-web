<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        
        {{-- Import CSS --}}
        <link rel="stylesheet" type="text/css" href="{{ url('css/contactstyle.css') }}"/>

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
        <div class="bg-light" style="width 100%;">
            <div class="container pt-5 pb-5">
                <div class="row pt-4">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <table style="height: 100%; width: 100%">
                            <tbody>
                                <td>
                                    <div class="row align-middle"  style="font-weight: bold; font-size: 3em;">
                                        It is Good to Know Each Other
                                    </div>
                                
                                    <div class="row align-middle text-black-50" style="font-weight: semibold; font-size: 1.5em">
                                        And make something great together
                                    </div>
                                </td>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
        

        {{-- Content --}}
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 contact-text">
                    <h4 style="font-weight: semibold; font-size:2em;">Contact</h4>

                    <h5 class="text-info">The paragraph has not been set</h5>
                    
                    <div class="mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu ante vitae purus consectetur tempor. Etiam eleifend in leo eget molestie. Donec diam eros, rutrum at ultrices in, tristique eu ante. Proin vitae purus molestie ipsum dapibus consectetur tempor vel ipsum. Suspendisse ullamcorper a justo nec suscipit. Nunc finibus libero sed augue auctor venenatis. Duis scelerisque tristique quam eget porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris nulla enim, tincidunt eget eros laoreet, porta dictum lorem. Proin eleifend, velit et ullamcorper egestas, odio tortor hendrerit metus, at rhoncus neque felis faucibus dui. Aenean ante nisl, pharetra sit amet aliquet sit amet, efficitur eu purus. Quisque sodales viverra ex, nec mattis velit sodales quis. Nullam quis erat sit amet risus condimentum venenatis non ut dui. Maecenas faucibus, nulla porttitor venenatis tristique, augue quam dapibus ligula, sit amet bibendum elit risus ac dolor.
                    </div>
                    
                    <div class="container mt-3 contact-link">
                        <div class="row">
                            <a href="https://www.linkedin.com/in/frederickimanuels/" target="_blank">Linkedin</a>
                        </div>
                        <div class="row mt-1">
                            <a href="https://github.com/frederickimanuels" target="_blank">Github</a>
                        </div>
                        <div class="row mt-1">
                            <a href="https://instagram.com/frederick_imanuel" target="_blank">Instagram</a>
                        </div>
                        <div class="row mt-2">
                            <button class="btn btn-outline-primary copy-email" data-clipboard-text="frederickimanuels@gmail.com">
                                <span>frederickimanuels@gmail.com</span>
                            </button>
                        </div>
                        
                        
                    </div>
                    
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>

        {{-- Content --}}
        

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        -->



        {{-- Copy to Clipboard --}}
        <script src="{{ url('js/clipboard.min.js')}}"></script>
        <script>
            new ClipboardJS('.btn');
        </script>
    </body>
</html>

