@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome pagee') }}</div>
                <div class="card-body">
                    <a href="/costumer/create" class="btn btn-primary" >add costumer</a>
                    <table class="table table-hover">
                    <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Sex</th>
                        <th>City</th>
                        <th>Address</th>
                        <th>Modif</th>
                    </tr>
                    @foreach ($costumer as $c)
                        <tr>
                            <td>{{ $c->id }}</td>
                            <td>{{ $c->name }}</td>
                            <td>{{ $c->sex }}</td>
                            <td>{{ $c->city }}</td>
                            <td>{{ $c->address }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="/costumer/{{ $c->id }}/edit" class="btn btn-warning" >Edit</a>
                                    <form action="/costumer/{{ $c->id }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input class="btn btn-danger"type="submit" value="Delete" id="Delete">
                                    </form>
                                </div>
                            
                            </td>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
 </div>
    
@endsection
    