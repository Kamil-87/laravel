@extends("layouts.main")

@section('title')
    @parentНовости
@endsection

@section('menu')
    @include("menu")
@endsection

@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-header">Vue</h3>
                    <div class="card-body">
                        <div id="app">
                            <example-component></example-component>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
