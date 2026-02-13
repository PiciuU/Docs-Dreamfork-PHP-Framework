<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @component(html-elements/head);

        <style>
            @resource(css/welcome.css);
        </style>
    </head>
    <body>
        <div id="app">
            <main>
                <div class="main__content">
                    <h1> The PHP Framework </h1>
                    <h2> <span>Dreamfork</span> is a nimble and swift web application framework inspired by <a href="https://laravel.com" target="_blank">Laravel</a>, offering a lightweight and expressive syntax for seamless development.</h2>
                    <a class="main__btn" href="{{ app('url')->to('/docs/1.x/') }}">Get Started</a>
                </div>
            </main>
        </div>
    </body>
</html>
