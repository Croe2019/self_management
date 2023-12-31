@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    @if (Auth::check())
                        <li class="nav-item"><a href="{{route('logout')}}" class="nav-link">ログアウト</a></li>
                        <li class="nav-item"><a href="" class="nav-link">マイページ</a></li>
                    @else
                        <li class="nav-item"><a href="{{route('login')}}" class="nav-link">ログイン</a></li>
                        <li class="nav-item"><a href="{{ route('signup') }}" class="nav-link">新規ユーザ登録</a></li>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
