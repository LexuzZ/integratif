@extends('layouts.app')

@section('title', 'Create Ticket')

@section('contents')
    <h1 class="mb-0">Add Passengers</h1>
    <hr />
    <form action="{{ route('tickets.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Nama">
            </div>
            <div class="col">
                <input type="text" name="route" class="form-control" placeholder="Rute">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="classDeparture" class="form-control" placeholder="Kelas">
            </div>
            <div class="col">
                <input class="form-control" name="type" placeholder="Type"></input>
            </div>
            <div class="col">
                <input class="form-control" name="price" placeholder="Harga"></input>
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
