@extends('layouts.app')
@section('content')
<head>
  <title>Doctor's Data</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://your-site-or-cdn.com/fontawesome/v5.15.4/js/all.js" data-auto-a11y="true" ></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@300;400&display=swap" rel="stylesheet">
    <!-- style -->
  <style>
       body
        {
            background: #e3ca71 !important;
            font-family: 'Source Sans Pro', sans-serif;

        }
        .header
        {
            padding:40px 20px;
            color: white;
            margin-top: 0px;
            text-align: center;
        }
        .table-responsive
        {  
            font-size: 15px;
            background-color: white;
            border-radius: 12px;
            padding: 18px;
            margin-top: 20px;
        }
        .dt-buttons
        {
          float: right;
        }
        #table_filter input
        {
          margin-left: 10px;
          border: 1px solid;
          border-radius: 5px;
          padding: 3px;
        }
        #table_paginate
        {
          float: right;
        }
        .paginate_button,
        .paginate_button:hover {
          margin-right: 10px;
          color: #333333;
          font-size: 16px;
          font-weight: bold;
          text-decoration: none;
          cursor: pointer;
        }
        .dt-button
        {
          border: 0px;
          background: #e3ca71;
          font-size: 18px;
          border-radius: 6px;
          margin-bottom: 25px;
          width: 80px;
          margin-right: 5px;
          color: white;
        }
        .create a,
        .create a:hover
        {
          border-radius: 12px;
          background: white;
          padding: 8px 30px;
          color: #89752e;
          font-size: large;
          text-decoration: none;
          font-weight: bolder;
        }
        .import,
        .import:hover{
          border: 0px;
          background: #e3ca71;
          font-size: 18px;
          border-radius: 6px;
          margin-bottom: 25px;
          padding: 1px 20px;
          margin-right: 5px;
          color: white;
          text-decoration: none;
          float: right;
        }
        .ar
        {
          font-family: 'Noto Kufi Arabic', sans-serif;
        }
  </style>

</head>
<body>



{{-- <h1 class="header">Doctor's Data</h1> --}}

<header>
</header>
<div class="container">
  <div class="create text-right">
  @include('admin.includes.alerts.success')
  @include('admin.includes.alerts.errors')
   <a href="{{route('AddDoctor')}}">Create Doctor +</a>
  </div>
  <div class="table-responsive">   
  <a class="import" href="{{route('showimportDoctor')}}">Import</a>

  <table id="table" class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>E-mail</th>
        <th>Specialist</th>
        <th>City</th>
        <th>District</th>
        <th>Process</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($doctors as $doctors)

      <tr>
        <td>{{++$id}}</td>
        <td class="ar">{{$doctors->name}}</td>
        <td>{{$doctors->email}}</td>
        <td>{{$doctors->specialist}}</td>
        <td>{{$doctors->city}}</td>
        <td class="ar">{{$doctors->district}}</td>
        <td>
          <a href="{{route('EditDoctor',$doctors->id)}}"><img title="edit" src="edit2.png" style="width: 25px;"></a>
          <a href="{{route('showDoctor',$doctors->id)}}"><img title="show" src="sear.png" style="width: 25px;"></a>
          <a href="{{route('delete',$doctors->id)}}"><img title="delete"onclick="return confirm('Are You Sure To Delete Doctor ?')" src="del.png" style="width: 25px;"></a>


        </td>
      </tr>
      @endforeach

      
    </tbody>
  </table>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="https://editor.datatables.net/extensions/Editor/js/dataTables.editor.min.js"></script>


<script>
  $(document).ready(function() {
    $('#table').DataTable( {
      "pagingType": "simple",
        dom: 'Bfrtip',
        buttons: [
            'excel','print',
           
        ]
    } );
} );
</script>
</body>
@endsection
