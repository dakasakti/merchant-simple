<!DOCTYPE html>
<html>
<head>
    <title>@yield('judul')</title>
</head>
<body>
    <center>
        <h2>AIMERCH REVIEWS</h2>
        <p>Tempatnya mereview sebuah merch!</p>
        <a href="/home">Home</a>
        <a href="/about">About</a>
        <a href="/review">Review</a>

        <hr>
            @yield('isi')
        <hr>
        Copyright@2022 by Alya Adiba
    </center>
</body>
</html>