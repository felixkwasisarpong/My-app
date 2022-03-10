<html>
    <head>
        <title>Home</title>
    </head>

    <body>
        <h1>Welcome {{Auth()->user()->username}},</h1>
        <h2>You're logged in</h2>

        <div>
           <form method="post" action="{{route('logout')}}">
               @csrf
               <button type="submit">logout here</button>
           </form>
        </div>
    </body>
</html>
