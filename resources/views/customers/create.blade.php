@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <h2>Add New Customer </h2>
    <form action="{{ route('customers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id"> Customer ID </label>
            <input type="text" name="id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="name"> Name </label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="phone"> Phone </label>
            <input type="number" name="phone" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email"> Email </label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="address"> Address </label>
            <input type="text" name="address" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success mt-3"> Save </button>
    </form>
</div>
@endsection