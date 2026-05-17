<!DOCTYPE html>
<html>
<head>
    <title>JJJK: All Jobs</title>
    <style>
        div{
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            cursor: pointer;
        }
        div:hover{
            background-color: #f0f0f0;
        }
        body{
          max-width: 600px;
          margin: 0 auto;
        }
        h1{
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<h1>Job List</h1>

@foreach($jobs as $job)
    <div onclick="window.location.href='/jobs/{{ $loop->iteration }}'">
        <h2>
            
            {{ $job['title'] }}
            
        </h2>
    </div>
@endforeach
</body>
</html>