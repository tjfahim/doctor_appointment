<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Doctor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add </h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('doctor.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif


        
        <form action="{{ route('doctor.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Select Department Id </strong>
                        <select class="form-select" name="department_id" aria-label="Default select example">
                            <option selected>Department id</option>
                            
                        @foreach ($doctor as $name)
                            <option>{{ $name->id }}</option>
                            
                            @endforeach
                        </select>
                        <select disa class="form-select" aria-label="Default select example">
                            <option selected>See Department ID</option>
                            
                        @foreach ($doctor as $name)
                            <option disabled>{{ $name->id }} = {{ $name->dept_name }}</option>
                            
                            @endforeach
                        </select>

                        @error('department_id')
                        <div class="alert alert-dang    er mt-1 mb-1">{{ $message }}</div>
                        @enderror
                      
                    </div>
                    

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Doctor Name</strong>
                        <input type="name" name="name" class="form-control" placeholder="Enter Name">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Doctor Phone Number</strong>
                        <input type="number" name="phone" class="form-control" placeholder="Enter Number">
                        @error('phone')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Fee</strong>
                        <input type="number" name="fee" class="form-control" placeholder="Enter Fee">
                        @error('fee')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>