@extends('layout.layout')

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới Blog</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('edit')}}">
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" >
                    </div>
                    <div class="form-group">
                        <label>Teaser</label>
                        <input type="text" class="form-control" name="teaser" >
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <input type="text" class="form-control" name="content" >
                    </div>
                    <div class="form-group">
                        <label>Describe</label>
                        <input type="text" class="form-control" name="describe" >
                    </div>

                    <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection