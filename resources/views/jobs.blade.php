<!DOCTYPE html>
<html>
<head>
    <title>JJJK: {{ $job['title'] }}</title>
    <style>
        div{
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            margin-top: 20px;
        }
        body{
          max-width: 600px;
          margin: 0 auto;
        }
        button{
          display: block;
          margin: 20px auto;
          padding: 10px 20px;
          font-size: 16px;
          cursor: pointer;
        }
    </style>
</head>
<body>

  <div>
    <h1>{{ $job['title'] }}</h1>
    <p>Salary: {{ $job['salary'] }}</p>
    <p>{{ $job['description'] }}</p>
  </div>

  <button type="button" onclick="window.location.href='/'">
    Back to job list
  </button>

</body>
</html>