<!doctype html>
<html lang="en">
<head>
    @include("Customer.Components.head")
</head>
<body>
<section class="screen-desktop">
    @include("Customer.Components.header")
    @yield("content")
    @include("Customer.Components.footer")
</section>
<section class="smart-phone">
    @include("Customer.Components-sp.header")
    @yield("content")
    @include("Customer.Components-sp.footer")
</section>
</body>
</html>
