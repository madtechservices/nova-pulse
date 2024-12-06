# Nova Pulse

[![Latest Version](https://img.shields.io/github/release/madtechservices/nova-pulse.svg?style=flat-square)](https://github.com/madtechservices/nova-pulse/releases)
[![Total Downloads](https://img.shields.io/packagist/dt/madtechservices/nova-pulse.svg?style=flat-square)](https://packagist.org/packages/madtechservices/nova-pulse)

## Introduction

The Nova Pulse package provides an easy way to integrate Pulse into your Laravel Nova dashboard, allowing you to access Laravel Pulse directly from your Nova application.

## Installation

To install this package, you can use Composer:

```bash
composer require madtechservices/nova-pulse
```

## Usage

After installing the package, you'll need to register the tool in your app/Providers/NovaServiceProvider.php:

```php
use madtechservices\NovaPulse\NovaPulse;


// ...

public function tools()
{
    return [
        // ... Other Nova tools ...
        new NovaPulse,
    ];
}
```

This registration will add a new menu item in your Nova dashboard that links to Laravel Pulse, making it easily accessible for debugging and monitoring your application.

## Configuration
The Nova Pulse package doesn't require additional configuration out of the box. However, if you need to customize its behavior, you can change several options.

```php
use madtechservices\NovaPulse\NovaPulse;

// ...

public function tools()
{
    return [
        // ... Other Nova tools ...
        (new NovaPulse())->setName('CustomName')->setIcon('briefcase'),
    ];
}
```
