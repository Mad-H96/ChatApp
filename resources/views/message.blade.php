<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color: #7F8C8D;font-family:Sans-serif;">

    <div style="background-color:#E2E2E2;border-radius:5px;text-align:center;width:1000px;position: absolute;  top: 30%;left: 20%;">
        <br>
        <p><b>From - </b> {{$message->name}}</p> 
        <p><b>Title -</b> {{$message->title}}</p> 
        <p><b>Message -</b> {{$message->content}}</p> 
        <p><b>Created at -</b> {{Carbon\Carbon::parse($message->created_at)->diffForHumans()}}</p> <br>
        <a href="/" class="btn btn-success">Back</a>
        <p>- - - </p>
        <br>
        
    </div>
     
</body>
</html>