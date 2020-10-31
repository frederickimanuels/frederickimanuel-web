<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        
        {{-- Import CSS --}}
        <link rel="stylesheet" type="text/css" href="{{ url('css/indexstyle.css') }}" />

        {{-- Import Rubik Font --}}
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


        <title>Frederick Imanuel</title>
    </head>
    <body class="bg-light">

        <div style="width:100%; position:fixed; z-index:999999; left:0;bottom:0;">
            <div class="row" style="width: 100%;">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <table style="height: 100%;width:100%">
                        <tbody>
                            <tr>
                                <td class="align-bottom">
                                    <div class="alert alert-primary" role="alert">
                                        This website is still under development, if you want to reach me please go through
                                        <a href="https://www.linkedin.com/in/frederickimanuels/" class="alert-link" target="_blank">Linkedin</a>.
                                         You can also download my resume <a href="{{url('pdf/Curriculum_Vitae.pdf')}}" class="alert-link" target="_blank">here</a>. Thank you!
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>


        <div class="bg-light" style="width:100%;height:100vh; position: fixed;left:0px;top:0px;z-index:-1">
            <div class="row" style="width:100%;height:100vh">
                <div class="col-md-7">
                </div>
                <div class="col-md-5">
                    <table style="height: 100%;width:100%">
                        <tbody>
                            <tr>
                                <td class="align-bottom">
                                    <img style="max-width: 160%; height:auto;" src="{{URL::asset('img/profile-gradient.png')}}">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class="container" style="font-family: 'Rubik', sans-serif; height: 100vh;">
            <div class="row" style="height: 100vh;">
                <div class="col-md-3"></div>
                <div class="col-md-3" style="height: 100%;width:100%">
                    <table style="height:100%; width:100%">
                        <tbody>
                            <tr>
                                <td class="align-middle">
                                    <div class="row">
                                        <a class="name-1" style="text-decoration: none; font-size:4em; font-weight:bold" 
                                        href="{{ url('/about')}}"><span>Frederick</span></a>
                                    </div>
                                    <div class="row">
                                        <a class="name-2" style="text-decoration: none; font-size:3.5em; font-weight:bold" 
                                        href="{{ url('/projects')}}"><span>Imanuel</span></a>
                                    </div>
                                    <div class="row">
                                        <a class="name-3" style="text-decoration: none; font-size:4em; font-weight:bold" 
                                        href="{{ url('/contact')}}"><span>Setiawan</span></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <div class="col-md-6"></div>
        </div>

        
        












            {{-- <table style="height: 100%; width: 100%">
                <tbody>
                    <td class="align-middle">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <a class="name-1" style="text-decoration: none; font-size:4em; font-weight:bold" 
                                href="{{ url('/about')}}"><span>Frederick</span></a>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <a class="name-3" style="text-decoration: none; font-size:4em; font-weight:bold" 
                                href="{{ url('/contact')}}"><span>Setiawan</span></a>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </td>
                </tbody>
            </table> --}}
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