@extends('layouts.main')

@section('title, Home')

@section('main-content')
    <main>
        <div class="jumbotron"></div>
        <div class="container">
            <div class="content">
                <h4>CURRENT SERIES</h4>
                </>
                <div class="load-more">
                    <a href="#">LOAD MORE</a>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ul>
                    <li>
                        <a :href="link.url">
                            <img :src="`../src/assets/img/${link.image}`" :alt="link.text">
                            <h3>{{ link . text }}</h3>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </main>
@endsection
