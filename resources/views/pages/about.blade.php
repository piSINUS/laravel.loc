@extends('layouts.layout')
@section('title')@parent:: About page @endsection
@section('content')
    <style>
        .selector{
            width: 100px;
            height: 100px;
            background-color: blueviolet;
            margin: 10px;
        }
        .Chokky{
            font-family:cursive;
            color:fuchsia ;
        }
    </style>
        <!-- @{{title}} чтобы блейд не читал уярим собакук перед секобками -->

<div class="selector"></div>
    <div class="selector"></div>
<div class = 'Chokky'><h2>Я шел по мосткам, и вдруг –Там, в глубине потока,Сквозят водяные цветы.</h2></div>
       
    <script > 
        gsap.fromTo('.selector',3,{x:0,y:1},{x:500, ease:Bounce.easeOut});
    </script>
@endsection


