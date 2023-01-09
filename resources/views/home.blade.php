@extends('main')

@section('container')
<section id="" class="p-5 bg-light">
<div class="container">
    <div class="card mb-3" style="">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/2/29/Harvard_shield_wreath.svg/1200px-Harvard_shield_wreath.svg.png" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">University.com</h5>
              <p class="card-text">Harvard University is devoted to excellence in teaching, learning, and research, and to developing leaders who make a difference globally. Ptate magni in, ipsa tempore eaque odit rerum provident. Sit at voluptatum consequuntur nesciunt excepturi illo adipisci eos deserunt maxime. Eius error nesciunt modi placeat doloremque. Perferendis aliquid doloremque quisquam odio? Explicabo quaerat in, eum hic, ab beatae ipsum architecto nostrum, atque ut cum repudiandae magnam. Blanditiis pariatur perferendis reprehenderit ratione itaque enim labore perspiciatis, natus voluptate. Assumenda repellat dicta eveniet aspernatur impedit architecto voluptatem ex, corporis quo earum quibusdam, ab magni quas dolor. Cupiditate odit sapiente facere, voluptatum doloremque dolor labore doloribus incidunt harum odio!</p>
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
  