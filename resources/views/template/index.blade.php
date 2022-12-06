<!DOCTYPE html>
<html lang="en">

<head>

    @include('template.partials._head')

</head>

<body>

    @include('template.partials._nav')

    <div class="container">
        <div class="row">
            @include('template.partials._main')
            @include('template.partials._aside')
        </div>
    </div>

    @include('template.partials._footer')

    @include('template.partials._scripts')

</body>

</html>
