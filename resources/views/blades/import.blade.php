<!DOCTYPE html>
<html>
<head>
    <title>Import Export Example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>
    {{-- composer require maatwebsite/excel --ignore-platform-reqs --}}
	<div class="container">
        <div class="card bg-light mt-3">
            <div class="card-header">
                <a class="" href="{{route('index')}}"><img title="Home" src="{{asset('home.png')}}" style="width: 25px;"></a>

                Import Data     
        </div>
        <div class="card-body">
            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
               @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import Data</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>