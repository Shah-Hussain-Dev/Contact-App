<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact App</title>
    <!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<!-- MDB -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
rel="stylesheet"
/>
</head>
<style>
    body{
        overflow-x: hidden;
    }
    .header {
        
        height: 60vh;
        width: 400px;
        background-position: center;
        background-size: cover;
        margin:0 auto;
    }
    .header img{
        height: 400px;
        width:400px;
     
    }
</style>
<body>
   <div class="container-fluid  bg-primary text-white py-2 text-center">
    <h3>Digital Contact App <img src="https://cdn-icons.flaticon.com/png/512/2043/premium/2043190.png?token=exp=1635320031~hmac=8f80dee9e332f55140e6d79a3277459e" height="40" alt="icon"></h3>
   </div>
   <div class="container-fluid px-4">
        <section class="header">
            <img src="https://i.pinimg.com/originals/50/78/a0/5078a05eb1b6847d93383eaa4c0ed500.gif" alt="img" class="img-responsive">
        </section>
      
      <div class="row  mx-auto mt-4">
        <div class="col-md-5 col-sm-11  mx-auto">
            <h2 class="text-center mb-3 text-primary">Add Contact </h2>
            <form action="" method="post">
                @csrf
                <!-- Name input -->
                <div class="form-outline mb-4">
                  <input type="text" id="form5Example1" name="name" class="form-control" />
                  <label class="form-label" for="form5Example1">Name</label>
                </div>
              
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="form5Example2" name="email" class="form-control" />
                  <label class="form-label" for="form5Example2">Email address</label>
                </div>
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="text" id="form5Example2" class="form-control"  name="phone"/>
                  <label class="form-label" for="form5Example2">Contact Number </label>
                </div>
              
              
               
              
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Add</button>
              </form>
              <div class="text-center">
                @if (session()->has('status'))
                    <h5 class=" bg-success mb-2 text-white rounded shadow  py-2 px-2">{{session('status')}}</h5>
                @endif
            </div>
        </div>

        <div class="col-md-6 col-sm-11 mx-auto table-responsive ">
            <table class="table table-striped shadow ">
                <h2 class=" text-center mb-3  mx-0 text-primary">Contact List</h2>
                <thead class="text-center bg-warning">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($students as $data)
                          <tr>
                              <td>{{$data->id}}</td>
                              <td>{{$data->name}}</td>
                              <td>{{$data->email}}</td>
                              <td>{{$data->phone}}</td>
                              <td class="d-flex "><a href="{{url('/edit',$data->id)}}" class="text-warning d-block px-3"><i class="fas fa-edit "></i></a>  <a href="{{url('/delete',$data->id)}}" class="text-danger ml-3 "><i class="fas fa-trash"></i></td>
                             
                          </tr>
                      @endforeach
                    </tbody>
            </table>
            
        </div>
      </div>
   </div>
   <!-- MDB -->
<script
type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
></script>
</body>
</html>