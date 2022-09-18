@extends('admin.layouts.app')

@section('title', 'Danh sách bài học chi tiết kỹ năng')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <h4 class="card-title mb-0">
                        Danh sách bài học chi tiết cho: {{ $skill->name }}
                    </h4>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ route('admin.skill.course.create', ['skillId' => $skill->id]) }}" class="btn btn-primary btn-sm"><i
                            class="fas fa-plus"></i> Tạo mới</a>
                </div>
            </div>

            <div class="mt-4">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <td><strong>Tên</strong></td>
                            <td><strong>Trạng thái</strong></td>
                            <td><strong>Tạo lúc</strong></td>
                            <td><strong>Hành động</strong></td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($skills as $skill)
                            <tr>
                                <td>{{ $skill->name }}</td>
                                <td>{!! $skill->status_label !!}</td>
                                <td>{{ $skill->created_at }}</td>
                                <td>{!! $skill->action_buttons !!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    {{ $skills->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
