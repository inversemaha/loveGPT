<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>টিভি মেলা ২০২২</title>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <link rel="icon" type="image/png" href="/images/favicon.png">
    <meta property="og:image" content="{{ $thumbnail }}"/>
    <meta property="og:image:width" content="600"/>
    <meta property="og:image:height" content="375"/>
    <meta property="og:title" content="{{ $fb_title }} ">
    <meta property="og:description"
          content="{{ $fb_sub_title }}">
    <script>
        var app = angular.module('myApp', []);

        console.log("My App Initiated")

    </script>
</head>

<body ng-app="myApp">


@yield('content')


</body>


</html>
