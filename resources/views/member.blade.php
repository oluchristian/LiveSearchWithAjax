@extends('app')

@section('content')
    <div class="row">
        <h2>{{ $member->firstname }} {{ $member->lastname }}</h2>
        <a href="/" class="btn btn-primary">Home<span class="glyphicon glyphicon-arrow-left"></span></a>
    </div>
@endsection