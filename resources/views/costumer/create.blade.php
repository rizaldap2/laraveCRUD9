@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Welcome pagee') }}</div>
                    <div class="card-body">
                        <h1>Add Costumer</h1>

                        <form action="/costumer/store" method="POST">
                        
                            @csrf
                            <div class="mb-3">
                                <label for="inputname" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="inputname" aria-describedby="namehelp">
                                <div id="namehelp" class="form-text">type your complete name.</div>
                            </div>
                            
                            <select name="sex" class="form-control">
                                <option value="">Pilih Sex</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select><br>
                
                            <div class="mb-3">
                                <label for="inputcity" class="form-label">City</label>
                                <input name="city" type="text" class="form-control" id="inputcity">
                            </div>
                
                            <div class="mb-3">
                                <label for="inputaddress class="form-label">Address</label>
                                <textarea name="address"  class="form-control" id="inputaddress" rows="10"></textarea><br>
                            </div>
                
                            <input type="submit" class="btn btn-primary" name="submit" value="save">
                    
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    

   
@endsection
