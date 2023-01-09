@extends('main')

@section('container')
<section id="" class="p-5 bg-light">
<div class="container">
    <div class="card mb-3" style="">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="https://upload.wikimedia.org/wikipedia/commons/b/b9/Marvel_Logo.svg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">M4rvel.com</h5>
              <p class="card-text">Marvel Entertainment, LLC (formerly Marvel Enterprises ) is an American Entertainment company founded in June 1998 and based in New York City , New York formed by the merger of Marvel Entertainment Group and ToyBiz. The company is a wholly owned subsidiary of The Walt Disney Company , and is primarily known for its comic books by Marvel Comics , as well as its forays into motion pictures , including those within the Marvel Cinematic Universe (MCU).</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

              <input class="btn btn-primary" type="submit" value="Submit"> <input class="btn btn-primary" type="reset" value="Reset">

              
            </div>
          </div>
        </div>
      </div>
    
</div> 
<div class="offset-md-1 mb-3 text-center">
    <form>
        <h5>Subscribe to our newsletter</h5>
        <p>Monthly digest of what's new and exciting from us.</p>
        <div class="d-flex flex-column flex-sm-row w-100 gap-2">
        <label for="newsletter1" class="visually-hidden">Email address</label>
        <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
        <button class="btn btn-primary" type="button">Subscribe</button>
        </div>
    </form>
</div>
  
  
@endsection
  