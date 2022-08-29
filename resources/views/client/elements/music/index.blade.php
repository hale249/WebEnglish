@extends('client.layouts.app')

@section('title', 'Nghe nhạc')

@section('content')
    <div class="container container__background">
        <div>
            <div>
                <div class="pb-5">
                    <h3 class="heading__h border-bottom text-danger">Học tiếng Anh qua bài hát
                    </h3>
                    <div>
                        <div class="d-flex align-items-center">
                            <a class="lesten" href="{{ route('client.music.detail', 1) }}"><img class="border shadow-sm p-3 m-2 bg-body rounded" src="{{ asset('images/music/bai226.jpg') }}" alt=""  width="160px" height="120px"></a>
                            <div class="">
                                <div class="border-bottom pb-3">
                                    <a class="lesten" href="{{ route('client.music.detail', 1) }}"><p class="font-size mb-0 text-dark">
                                            If You're Not The One</p></a>
                                    <span>If you're not the one, then why does my soul feel glad today?
                                            If you're not the one, then why does my hand fit yours this way?
                                            If you are not mine, then why does your heart return my call?
                                            If you are not mine, would I have the strength to stand at all?</span>
                                </div>
                                <div>
                                    <span class="text-muted"><i class="bi bi-eye-fill p-1"></i>643</span>
                                    <span class="text-muted p-3"><i class="bi bi-chat-right-dots-fill p-1"></i>132</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center bg-success p-2 text-dark bg-opacity-10">
                            <a class="lesten" href="{{ route('client.music.detail', 1) }}"><img class="border shadow-sm p-3 m-2 bg-body rounded" src="{{ asset('images/music/bai225.jpg') }}" alt=""   width="160px" height="120px"></a>
                            <div class="">
                                <div class="border-bottom pb-3 ">
                                    <a class="lesten" href="{{ route('client.music.detail', 1) }}"><p class="font-size mb-0 text-dark">Let It Go</p></a>
                                    <span>Let it go, let it go.
                                            Can’t hold you back anymore.
                                            Let it go, let it go.
                                            Turn my back and slam the door.</span>
                                </div>
                                <div>
                                    <span class="text-muted"><i class="bi bi-eye-fill p-1"></i>1243</span>
                                    <span class="text-muted p-3"><i class="bi bi-chat-right-dots-fill p-1"></i>56</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <a class="lesten" href="{{ route('client.music.detail', 1) }}"><img class="border shadow-sm p-3 m-2 bg-body rounded" src="{{ asset('images/music/bai224.jpg') }}" alt=""   width="160px" height="120px"></a>
                            <div class="">
                                <div class="border-bottom pb-3 ">
                                    <a class="lesten" href="{{ route('client.music.detail', 1) }}"><p class="font-size mb-0 text-dark">
                                            Titanium</p></a>
                                    <span>You shout it out.
                                            But I can't hear a word you say</span>
                                </div>
                                <div>
                                    <span class="text-muted"><i class="bi bi-eye-fill p-1"></i>642</span>
                                    <span class="text-muted p-3"><i class="bi bi-chat-right-dots-fill p-1"></i>56</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center bg-success p-2 text-dark bg-opacity-10">
                            <a class="lesten" href="{{ route('client.music.detail', 1) }}"><img class="border shadow-sm p-3 m-2 bg-body rounded" src="{{ asset('images/music/bai223.jpg') }}" alt=""   width="160px" height="120px"></a>
                            <div class="">
                                <div class="border-bottom pb-3 ">
                                    <a class="lesten" href="{{ route('client.music.detail', 1) }}"><p class="font-size mb-0 text-dark">Let Me Go</p></a>
                                    <span>Love that once hung on the wall</span>
                                </div>
                                <div>
                                    <span class="text-muted"><i class="bi bi-eye-fill p-1"></i>4432</span>
                                    <span class="text-muted p-3"><i class="bi bi-chat-right-dots-fill p-1"></i>424</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <a class="lesten" href="{{ route('client.music.detail', 1) }}"><img class="border shadow-sm p-3 m-2 bg-body rounded" src="{{ asset('images/music/thump.jpg') }}" alt=""   width="160px" height="120px"></a>
                            <div class="">
                                <div class="border-bottom pb-3 ">
                                    <a class="lesten" href="{{ route('client.music.detail', 1) }}"><p class="font-size mb-0 text-dark">
                                            One More Night</p></a>
                                    <span>You and I go hard, at each other like we going to war.
                                            You and I go rough, we keep throwing things and slamming the doors...</span>
                                </div>
                                <div>
                                    <span class="text-muted"><i class="bi bi-eye-fill p-1"></i>4313</span>
                                    <span class="text-muted p-3"><i class="bi bi-chat-right-dots-fill p-1"></i>565</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center bg-success p-2 text-dark bg-opacity-10">
                            <a class="lesten" href=""><img class="border shadow-sm p-3 m-2 bg-body rounded" src="{{ asset('images/music/thump (1).jpg') }}" alt=""   width="160px" height="120px"></a>
                            <div class="">
                                <div class="border-bottom pb-3 ">
                                    <a class="lesten" href="{{ route('client.music.detail', 1) }}"><p class="font-size mb-0 text-dark">Counting Stars</p></a>
                                    <span>Lately, Ive been, Ive been losing sleep Dreaming about the things that we could be</span>
                                </div>
                                <div>
                                    <span class="text-muted"><i class="bi bi-eye-fill p-1"></i>122423</span>
                                    <span class="text-muted p-3"><i class="bi bi-chat-right-dots-fill p-1"></i>564</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <a class="lesten" href="{{ route('client.music.detail', 1) }}"><img class="border shadow-sm p-3 m-2 bg-body rounded" src="{{ asset('images/music/thump (2).jpg') }}" alt=""   width="160px" height="120px"></a>
                            <div class="">
                                <div class="border-bottom pb-3 ">
                                    <a class="lesten" href=""><p class="font-size mb-0 text-dark">Numb</p></a>
                                    <span>I'm tired of being what you want me to be.
                                            Feeling so faithless, lost under the surface</span>
                                </div>
                                <div>
                                    <span class="text-muted"><i class="bi bi-eye-fill p-1"></i>34523</span>
                                    <span class="text-muted p-3"><i class="bi bi-chat-right-dots-fill p-1"></i>564</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center bg-success p-2 text-dark bg-opacity-10">
                            <a class="lesten" href="{{ route('client.music.detail', 1) }}"><img class="border shadow-sm p-3 m-2 bg-body rounded" src="{{ asset('imaages/music/thump (3).jpg') }}" alt=""   width="160px" height="120px"></a>
                            <div class="">
                                <div class="border-bottom pb-3 ">
                                    <a class="lesten" href="{{ route('client.music.detail', 1) }}"><p class="font-size mb-0 text-dark">Wake Me Up</p></a>
                                    <span>Feeling my way through the darkness.
                                            Guided by a beating heart</span>
                                </div>
                                <div>
                                    <span class="text-muted"><i class="bi bi-eye-fill p-1"></i>125323</span>
                                    <span class="text-muted p-3"><i class="bi bi-chat-right-dots-fill p-1"></i>34236</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <a class="lesten" href="{{ route('client.music.detail', 1) }}"><img class="border shadow-sm p-3 m-2 bg-body rounded" src="{{ asset('images/music/thump (4).jpg') }}" alt=""   width="160px" height="120px"></a>
                            <div class="">
                                <div class="border-bottom pb-3">
                                    <a class="lesten" href=""><p class="font-size mb-0 text-dark">
                                            As long as you love me</p></a>
                                    <span>As long as you love me.
                                            I am under pressure</span>
                                </div>
                                <div>
                                    <span class="text-muted"><i class="bi bi-eye-fill p-1"></i>537</span>
                                    <span class="text-muted p-3"><i class="bi bi-chat-right-dots-fill p-1"></i>121</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <nav aria-label="Page navigation example">
                <ul class="pagination mb-0 pb-4 justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
