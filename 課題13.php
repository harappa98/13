<?php

/* 3【応用】 routes/web.php を編集して、
admin/profile/create に POSTメソッドでアクセスしたら
ProfileController の create Action に割り当てるように設
定してください */

 Route::post('admin/profile/create','Admin\ProfileController@create');





/*# 4【応用】 resources/views/admin/profile/create.blade.php を
編集して、氏名(name)、性別(gender)、趣味(hobby)、自己紹
介欄(introduction)を入力するフォームを作成してください。また、
formの送信先(<form action=”この部分”>)を、 Admin\ProfileController
の create Action に指定してください */

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>課題</title> 
     
    </head>
    <body>
        <h1>入力フォーム</h1>
      
 @extends('layouts.profile')
@section('title', 'ニュースの新規作成')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>入力フォーム</h2>
                <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">氏名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2">性別</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2">趣味</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">自己紹介</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    <
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection

    </body>
</html>


/*6【応用】 routes/web.php を編集して、 admin/profile/edit に 
POSTメソッドでアクセスしたら ProfileController の update Action
に割り当てるように設定してください*/

 Route::post('admin/profile/create','Admin\ProfileController@update');
