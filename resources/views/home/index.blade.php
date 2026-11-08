{{-- <!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>Architecture Landing</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-50 font-sans">


     <!-- Header !-->
    @include('home.sections.Header')

    <!--  HERO  !-->
    @include('home.sections.hero')


    <div class="container mx-auto">
         <!-- projects !-->
        @include('home.sections.projects')


         <!-- Slider ranom !-->
        @include('home.sections.random-projects')

         <!-- companies !-->
        @include('home.sections.companies')


         <!-- about landing
        @include('home.sections.aboutlanding')

         <--! faquestion !-->
        @include('home.sections.faq')

    </div>

    @include('home.sections.footer')

</body>

</html>  --}}


@extends('layouts.app')

@section('title', ' صفحه اصلی ')

@section('content')

    <!--  HERO  !-->
    @include('home.sections.hero')


    <div class="container mx-auto">

  

        <!-- projects !-->
        @include('home.sections.projects')

              {{-- services --}}
        @include('home.sections.services')


        <!-- companies !-->
        @include('home.sections.companies')

        {{-- @if(app()->getLocale() === 'fa') --}}
        {{-- about 5 --}}
        @include('home.sections.aboutlanding')
        {{-- @endif --}}

        
        <!-- Slider ranom !-->
        {{-- @include('home.sections.random-projects') --}}

        {{-- LETS CONNECT --}}
        <div class="bg-[#FAFAF8]" >
        @include('home.sections.Letsconnect')

        </div>

        {{-- faq --}}
        @include('home.sections.faq')

    </div>


@endsection
