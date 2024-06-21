@extends('layouts.app')

@section('title', 'Show Startup')

@section('contents')
    <h1 class="mb-0">Detail Company</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $startup->name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <input type="text" name="description" class="form-control" placeholder="Description" value="{{ $startup->description }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">founded_at</label>
            <input type="text" name="founded_at" class="form-control" placeholder="Founded_At" value="{{ $startup->founded_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Founder</label>
            <textarea class="form-control" name="founder" placeholder="Founder" readonly>{{ $startup->founder }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $startup->founded_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $startup->founded_at }}" readonly>
        </div>
    </div>
@endsection
