<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        
        {{-- Import CSS --}}
        <link rel="stylesheet" type="text/css" href="{{ url('css/projectsstyle.css') }}"/>

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
                                        Projects
                                    </div>
                                
                                    <div class="row align-middle text-black-50" style="font-weight: semibold; font-size: 1.5em">
                                        List of projects I worked on
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
        <div class="container pt-1">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="list-group">

                        @foreach($projects as $project)
                        <div class="row pt-4 pb-5 bg-transparent" style="width: 100%; border-bottom: 1px solid lightgray">
                            <div class="col-md-4">
                                <a href="{{$project -> link}}" target="_blank">
                                    <img class="project-image" src="{{URL::asset('img/projects/'.$project -> imageurl ) }}" >
                                </a>
                            </div>
                            <div class="col-md-8">
                                <table style="width: 100%">
                                    <tbody>
                                        <tr>
                                            <a href="{{$project -> link}}" target="_blank">
                                                <div class="align-baseline" style="font-weight: bold; 
                                                font-size: 2em;">
                                                    {{$project -> title}}
                                                </div>
                                            </a>
                                        </tr>
                                        <tr>
                                            <a href="{{$project -> link}}" class="align-baseline" style="font-size: 1em" target="_blank">
                                                {{$project -> link}}
                                            </a>
                                        </tr>
                                        <tr>
                                            <div class="align-baseline" style="font-size: 1.2em">
                                                {{$project -> description}}
                                            </div>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @endforeach


                    </div>
                </div>
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