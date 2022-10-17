<x-login title="Password Safe Box">
    <div class="container shadow p-3 mb-5 mt-5 bg-white rounded">
        <div class="row">

          <div class="col-md-5 offset-md-2">
            <h1>Password Safe Box</h1>
              <form action="/logar" method="POST">
                @csrf
                
                <div class="mb-3 row mt-4">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword">
                    </div>
                  </div>
               
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>

            <div class="col-md-2 offset-md-1">            
                <img src="{{URL::asset('/img/safe.jpeg')}}" alt="profile Pic" class="mt-4 shadow-lg rounded-bottom">  
            </div>  
        </div>
      </div> 
</x-login>
    