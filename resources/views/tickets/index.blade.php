@extends('layouts.app')

@section('title', 'Home Booking')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Passengers</h1>
        <a href="{{ route('tickets.create') }}" class="btn btn-primary">Add Books Ticket</a>
    </div>
    <hr />
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Rute</th>
                <th>Kelas</th>
                <th>Type</th>
                <th>Harga</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if ($ticket->count() > 0)
                @foreach ($ticket as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->name }}</td>
                        <td class="align-middle">{{ $rs->route }}</td>
                        <td class="align-middle">{{ $rs->classDeparture }}</td>
                        <td class="align-middle">{{ $rs->type }}</td>
                        <td class="align-middle">{{ $rs->price }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('tickets.show', $rs->id) }}" type="button"
                                    class="btn btn-secondary">Detail</a>
                                <a href="{{ route('tickets.edit', $rs->id) }}" type="button"
                                    class="btn btn-warning">Edit</a>
                                <form action="{{ route('tickets.destroy', $rs->id) }}" method="POST" type="button"
                                    class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                    <td class="text-center" colspan="5">Product not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
