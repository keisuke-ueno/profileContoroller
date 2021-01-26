@extends('layouts.profile')

@section('title','プロフィール編集')

@section('cntent')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>プロフィール新規作成</h2>
            <form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-data">
                
                @if(count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                    @endforeach
                </ul>
                @endif
                <div class="form-group row">
                    <label class="col-md-2">氏名</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                    
                </div>
                <div class "form-group row">
                     <label class="col-md-2">性別</label>
                    <div class="col-md-10">
                     <input type="radio" class="radio" name="gender" value="male">男
                     <input type="radio" class="radio" name="gender" value="female">女
                    </div> 
                </div>
                <div class="form-group row">
                    <label class="col-md-2">趣味</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="hobby" value="{{ old('hobby') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">自己紹介文</label>
                    <div class="col-md-10">
                        <textarea class="form-control" name="introduction" row="20">{{ old('introduction') }}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">画像</label>
                    <div class="col-md-10">
                        <input type="file" class=="form-control-file" name="image">
                    </div>
                </div>
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="登録">
            </form>
        </div>
    </div>
</div>
@endsection
