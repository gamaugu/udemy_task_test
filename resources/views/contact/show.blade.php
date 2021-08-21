@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">showです</div>

                <div class="card-body">
                    <form method="GET" action="{{route('contact.edit',['id' => $contact->id])}}">
                        @csrf
                        <input class="btn btn-info" type="submit" value="変更する">
                    </form>

                    <form method="POST" action="{{route('contact.destroy',['id' => $contact->id])}}" id="delete_{{$contact->id}}">
                        @csrf
                        <a class="btn btn-danger"  data-id="{{$contact->id}}" href="#" onclick="deletePost(this);">削除する</a>
                    </form>



                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">番号</th>
                            <th scope="col">氏名</th>
                            <th scope="col">タイトル</th>
                            <th scope="col">メール</th>
                            <th scope="col">url</th>
                            <th scope="col">性別</th>
                            <th scope="col">年齢</th>
                            <th scope="col">内容</th>
                            <th scope="col">作成日時</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>{{$contact->id}}
                            </td>
                            <td>{{$contact->your_name}}</td>
                            <td>                    {{$contact->title}}
                            </td>
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->url}}</td>
                            <td>{{$gender}}</td>
                            <td>{{$age}}</td>
                            <td>{{$contact->contact}}</td>
                            <td>{{$contact->created_at}}</td>
                        </tr>
                        </tbody>
                      </table>


                </div>
            </div>
        </div>
    </div>
</div>
<script>
    /************************************
削除ボタンを押してすぐにレコードが削除
されるのも問題なので、一旦javascriptで
確認メッセージを流します。
*************************************/
    function deletePost(e){
        'use strict';
        if(confirm('Are you sure you want to delete this  ?')){
           document.getElementById('delete_' + e.dataset.id).submit();
        }
    }
</script>
@endsection

