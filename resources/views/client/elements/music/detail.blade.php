@extends('client.layouts.app')

@section('title', 'Nghe nhạc')

@section('content')
    <div class="container container__background ">
        <div class="">
            <p class=" mb-0 pt-3 text-info">If You're Not The One</p>
            <div class="text-center">
                <video width="520" height="440" controls>
                    <source src="{{ asset('video/music/bai226.mp4') }}"
                            type="video/mp4">
                </video>
            </div>
            <div class="p-3 font-size">
                <div class="overflow-auto" style="width: 100%;height: 300px">
                    <br>
                    If you're not the one then why does my soul feel glad today?</br>
                    If you're not the one then why does my hand fit yours this way?</br>
                    If you are not mine then why does your heart return my call?</br>
                    If you are not mine would I have the strength to stand at all?</br>
                    I'll never know what the future brings</br>
                    But I know you're here with me now</br>
                    We'll make it through</br>
                    And I hope you are the one I share my life with</br>
                    I don't want to run away but I can't take it, I don't understand</br>
                    If I'm not made for you then why does my heart tell me that I am?</br>
                    Is there any way that I can stay in your arms?</br>
                    If I don't need you then why am I crying on my bed?</br>
                    If I don't need you then why does your name resound in my head?</br>
                    If you're not for me then why does this distance maim my life?</br>
                    If you're not for me then why do I dream of you as my wife?</br>
                    I don't know why you're so far away</br>
                    But I know that this much is true</br>
                    We'll make it through</br>
                    And I hope you are the one I share my life with</br>
                    And I wish that you could be the one I die with</br>
                    And I'm prayin' you're the one I build my home with</br>
                    I hope I love you all my life</br>
                    I don't want to run away but I can't take it, I don't understand</br>
                    If I'm not made for you then why does my heart tell me that I am?</br>
                    Is there any way that I can stay in your arms?</br>
                    'Cause I miss you, body and soul so strong that it takes my breath away</br>
                    And I breathe you into my heart and</br>
                    Pray for the strength to stand today</br>
                    'Cause I love you, whether it's wrong or right</br>
                    And though I can't be with you tonight</br>
                    You know my heart is by your side</br>
                    I don't want to run away but I can't take it, I don't understand</br>
                    If I'm not made for you then why does my heart tell me that I am?</br>
                    Is there any way that I could stay in your arms? </br>
                    </p>
                </div>
            </div>
            <div class="container pb-5">
                <h5>Giải thích</h5>
                <div class="mb-4">
                    <p class="font-size mb-0">
                        1. If you're not the one, then why does my soul feel glad today?
                    </p>
                    <p class="font-size mb-0 text-muted fs-6 text">
                        Đây là câu điều kiện loại I dạng đặc biệt. Vế thứ nhất của câu điều kiện động từ chia ở thời
                        hiện tại đơn, còn vế thứ hai được để ở dạng câu hỏi, cũng chia ở thời hiện tại đơn.
                    </p>
                </div>
                <div class="mb-4">
                    <p class="font-size mb-0 ">
                        2. I never know what the future brings.
                    </p>
                    <p class="font-size mb-0 text-muted fs-6 text">
                        Đây là câu có chứa mệnh đề danh từ “what the future brings” (đóng vai trò như một danh từ trong
                        câu). Mệnh đề này bắt đầu bằng liên từ phụ thuộc “what”, và trật tự ngữ pháp của mệnh đề được
                        giữ nguyên như một câu trần thuật. Các bạn có thể tham khảo thêm về mệnh đề danh từ ở link: Mệnh
                        đề danh từ
                    </p>
                </div>
                <div class="mb-4">
                    <p class="font-size mb-0">
                        You are the one I share my life with.
                    </p>
                    <p class="font-size mb-0 text-muted fs-6 text">
                        - share something with somebody: chia sẻ cái gì với ai
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
