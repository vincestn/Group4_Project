@extends('layouts.adminMain')

@section('websiteName')
    QuaraNtimes
@endsection

@section('cover')
    <div class="container-xxl" style="background-image: url(img/cover-main.jpg); 
    height: 350px; background-repeat: no-repeat; background-size:cover;">
@endsection

@section('coverTitle')
    COVID-19 WORLD COUNT
@endsection

@section('subTitle')
    133,018,307
@endsection

 
@section('postL1')
    <a href="{{ url('/postLN1') }}">
        <h2 style="font-size: 45px; margin-top: 30px; margin-bottom: 10px;">Philippines' COVID-19 deaths breach
         14,000 as country logs 6,414 new cases </h2>
    </a>
    <h4 style=" margin-top: 10px;">The Philippines now has 819,164 cases of COVID-19 </h3>
    <p style="font-style: italic;">
        Posted by Calayo, Aumi Marie L. on April 08, 2021 · 4 mins read 
        </p>
@endsection    

@section('postL2')
    <a href="{{ url('/postLN2') }}">
        <h2 style="font-size: 45px; margin-top: 30px; margin-bottom: 10px;">Philippines man dies after being forced
         to do 300 squats for breaking Covid-19 curfew </h2>
    </a>
    <h4 style=" margin-top: 10px;">A tough approach to Covid restrictions</h3>
    <p style="font-style: italic;">
        Posted by Calayo, Aumi Marie L. on April 08, 2021 · 8 mins read
        </p>
@endsection  

@section('postI1')
    <a href="{{ url('/postIN1') }}">
        <h2 style="font-size: 45px; margin-top: 30px; margin-bottom: 10px;">Cambodia among first countries to receive
         COVID-19 vaccines from COVAX Facility </h2>
    </a>
    <h4 style=" margin-top: 10px;">3 March 2021 Joint News Release Phnom Penh International Airport</h3>
    <p style="font-style: italic;">
        Posted by Caandoy, Anna Lorraine B. on April 10, 2021 · 2 mins read
        </p>
@endsection  

@section('postI2')
    <a href="{{ url('/postIN2') }}">
        <h2 style="font-size: 45px; margin-top: 30px; margin-bottom: 10px;">Lao PDR Prepares for Roll-out of 
        COVID-19 Vaccines</h2>
    </a>
    <h4 style=" margin-top: 10px;">Vaccines will be provided first to those at highest risk of getting the disease</h3>
    <p style="font-style: italic;">
        Posted by Caandoy, Anna Lorraine B. on April 10, 2021 · 5 mins read
        </p>
@endsection  