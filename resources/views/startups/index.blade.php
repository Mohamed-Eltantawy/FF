@extends('layouts.app')

@section('title', 'Home Startup')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Startups</h1>
        <a href="{{ route('startup.create') }}" class="btn btn-primary">Add Company</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Website</th>
                <th>Founded At</th>
                <th>Founder</th>
            </tr>
        </thead>
        <tbody>+
            @if($startup->count() > 0)
                @foreach($startup as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->name}}</td>
                        <td class="align-middle">{{ $rs->description}}</td>
                        <td class="align-middle">{{ $rs->founded_at}}</td>
                        <td class="align-middle">{{ $rs->$founder }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('startup.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('startup.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('startup.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Company not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
