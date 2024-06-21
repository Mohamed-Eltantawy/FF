@extends('layouts.app')

@section('name', 'Edit company')

@section('contents')
    <h1 class="mb-0">Edit company</h1>
    <hr />
    <form action="{{ route('startups.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $startup->name}}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <input type="text" name="description" class="form-control" placeholder="Discription" value="{{ $startup->description }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Founded_At</label>
                <input type="text" name="founded_at" class="form-control" placeholder="Founded_At" value="{{ $startup->founded_at }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Founder</label>
                <textarea class="form-control" name="description" placeholder="Descriptoin" >{{ $startup->founder }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
