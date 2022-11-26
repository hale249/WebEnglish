@extends('admin.layouts.app')

@section('title', 'Sứa câu hỏi')

@section('content')
    <div class="card">
        <form action="{{ route('admin.quiz.question.update', ['slug' => $quiz->slug, 'id' => $question->id]) }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="card-body">
                <h4 class="card-title mb-0">
                    Danh sách câu hỏi
                    <small class="text-muted">Sửa câu hỏi</small>
                </h4>
                <hr>
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="question">Tên câu hỏi</label>

                            <input class="form-control" type="text" name="question" id="question" value="{{ $question->question }}"
                                   placeholder="Nhập tên..." maxlength="191" required="" autofocus="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label mr-3" for="is_active">Trạng thái</label>

                            <input type="checkbox" data-on="On" value="1" data-off="Off"  @if($question->is_active) checked @endif
                                   name="is_active" id="is_active" data-toggle="toggle" data-onstyle="primary">
                        </div>
                    </div>
                </div>

                <hr/>
                <div class="col-md-12 col-lg-6">
                    <label class="form-control-label" for="name">Câu trả lời</label>
                </div>

                @if(!empty($question->options))
                    @foreach($question->options as $key=>$option)
                    <div class="row input_row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Tuỳ chọn {{ $key+1 }} </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="options[]" required="" placeholder="Tuỳ chọn {{ $key+1 }}" value="{{ $option->option }}" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                        <div class="row input_row">
                            <div class="col-md-12">
                                <div class='form-group'>
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Đáp án <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="radio">
                                            <label>
                                                @foreach($question->options as $key=>$option)
                                                <input type="radio" value="{{$key}}" @if($option->is_right_option) checked @endif name="answer" id="option{{ $key+1 }}"> <label for="option{{ $key+1 }}">Lựa chọn {{ $key+1 }}</label> &nbsp; &nbsp;
                                                @endforeach
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                @else
                    <div class="row input_row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Tuỳ chọn 1 </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="options[]" required="" placeholder="Tuỳ chọn 1" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row input_row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Tuỳ chọn 2 </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="options[]" required="" placeholder="Tuỳ chọn 2 " class="form-control">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row input_row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Tuỳ chọn 3 </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="options[]" required="" placeholder="Tuỳ chọn 3 " class="form-control">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row input_row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Tuỳ chọn 4 </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="options[]" required="" placeholder="Tuỳ chọn 4 " class="form-control">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row input_row">
                        <div class="col-md-12">
                            <div class='form-group'>
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Đáp án <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="0" name="answer" id="option1"> <label for="option1">Lựa chọn 1</label> &nbsp; &nbsp;
                                            <input type="radio" value="1" name="answer" id="option2"> <label for="option2">Lựa chọn 2</label> &nbsp; &nbsp;
                                            <input type="radio" value="2" name="answer" id="option3"> <label for="option3">Lựa chọn 3</label> &nbsp; &nbsp;
                                            <input type="radio" value="3" name="answer" id="option4"> <label for="option4">Lựa chọn 4</label> &nbsp; &nbsp;
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <a href="{{ route('admin.quiz.question.index', $quiz->slug) }}" class="btn btn-danger btn-sm">Hủy</a>
                    </div>

                    <div class="col text-right">
                        <button type="submit" class="btn btn-success btn-sm">Tạo</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
