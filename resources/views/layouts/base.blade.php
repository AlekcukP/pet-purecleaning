<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <script src="js/app.js" async></script>
    <title>Pure House Cleaning</title>
</head>
<body>
    <header class="header">
        <div class="header_logo">
            <span class="header_pure">pure </span>
            <span class="header_house">housecleaning</span>
        </div>
        <div>
            <span class="header_serving">serving </span>
            <span class="header_county">king county</span>
        </div>
    </header>
    <main>
        @section('content')
        @show
    </main>
    <footer class="footer">
        <ul class="footer_links">
            <li><a href="">Privacy Policy</a></li>
            <li><a href="">Terms of Service</a></li>
            <li><a href=""></a>Cancellation Policy</li>
        </ul>
        <p>2021 Pure House Cleaning. All rights reserved</p>
    </footer>
</body>
</html>
