@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row align-items-center">
        <div class="col-md-4">
            <img src="{{asset('img/profile2.jpeg')}}" class="img-fluid rounded">
        </div>
        <div class="col-md-8">
            <h1 class="mb-4">About Me</h1>
            <p>
                Saya seorang pemuda berusia 17 tahun yang punya semangat besar untuk menyelami dunia teknologi, terutama coding.    
            </p>
            <p>
                Sejak mulai belajar ngoding di tahun 2024, hidup saya berubah—dari sekadar penasaran, kini saya benar-benar jatuh cinta dengan proses membangun sesuatu dari nol menggunakan kode. Awalnya, saya mencoba bahasa seperti PHP, Go, dan Laravel, dan akhirnya menemukan passion saya sebagai backend developer.
            </p>
            <p>
                Saya suka mengutak-atik logika di balik layar—mengatur database, membuat API, dan memastikan sistem berjalan mulus—karena rasanya seperti memecahkan teka-teki yang menantang sekaligus memuaskan.
            </p>
            <blockquote class="blockquote mt-5" >
                <p class="mb-0">
                    Computers are fast; developers keep them slow.
                </p>
                <footer class="blockquote-footer">Anonymous</footer>
            </blockquote>
        </div>
    </div>
</div>
@endsection

