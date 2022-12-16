<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}" >
    @livewireStyles
<body>
<div class="container">
    <div class="row" style="margin-top: 50px">
       <div class="col-md-6 offset-md-3">
           <h1>Multi Step form</h1><hr>
           @livewire('multi-step-form')
       </div>
    </div>
</div>
@livewireScripts
</body>
</html>
