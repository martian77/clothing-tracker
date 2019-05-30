@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>{{ $user->name }}'s {{ $clothing->name }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <ul class="clothing__details">
                <li class="clothing__detail">
                    <span class="detail__label">Name:</span> <span class="detail__value">{{ $clothing->name }}</span>
                </li>
                <li class="clothing__detail">
                    <span class="detail__label">Description:</span> <span class="detail__value">{{ $clothing->description }}</span>
                </li>
                <li class="clothing__detail">
                    <span class="detail__label">Arrived:</span> <span class="detail__value">{{ $clothing->arrived }}</span>
                </li>
                <li class="clothing__detail">
                    <span class="detail__label">Retired:</span> <span class="detail__value">{{ $clothing->retired }}</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class=col-sm-12>
            <a class="btn btn-primary" href="{{ route('clothing.edit', $clothing )}}">Edit</a>
            <a class="btn btn-primary" href="{{ route('clothing.index') }}">Full List</a>
        </div>
    </div>
</div>
@endsection
