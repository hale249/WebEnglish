@extends('client.layouts.app')

@section('title', 'Học qua video')

@section('content')
    <div class="container container__background">
        <div>
            <div>
                <div class="pb-5">
                    <h3 class="heading__h border-bottom text-danger">Luyện nghe qua TiếngAnh123 News
                    </h3>
                    <div>
                        <div class="d-flex align-items-center">
                            <a class="lesten" href="{{ route('client.video.detail', 1) }}"><img
                                    class="border shadow-sm p-3 m-2 bg-body rounded"
                                    src="https://www.tienganh123.com/file/video/youtube_videos/bai1/bai1%20-%20dai%20dien.jpg" alt="" width="160px"
                                    height="120px"></a>
                            <div class="">
                                <div class="border-bottom pb-3">
                                    <a class="lesten" href="{{ route('client.video.detail', 1) }}"><p
                                            class="font-size mb-0 text-dark">Seminar
                                            sets safe food market goals</p></a>
                                    <span>Hội thảo đề ra mục tiêu thị trường thực phẩm an toàn</span>
                                </div>
                                <div>
                                    <span class="text-muted"><i class="bi bi-eye-fill p-1"></i>343</span>
                                    <span class="text-muted p-3"><i class="bi bi-chat-right-dots-fill p-1"></i>12</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center bg-success p-2 text-dark bg-opacity-10">
                            <a class="lesten" href="{{ route('client.video.detail', 1) }}"><img
                                    class="border shadow-sm p-3 m-2 bg-body rounded"
                                        src="https://www.tienganh123.com/file/video/youtube_videos/bai1/bai1%20-%20dai%20dien.jpg" alt="" width="160px"
                                    height="120px"></a>
                            <div class="">
                                <div class="border-bottom pb-3 ">
                                    <a class="lesten" href="{{ route('client.video.detail', 1) }}"><p
                                            class="font-size mb-0 text-dark">US calls for climate
                                            change action in VN</p></a>
                                    <span>Mỹ kêu gọi hành động về biến đổi khí hậu ở Việt Nam</span>
                                </div>
                                <div>
                                    <span class="text-muted"><i class="bi bi-eye-fill p-1"></i>123</span>
                                    <span class="text-muted p-3"><i class="bi bi-chat-right-dots-fill p-1"></i>56</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <a class="lesten" href="{{ route('client.video.detail', 1) }}"><img
                                    class="border shadow-sm p-3 m-2 bg-body rounded"
                                    src="https://www.tienganh123.com/file/video/youtube_videos/bai1/bai1%20-%20dai%20dien.jpg" alt="" width="160px"
                                    height="120px"></a>
                            <div class="">
                                <div class="border-bottom pb-3 ">
                                    <a class="lesten" href="{{ route('client.video.detail', 1) }}"><p
                                            class="font-size mb-0 text-dark">
                                            NIHBT appeals for blood donations</p></a>
                                    <span>Viện huyết học và truyền máu trung ương NIHBT kêu gọi hiến máu</span>
                                </div>
                                <div>
                                    <span class="text-muted"><i class="bi bi-eye-fill p-1"></i>123</span>
                                    <span class="text-muted p-3"><i class="bi bi-chat-right-dots-fill p-1"></i>56</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center bg-success p-2 text-dark bg-opacity-10">
                            <a class="lesten" href="{{ route('client.video.detail', 1) }}"><img
                                    class="border shadow-sm p-3 m-2 bg-body rounded"
                                    src="https://www.tienganh123.com/file/video/youtube_videos/bai1/bai1%20-%20dai%20dien.jpg" alt="" width="160px"
                                    height="120px"></a>
                            <div class="">
                                <div class="border-bottom pb-3 ">
                                    <a class="lesten" href=""><p class="font-size mb-0 text-dark">Lack of fire safety a
                                            risk in high-rises</p></a>
                                    <span>Thiếu an toàn phòng chống cháy nổ - mối nguy hại trong các tòa nhà cao...</span>
                                </div>
                                <div>
                                    <span class="text-muted"><i class="bi bi-eye-fill p-1"></i>123</span>
                                    <span class="text-muted p-3"><i class="bi bi-chat-right-dots-fill p-1"></i>56</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <a class="lesten" href="{{ route('client.video.detail', 1) }}"><img
                                    class="border shadow-sm p-3 m-2 bg-body rounded"
                                    src="https://www.tienganh123.com/file/video/youtube_videos/bai1/bai1%20-%20dai%20dien.jpg" alt="" width="160px"
                                    height="120px"></a>
                            <div class="">
                                <div class="border-bottom pb-3 ">
                                    <a class="lesten" href="{{ route('client.video.detail', 1) }}"><p
                                            class="font-size mb-0 text-dark">
                                            VN to produce 12 vaccines for humans</p></a>
                                    <span>Việt Nam sản xuất 12 loại vác xin cho nhân loại</span>
                                </div>
                                <div>
                                    <span class="text-muted"><i class="bi bi-eye-fill p-1"></i>123</span>
                                    <span class="text-muted p-3"><i class="bi bi-chat-right-dots-fill p-1"></i>56</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center bg-success p-2 text-dark bg-opacity-10">
                            <a class="lesten" href="{{ route('client.video.detail', 1) }}"><img
                                    class="border shadow-sm p-3 m-2 bg-body rounded"
                                    src="https://www.tienganh123.com/file/video/youtube_videos/bai1/bai1%20-%20dai%20dien.jpg" alt="" width="160px"
                                    height="120px"></a>
                            <div class="">
                                <div class="border-bottom pb-3 ">
                                    <a class="lesten" href=""><p class="font-size mb-0 text-dark">The High-Level Seminar
                                            on Environmentally Sustainable Cities</p></a>
                                    <span>Hội thảo cấp cao về các thành phố môi trường bền vững</span>
                                </div>
                                <div>
                                    <span class="text-muted"><i class="bi bi-eye-fill p-1"></i>123</span>
                                    <span class="text-muted p-3"><i class="bi bi-chat-right-dots-fill p-1"></i>56</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <a class="lesten" href="{{ route('client.video.detail', 1) }}"><img
                                    class="border shadow-sm p-3 m-2 bg-body rounded"
                                    src="https://www.tienganh123.com/file/video/youtube_videos/bai1/bai1%20-%20dai%20dien.jpg" alt="" width="160px"
                                    height="120px"></a>
                            <div class="">
                                <div class="border-bottom pb-3 ">
                                    <a class="lesten" href="{{ route('client.video.detail', 1) }}"><p
                                            class="font-size mb-0 text-dark">Drivers can send
                                            driving license applications by post</p></a>
                                    <span>Các lái xe có thể nộp đơn làm bằng lái xe qua đường bưu điện</span>
                                </div>
                                <div>
                                    <span class="text-muted"><i class="bi bi-eye-fill p-1"></i>123</span>
                                    <span class="text-muted p-3"><i class="bi bi-chat-right-dots-fill p-1"></i>56</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center bg-success p-2 text-dark bg-opacity-10">
                            <a class="lesten" href="{{ route('client.video.detail', 1) }}"><img
                                    class="border shadow-sm p-3 m-2 bg-body rounded"
                                    src="https://www.tienganh123.com/file/video/youtube_videos/bai1/bai1%20-%20dai%20dien.jpg" alt="" width="160px"
                                    height="120px"></a>
                            <div class="">
                                <div class="border-bottom pb-3 ">
                                    <a class="lesten" href="{{ route('client.video.detail', 1) }}"><p
                                            class="font-size mb-0 text-dark">Legal documents on
                                            business operations lack transparency</p></a>
                                    <span>Các văn bản quy phạm pháp luật về việc điều hành kinh doanh thiếu minh...</span>
                                </div>
                                <div>
                                    <span class="text-muted"><i class="bi bi-eye-fill p-1"></i>123</span>
                                    <span class="text-muted p-3"><i class="bi bi-chat-right-dots-fill p-1"></i>56</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <a class="lesten" href="{{ route('client.video.detail', 1) }}"><img
                                    class="border shadow-sm p-3 m-2 bg-body rounded"
                                    src="https://www.tienganh123.com/file/video/youtube_videos/bai1/bai1%20-%20dai%20dien.jpg" alt="" width="160px"
                                    height="120px"></a>
                            <div class="">
                                <div class="border-bottom pb-3">
                                    <a class="lesten" href="{{ route('client.video.detail', 1) }}"><p
                                            class="font-size mb-0 text-dark">Art exhibition honours
                                            Trinh Cong Son</p></a>
                                    <span>Cuộc triển lãm Mỹ thuật tôn vinh cố nhạc sĩ Trịnh Công Sơn</span>
                                </div>
                                <div>
                                    <span class="text-muted"><i class="bi bi-eye-fill p-1"></i>537</span>
                                    <span class="text-muted p-3"><i
                                            class="bi bi-chat-right-dots-fill p-1"></i>121</span>
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
