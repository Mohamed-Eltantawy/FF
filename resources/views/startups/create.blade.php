@extends('layouts.app')

@section('title', 'Create Startup')

@section('contents')
    <h1 class="mb-0">Add Company</h1>
    <hr />
    <form action="{{ route('startup.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="col">
                <input type="text" name="description" class="form-control" placeholder="Description">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="founded_at" class="form-control" placeholder="Founded At">
            </div>
            <div class="col">
                <textarea class="form-control" name="description" placeholder="Descriptoin"></textarea>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <input type="text" name="founder" class="form-control" placeholder="founder">
            </div>
            <div class="col">
                <input type="text" name="category" class="form-control" placeholder="Category">
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
