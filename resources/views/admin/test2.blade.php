@extends("layouts.main")

@section('title', 'test2')


@section('menu')
    @include("menu")
@endsection

@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-header">test2</h3>
                <div class="card-body">
                    <p>здесь функционал</p>
                </div>
            </div>
        </div>
    </div>
@endsection
