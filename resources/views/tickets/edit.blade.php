@extends('layouts.app')

@section('name', 'Edit Product')

@section('contents')
    <h1 class="mb-0">Edit Ticket</h1>
    <hr />
    <form action="{{ route('tickets.update', $ticket->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" placeholder="name" value="{{ $ticket->name }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Rute</label>
                <input type="text" name="route" class="form-control" placeholder="Price" value="{{ $ticket->route }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Kelas</label>
                <input type="text" name="classDeparture" class="form-control" placeholder="Kelas"
                    value="{{ $ticket->classDeparture }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Type</label>
                <input type="text" name="type" class="form-control" placeholder="Type" value="{{ $ticket->type }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Harga</label>
                <input type="text" name="price" class="form-control" placeholder="Harga" value="{{ $ticket->price }}">
            </div>

        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
