<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta
            name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    >
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
    @livewireStyles
</head>
<body class="bg-amber-100 min-h-[100vh]">
<div class="bg-amber-50 mx-auto w-[80%] min-h-[100vh] p-2">
    <div class="phone-3 m-3">
        <livewire:debugger-info/>
    </div>
    @yield('html-content')
    @yield('users')
</div>
@livewireScripts
</body>
</html>


{{--This is not contain any component, but loads Livewire ant Alpine scripts--}}
