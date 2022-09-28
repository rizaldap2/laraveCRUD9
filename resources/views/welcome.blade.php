@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">{{ __('Welcome pagee') }}</div>
               <div class="card-body">
                  <h1>Food Aku cinta</h1>
                  <a href="/costumer" class="btn btn-primary" >Daftar Costumer Langganan</a>
               </div>
           </div>
       </div>
   </div>
</div>

    
@endsection