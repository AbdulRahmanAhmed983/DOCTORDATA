<!DOCTYPE html>
<html>
<head>
    <title>Doctor Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        body
        {
            background: #e3ca71;
        }
        .card
        {
            margin-top: 80px!important;
        }
        .card-header
        {
            color: white;
            text-align: center;
            font-size: x-large;
            background-color: rgb(183 103 39);
            border-bottom: 1px solid rgb(183 103 39);
        }
        .bg-light
        {
            background: black!important;
            color: white;
        }
        .card-header a
        {
            float: left;
        }
        .card-body table th
        {
            color: #b76727;
        }
        table
        {
            font-size: large;
        }
    </style>
</head>
<body>
	<div class="container">
        <div class="card bg-light ">
            
            
            <div class="card-header">
                <a class="" href="{{route('index')}}"><img title="Back To Home" src="{{asset('home.png')}}" style="width: 25px;"></a>
                {{$doctors->name}}<span>'s Info</span>     
        </div>
        <div class="card-body">
                    <table class="table ">
                     
                        <tbody>
                          <tr>
                            <th>Name</th>
                            <td>{{$doctors->name}}</td>
                          </tr>
                          <tr>
                            <th>E-mail</th>
                            <td>{{$doctors->email}}</td>
                          </tr>
                          <tr>
                            <th>Specialist</th>
                            <td>{{$doctors->specialist}}</td>
                          </tr>
                           <tr>
                            <th>Phone</th>
                            <td> {{$doctors->phone}}</td>
                          </tr> 
                          <tr>
                            <th>Mobile</th>
                            <td> {{$doctors->mobile}}</td>
                          </tr> 
                          <tr>
                            <th>Clinic_number</th>
                            <td> {{$doctors->clinic_number}}</td>
                          </tr> 
                          <tr>
                            <th>District</th>
                            <td> {{$doctors->district}}</td>
                          </tr>
                           <tr>
                            <th>City</th>
                            <td>{{$doctors->city}}</td>
                          </tr> 
                          <tr>
                            <th>Address</th>
                            <td> {{$doctors->address}}</td>
                          </tr>
                        </tbody>
                      </table>
        </div>
    </div>
</div>
</body>
</html>
