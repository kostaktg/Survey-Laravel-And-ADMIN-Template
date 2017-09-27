<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('survey/css/style.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('survey/css/wizzard.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:700" rel="stylesheet">
<!-- <script>
  function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 0);
  window.onunload=function(){null};
</script> -->
</head>
<body>


@yield('content')



    <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
    <script src="{{url('survey/js/jquery.bxslider.min.js')}}"></script>
    <link href="{{url('survey/css/jquery.bxslider.css')}}" rel="stylesheet" />

<script src="{{url('survey/js/slider.js')}}"></script>
<script>
        $( document ).ready(function() {
            $( ".hover-information" ).hover(
              function() {
                $( this ).find("div").stop().fadeIn();
                console.log('hello');
            }, function() {
                $( this ).find("div").stop().fadeOut();
            }
            );
        });
    </script>
    
</body>
</html>