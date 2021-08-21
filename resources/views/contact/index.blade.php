@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form action="{{route('contact.create')}}" method="get">
                        <button type="submit" class="btn btn-dark">新規登録</button>
                    </form>
                    <form method="GET" action="{{ route('contact.index') }}" class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" name="search" type="search" placeholder="検索" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">検索する</button>
                        </form>

                    @foreach ($contacts as $contact)
                    @endforeach



                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">番号</th>
                            <th scope="col">氏名</th>
                            <th scope="col">タイトル</th>
                            <th scope="col">コンタクト</th>
                            <th scope="col">詳細</th>

                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                          <tr>
                            <td>{{$contact->id}}
                            </td>
                            <td>{{$contact->your_name}}</td>
                            <td>                    {{$contact->title}}
                            </td>
                            <td>{{$contact->created_at}}</td>
                            <td><a href="{{route('contact.show',['id' => $contact->id])}}">詳細はこちら</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                      </table>
                      {{ $contacts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

