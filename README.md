# Hypernova Blade Directive

## Setup
Install Nova Directive for Laravel Blade using Composer inside the project folder.

```shell
composer require marconi1992/hypernova-blade-directive
```

Add `NovaServiceProvider` in application config `config/app.php`

```php

return [
    ...
    'providers': [
        ...
        Illuminate\View\ViewServiceProvider::class,
        /*
         * Package Service Providers...
         */
        Marconi\Nova\NovaServiceProvider::class,
        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        ...
    ]
    ...
]

```

## Use Nova Directive in a Laravel view

Add the `Example` view on the welcome page.

`resources/views/welcome.blade.php`

```html
<html>
    ...
    <body>
        ...
        <div class="content">
            <div class="title m-b-md">
                Laravel
            </div>
            <!-- Nova Directive starts -->
            @hypernova('Example', [ 'title' => 'Ara Framework'])
            <!-- Nova Directive ends -->
            <div class="links">
                <a href="https://laravel.com/docs">Docs</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://blog.laravel.com">Blog</a>
                <a href="https://nova.laravel.com">Nova</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>
        </div>
        ...
    </body>
</html>
```