@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome pagee') }}</div>
                <div class="card-body">
                    <h1>Edit Data Costumer</h1>
                    <form action="/costumer/{{ $costumer->id }}" method="POST">
            
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="inputname" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $costumer->name }}" id="inputname" aria-describedby="namehelp">
                            <div id="namehelp" class="form-text">type your complete name.</div>
                        </div>
                        
                        <select name="sex" class="form-control">
                            <option value="">Pilih Sex</option>
                            <option value="L" @if($costumer->sex == "L") selected @endif>Laki-laki</option>
                            <option value="P" @if($costumer->sex == "P") selected @endif>Perempuan</option>
                        </select><br>
            
                        <div class="mb-3">
                            <label for="inputcity" class="form-label">City</label>
                            <input name="city" type="text" class="form-control" id="inputcity" value="{{ $costumer->city }}" >
                        </div>
            
                        <div class="mb-3">
                            <label for="inputaddress" class="form-label" >Address</label>
                            <textarea name="address"  class="form-control" id="inputaddress" rows="10" >{{ $costumer->address }}</textarea><br>
                        </div>
            
            
                        <input type= "submit" class="btn btn-primary" name="submit" value="save">
            
                
                    </form> 
                </div>
            </div>
        </div>
    </div>
 </div>
    
    
@endsection