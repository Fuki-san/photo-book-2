@extends('layouts.main')

@section('title', 'photobook')

@section('content')
    <div class="container">
        <header id="header">
            <h1 class="site-title"><a href="#"><img src="img/logo.svg" alt=""></a></h1>
        </header>

        <main>

            <div id="mainvisual">
                <img src="img/mainvisual.jpg" alt="">
            </div>

            <section id="index">
                <div class="inner">
                    <h2 class="sec-title">INDEX</h2>
                    <ol class="index-list">
                        <li>タイトルタイトルタイトル</li>
                        <li>タイトルタイトルタイトル</li>
                        <li>タイトルタイトルタイトル</li>
                        <li>タイトルタイトルタイトル</li>
                        <li>タイトルタイトルタイトル</li>
                    </ol>
                </div>
            </section>

            <section id="photo">
                <div class="inner">

                </div>
            </section>
        </main>

        <footer id="footer"></footer>

    </div>
@endsection
