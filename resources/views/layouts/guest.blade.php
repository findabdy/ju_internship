<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome To JU Internship</title>
</head>
<body>
    <div class="">
        <div>
            <h1 style="text-align:center;color:red;">Welcome To HOMEPIA</h1>
        </div>
        <div class="main" style="display:flex;">
            <div style="margin:10px;padding:10px;width:30%;border: 1px solid red;min-height: 1000px;">
                <h3>Sidebar</h3>
            </div>
            <div style="padding:10px;margin:10px;width:70%;border: 1px solid green; min-height:1000px;   ">
                <h3>Body</h3>
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
