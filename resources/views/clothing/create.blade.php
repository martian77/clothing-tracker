@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Create a piece of clothing.</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">

            <form action="{{ route('clothing.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" id="name" name="name" />
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="description" id="description"> </textarea>
                </div>
                <div class="form-group">
                    <label for="arrived">Arrived:</label>
                    <input type="date" id="arrived" name="arrived" />
                </div>
                <div class="form-group">
                    <label for="retired">Retired:</label>
                    <input type="date" id="retired" name="retired" />
                </div>
                <button class="btn btn-primary" type="submit">Save Clothing</button>
            </form>
        </div>
    </div>
@endsection
