@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>{{ $user->name }}'s Clothing</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <a class="btn btn-primary" href="{{ route('clothing.create' )}}">Add new</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table class="index">
                <thead>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Arrived</th>
                        <th>Retired</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $clothing as $item )
                    <tr>
                        <td class="index__actions">
                            <a href="{!! route('clothing.show', $item) !!}">View</a>|
                            <a href="{{ route('clothing.edit', $clothing )}}">Edit</a>
                        </td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->arrived }}</td>
                        <td>{{ $item->retired }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            {{ $clothing->links() }}
        </div>
    </div>
</div>
@endsection
