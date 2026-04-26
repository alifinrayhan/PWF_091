@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Category List</h2>
    <p>Manage your category</p>
    <a href="{{ route('category.create') }}" class="btn btn-primary">+ Add Category</a>
    
    <table class="table mt-3">
        <thead>
            <tr>
                <th>NAME</th>
                <th>TOTAL PRODUCT</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $cat)
            <tr>
                <td>{{ $cat->name }}</td>
                <td>{{ $cat->products_count }}</td>
                <td>
                    </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection