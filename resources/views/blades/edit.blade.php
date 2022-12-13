<!DOCTYPE html>
<html lang="en">
<head>
  <title>Doctor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
  <!-- style -->
  <style>
    body{
        background: #e3ca71;
        font-family: 'Source Sans Pro', sans-serif;

    }
    .form-control
    {
        height:40px;
        font-size: 16px;
    }
    .header
    {
        padding:30px 20px 20px;
        color: white;
        margin-top: 0px;
        text-align: center;
    }
    .row
    {
        margin-bottom: 20px;
        padding: 5px;
    }
    .btn-default ,
    .btn-default:hover
    {
        color: white;
        background-color: #e3ca71;
        border-color: #e3ca71;
        font-size: 18px;
        padding: 8px 40px;

    }
    @media (min-width: 1200px){
        .container {
            width: 890px;
        }
    }
    form
    {
        background-color: white;
        border-radius: 12px;
        padding: 18px;
        margin-top: 20px;
    }
</style>
</head>

<body>
    <header>
        <a class="" href="{{route('index')}}"><img title="Home" src="{{asset('home.png')}}" style="width: 33px; margin:18px;"></a>

        <h2 class="header">Add Doctor</h2>
      </header>
    <div class="container">

        <form action="{{route('UpdateDoctor',$doctors->id)}}" method="POST">
            @csrf

            <div class="row">
                <div class="col-md-6">
                <input type="text" class=" form-control" id="name" placeholder="Doctor Name" name="name" value="{{$doctors->name}}">
                </div>
                <div class="col-md-6">
                <input type="text" class=" form-control" id="specialist" placeholder="Doctor specialist"value="{{$doctors->specialist}}" name="specialist">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <input type="email" class="form-control" id="email" placeholder="Doctor E-mail"value="{{$doctors->email}}" name="email">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="clinic" placeholder="Clinic No."value="{{$doctors->clinic_number}}" name="clinic_number">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control" id="city" placeholder="Doctor City"value="{{$doctors->city}}" name="city">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="district" placeholder="Doctor district"value="{{$doctors->district}}" name="district">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input type="text" class="form-control" id="city" placeholder="Doctor address"value="{{$doctors->address}}" name="address">
                </div>
            </div>
                
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control" id="phone" placeholder="Doctor Phone"value="{{$doctors->phone}}" name="phone">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="mobile" placeholder="mobile"value="{{$doctors->mobile}}" name="mobile">
                </div>
            </div>
            <div class="row text-center">
                <button type="submit" class="btn btn-default">Submit</button>

            </div>       
         </form>
    </div>

</body>
</html>













