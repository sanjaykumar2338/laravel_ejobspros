<!DOCTYPE html>
<html lang="en">
<head>
   @include('includes.head')
   <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
   @include('includes.header')
   @yield('content')
   @include('includes.footer')
</body>
</html>