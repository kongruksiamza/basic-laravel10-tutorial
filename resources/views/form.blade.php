@extends('layouts.app')
@section('title', 'เขียนบทความ')
@section('content')
    <h2 class="text text-center py-2">เขียนบทความใหม่</h2>
    <form method="POST" action="/author/insert">
        @csrf
        <div class="form-group">
            <label for="title">ชื่อบทความ</label>
            <input type="text" name="title" class="form-control">
        </div>
        @error('title')
            <div class="my-2">
                <span class="text-danger">{{$message}}</span>
            </div>
        @enderror
        <div class="form-group">
            <label for="content">เนื้อหาบทความ</label>
            <textarea name="content" cols="30" rows="5" class="form-control" id="content"></textarea>
        </div>
        @error('content')
            <div class="my-2">
                <span class="text-danger">{{$message}}</span>
            </div>
        @enderror
        <input type="submit" value="บันทึก" class="btn btn-primary my-3">
        <a href="/author/blog" class="btn btn-success">บทความทั้งหมด</a>
    </form>
    <script>
        ClassicEditor
            .create( document.querySelector('#content'))
            .catch( error => {
                console.error( error );
            });
    </script>    
@endsection
