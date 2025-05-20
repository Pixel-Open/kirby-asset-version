# Asset version plugin for Kirby CMS

![GitHub release (with filter)](https://img.shields.io/github/v/release/Pixel-Open/kirby-asset-version)
[![Dependency](https://img.shields.io/badge/kirby-3.9/4.0/5.0-cca000.svg)](https://getkirby.com/)
[![Quality](https://sonarcloud.io/api/project_badges/measure?project=Pixel-Open_kirby-asset-version&metric=alert_status)](https://sonarcloud.io/summary/new_code?id=Pixel-Open_kirby-asset-version)

A plugin for [Kirby CMS](http://getkirby.com) to add modification timestamps to your assets files (js and css), as long as they are embedded with the css() and js() helpers.

This plugin is a fork on cachebuster developped by Timo Schneider : https://github.com/schnti/kirby3-cachebuster

We have simplified it at the code level and above all, asset versioning does not require URL rewriting, it is Apache and nginx compatible

## Commercial Usage

This plugin is free but if you use it in a commercial project please consider

- [making a donation](https://www.paypal.me/schnti/5) for Timo Schneider

## Installation

### Download

[Download the files](https://github.com/Pixel-Open/kirby-asset-version/releases) and place them inside `site/plugins/asset-version`.

### Composer

```
composer require pixelopen/kirby-asset-version
```

### Git Submodule
You can add the plugin as a Git submodule.

    $ cd your/project/root
    $ git submodule add https://github.com/Pixel-Open/kirby-asset-version.git site/plugins/asset-version
    $ git submodule update --init --recursive
    $ git commit -am "Add Kirby asset version plugin"

Run these commands to update the plugin:

    $ cd your/project/root
    $ git submodule foreach git checkout master
    $ git submodule foreach git pull
    $ git commit -am "Update submodules"
    $ git submodule update --init --recursive

## Options

You can disable the plugin with the following line in your `/site/config/config.php`:

```php
return [
  'pixelopen.asset-version.active' => false,
];
```


