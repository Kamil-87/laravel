@extends("layouts.main")

@section('title', 'Создание новости')

@section('menu')
    @include("menu")
@endsection

@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-header">Создание новости</h3>
                <div class="card-body">
                    <form action="{{ route('admin.create') }}" method="post">
                        @csrf

                        <div class="form-group row">
                            <input type="text" name="title">
                        </div>
                        <div class="form-group row">
                            <input type="submit" class="btn btn-outline-primary" value="добавить новость">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
