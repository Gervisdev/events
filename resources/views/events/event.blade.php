@extends('Layouts.app')

@section('title','créer un article')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <div class="card bg-light">
                <div class="card-body">
                    <form action="{{ route('save_event') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            
                           <label for="name">title </label>
                           <input type="text" name="title" id="title" value="title" class="form-control   " 
                          >
                          <label for="name">Description </label>
                          <input type="text" name="description" id="description" value="description" class="form-control   " 
                         >
                         <label for="name">Start_date</label>
                         <input type="date" name="start_date" id="start_date" value="start_date" class="form-control   " 
                        >
                        <label for="name">End_date </label>
                        <input type="date" name="end_date" id="end_date" value="end_date" class="form-control   " 
                       >
                       <label for="name">Price </label>
                        <input type="float" name="price" id="price" value="price" class="form-control   " 
                       >
                            
                        </div>
                        
                        <div class="form-group">
                            <button class="btn btn-dark w-100">Sauvegarder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection