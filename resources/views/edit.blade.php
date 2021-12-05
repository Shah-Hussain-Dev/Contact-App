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
      
      
      <div class="row  mx-auto mt-4">
        <div class="col-md-5 col-sm-11  mx-auto">
            <h2 class="text-center mb-3">Update Contact </h2>
            <form action="" method="post">
                @csrf
                @method('PUT')
                <!-- Name input -->
                <div class="form-outline mb-4">
                  <input type="text" id="form5Example1" name="name" class="form-control" value="{{$student->name}}" />
                  <label class="form-label" for="form5Example1">Name</label>
                </div>
              
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="form5Example2" name="email" class="form-control" value="{{$student->email}}" />
                  <label class="form-label" for="form5Example2">Email address</label>
                </div>
                <!-- Mobile input -->
                <div class="form-outline mb-4">
                  <input type="text" id="form5Example2" class="form-control"  name="phone" value="{{$student->phone}}"/>
                  <label class="form-label" for="form5Example2">Contact Number </label>
                </div>
              
              
               
              
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Update</button>
              </form>
              <div class="text-center py-2 px-2 ">
                @if (session()->has('status'))
                    <h5 class=" bg-success">{{session('status')}}</h5>
                @endif
            </div>
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