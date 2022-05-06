@extends('welcome')

{{-- Title --}}
@section('title', 'Create Product')

{{-- section --}}
@section('content')

    <div class="col-6">
        <form method="POST" action="/product">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price">
            </div>
            <div class="form-group">
                <label for="available">Available</label>
                <select class="form-control" id="available" name="available">
                    <option value="1">Available</option>
                    <option value="0">Unavailable</option>
                </select>
            </div>
            <input type="submit" value="Create Product">
        </form>
    </div>

{{-- endsection --}}
@endsection
