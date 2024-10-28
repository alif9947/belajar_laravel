@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12" style="padding-top:20px ">
            @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if($errors->any())
                    <div class="alert alert-danger">

                            @foreach ($errors->all() as $error)
                                <div>{{ $error }}</div>
                            @endforeach
                    </div>
                @endif
            Ini adalah halaman Home
        </div>
    </div>
</div>
@endsection
