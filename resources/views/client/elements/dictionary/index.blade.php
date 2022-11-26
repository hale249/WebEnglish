@extends('client.layouts.app')

@section('title', 'Tra từ điển')

@section('content')
    <div class="container container__background">
        <h2 class="heading__h">Tra từ điển</h2>
        <form action="{{ route('client.dictionary.index') }}">
            <div class="input-group pb-3 d-flex justify-content-center">
                <input type="text" name="search" class="container__form-input border rounded-start" style="width: 50%"
                       placeholder="Tìm kiếm tiếng anh" aria-label="Recipient's username"
                       value="{{request()->query('search')}}"
                       aria-describedby="basic-addon2">
                <button type="submit" class="input-group-text diction_span" id="basic-addon2"><i
                        class="bi bi-search seach__icon"></i>
                    Tìm kiếm
                </button>
            </div>
        </form>
        <div class="container pb-5">
            @if(count($dictionaries) > 0)
                <div class="pt-5 pb-3 border-bottom">
                    <p class="font-size">Ý nghĩa của <strong class="fs-4 text
                  text-danger">{{ request()->query('search') }}</strong> trong tiếng Anh</p>
                </div>

                <div class="h4 pb-2 mb-4 border-bottom border-danger">
                    <h2 class="text-uppercase pt-4">{{ request()->query('search') }}</h2>
                    <p class="font-size">{{ !empty($dictionaries[0]['phonetic']) ? $dictionaries[0]['phonetic'] : '' }}</p>
                    <h4>Từ liên quan</h4>
                    @if(!empty($dictionaries[0]['meanings']))
                        @foreach($dictionaries[0]['meanings'] as $meaning)
                            @if(!empty($meaning['definitions']))
                                @foreach($meaning['definitions'] as $item)
                                    <p class="font-size"><small>{{ $item['definition'] ?? '' }}</small></p>
                                @endforeach
                            @endif
                        @endforeach
                    @endif
                </div>
            @endif

            <div class="bg-success p-2 text-dark bg-opacity-10 pb-5">
                <h2 class="heading__h">Các tìm kiếm phổ biến</h2>
                <p>Từ điển tiếng Anh-Việt:</p>
                <div class="d-flex justify-content-around bg-light">
                    <ul class="mr-5 diction__list">
                        <li class="">
                            <a href="{{ route('client.dictionary.index', ['search' => 'approach']) }}"
                               class="fs-5 text text-decoration-underline">
                                approach
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('client.dictionary.index', ['search' => 'arrange']) }}"
                               class="fs-5 text text-decoration-underline">
                                arrange
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('client.dictionary.index', ['search' => 'consist']) }}"
                               class="fs-5 text text-decoration-underline">
                                consist
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('client.dictionary.index', ['search' => 'influence']) }}"
                               class="fs-5 text text-decoration-underline">
                                influence
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('client.dictionary.index', ['search' => 'claim']) }}"
                               class="fs-5 text text-decoration-underline">
                                claim
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="{{ route('client.dictionary.index', ['search' => 'capture']) }}"
                               class="fs-5 text text-decoration-underline">
                                capture
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('client.dictionary.index', ['search' => 'adopt']) }}"
                               class="fs-5 text text-decoration-underline">
                                adopt
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('client.dictionary.index', ['search' => 'define']) }}"
                               class="fs-5 text text-decoration-underline">
                                define
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('client.dictionary.index', ['search' => 'charge']) }}"
                               class="fs-5 text text-decoration-underline">
                                charge
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('client.dictionary.index', ['search' => 'determine']) }}"
                               class="fs-5 text text-decoration-underline">
                                determine
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
