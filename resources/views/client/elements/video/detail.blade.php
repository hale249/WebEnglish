@extends('client.layouts.app')

@section('title', 'Học qua video')

@section('content')
    <div class="container container__background ">
        <div class="">
            <p class=" mb-0 pt-3 text-info">Seminar sets safe food market goals</p>
            <div class="text-center">
                <video width="520" height="440" controls>
                    <source src="{{ asset('video/news/bai111.mp4') }}"
                            type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="p-3 font-size">
                <p>Hello. You're watching the Economy Report from
                    English 123.</p>

                <p>Ho Chi Minh City Health Department officials have
                    urged consumers to buy products with a clear origin
                    sold at clean and hygienic trading places to ensure
                    food safety.</p>

                <p> Speaking at a seminar titled “For a safe food
                    market” in Ho Chi Minh City last Saturday, Nguyen
                    Thi Huynh Mai, deputy head of the department's Food
                    Safety and Hygiene Division, said consumers should
                    report any selling place with unsafe products or
                    those with unclear origin to authorized agencies.</p>
            </div>
        </div>
    </div>
@endsection
