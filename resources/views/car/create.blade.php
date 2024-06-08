@extends('layouts.app')

@section('title', 'Form')

@section('content')
    <div class="container p-4">
        <form method="post" action="{{ route('car.store') }}">
            @csrf
            <div class="mb-3">
                <label for="carName" class="form-label">Car Name</label>
                <input type="text" class="form-control" id="carName" name="carName" required>
            </div>
            <div class="mb-3">
                <label for="brandName" class="form-label">Brand Name</label>
                <input type="text" class="form-control" id="brandName" name="brandName" required>
            </div>
            <div class="mb-3">
                <label for="carPrice" class="form-label">Price</label>
                <input type="number" class="form-control" id="carPrice" name="carPrice" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
