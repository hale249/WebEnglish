<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <ul class="footer__list">
                    <li class="footer__list-item">
                        <span class="footer__list-item-link">Thông tin chung</span>
                    </li>
                    <li>
                        <a class="footer__list-item-link" href="{{ route('client.blog.index') }}">Tin tức</a>
                    </li>
                    <li>
                        <a class="footer__list-item-link" href="{{ route('client.dictionary.index') }}">Tra từ điển</a>
                    </li>
                    <li>
                        <a class="footer__list-item-link" href="{{ route('client.quiz.index') }}">Bài thực hành</a>
                    </li>
                </ul>
            </div>
            <div class="col-3">
                <ul class="footer__list">
                    <li class="footer__list-item">
                        <span class="footer__list-item-link">Tiếng Anh
                            phổ thông</span>
                    </li>
                    @foreach($books as $book)
                        <li>
                            <a class="footer__list-item-link" href="{{ route('client.book.lesson', $book->slug) }}">{{ $book->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-3">
                <ul class="footer__list">
                    <li class="footer__list-item">
                        <span class="footer__list-item-link">Học qua video</span>
                    </li>
                    @foreach($videoCategories as $category)
                        <li>
                            <a class="footer__list-item-link" href="{{ route('client.video.index', ['slug' => $category->slug]) }}">{{ $category->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-3">
                <ul class="footer__list">
                    <li class="footer__list-item">
                        <span class="footer__list-item-link">Học qua kỹ năng</span>
                    </li>
                    @foreach($skillCategories as $category)
                    <li>
                        <a class="footer__list-item-link" href="{{ route('client.skill.index', ['category_id' => $category->id]) }}">Luyện {{ $category->name }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>
