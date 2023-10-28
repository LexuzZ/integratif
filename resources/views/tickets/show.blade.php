@extends('layouts.app')

@section('name', 'Show Details Ticket')

@section('contents')
    <h1 class="mb-0">Detail Booking Ticket</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" placeholder="Title" value="{{ $ticket->name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Rute</label>
            <input type="text" name="route" class="form-control" placeholder="Rute" value="{{ $ticket->route }}"
                readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Kelas</label>
            <input type="text" name="classDeparture" class="form-control" placeholder="Product Code"
                value="{{ $ticket->classDeparture }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Type</label>
            <input type="text" name="type" class="form-control" placeholder="Product Code" value="{{ $ticket->type }}"
                readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Harga</label>
            <input type="text" name="price" class="form-control" placeholder="Product Code"
                value="{{ $ticket->price }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At"
                value="{{ $ticket->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At"
                value="{{ $ticket->updated_at }}" readonly>
        </div>
    </div>
@endsection
