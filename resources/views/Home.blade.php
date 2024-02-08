<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>chat app</title>
</head>
<body style="background-color: #7F8C8D;font-family:Sans-serif;">


    <style>

        .container{
            margin-top: 15px;
            background: fixed;
            border-radius: 10px;
            
        }

        .output{
            margin-top: 30px;
            height: 500px;
            overflow:scroll;
      
        }

     
        .divide{
            background-color: white;
            border-radius: 5px;
            margin-top: 10px;
            
        }

    </style>
    <div>
    

    <div class="container" >
        <h1 style="text-align: center;margin-top:30px;color:#E2E2E2;background-color:#262626;border-radius:5px;">- Hello Chat -</h1>
        {{-- asset('img/imaage.jpg'); --}}

        {{-- form for insert message details --}}

        <form action="{{route('message.save')}}" method="post" >
            @csrf
            @if ($errors->count())
            <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $error)
                {{$error}}<br/>
                @endforeach
              </div>
                
            @endif
            <input type="text" name="name" id="" placeholder="Your name"  class="form-control"><br>            
            <input type="text" name="title" id="" placeholder="Your title" class="form-control"><br>
            <input type="text" name="content" id="" placeholder="Your message"  class="form-control" style="height: 75px;"><br>
            <input type="submit" value="Send Message" class="btn btn-success">
        </form>
    
        </div>
    </div>


<div class="container" style="background-color: #CECECE;">


        {{-- code for display messages --}}
<div class="output">
    <ul class="msg_show">
        @foreach ($messages as $message)
            <li class="divide"> <b><p>Sender :{{$message->name}}</p></b> <p>Message :{{$message->content}}</p> <br><p style="font-size: 12px;">{{Carbon\Carbon::parse($message->created_at)->diffForHumans()}}</p>
            <a class="btn btn-info" href="{{route('message.view',['message'=>$message->id])}}">View more</a><br>
            <hr>
            </li>
        @endforeach
    </ul>
</div>
</div>
</body>
</html>