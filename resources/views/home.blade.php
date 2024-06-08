@extends('layouts.app')

@section('title', 'Table')

@section('content')
    <div class="container p-5">
        <div class="card p-3 shadow">
           
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Brand Balls</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cars as $car)
                            <tr>
                                <td>{{ $car->brandName }}</td>
                                <td>{{ $car->carName }}</td>
                                <td>{{ $car->carPrice }}</td>
                            </tr>
                        @endforeach
                    </tbody> 
                </table>
        </div>
    </div>
@endsection
