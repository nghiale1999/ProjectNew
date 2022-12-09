<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<style>
    .wrapper {
        display: flex;
        justify-content: center;
        margin: auto;
        align-items: center;
        width: 100%;
        height: 100%;
        --text-opacity: 1;
        color: #a0aec0;
        min-height: 100vh;
    }

    .text-error {
        display: flex;
        justify-content: center;
    }

    .text-error > .error-number {
        margin-right: 10px;
    }

    .text-error > .error-text {
        margin-left: 10px;
    }
</style>
<body>
<div class="wrapper">
    <div class="image-logo">
        <img src="{{ asset('dist/img/logo.png') }}" alt="">
    </div>
    <div class="text-error">
        <div class="error-number">404</div>
        <div class="error-text">NOT FOUND</div>
    </div>
</div>
</body>
</html>
