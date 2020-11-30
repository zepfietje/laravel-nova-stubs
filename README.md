[![Packagist Version](https://img.shields.io/packagist/v/zepfietje/laravel-nova-stubs)](https://packagist.org/packages/zepfietje/laravel-nova-stubs)
[![Packagist Downloads](https://img.shields.io/packagist/dt/zepfietje/laravel-nova-stubs)](https://packagist.org/packages/zepfietje/laravel-nova-stubs/stats)
[![Starware](https://img.shields.io/badge/⭐-Starware-f5a91a?labelColor=black)](https://github.com/zepfietje/starware)

# Laravel Nova Stubs

This package contains clean versions of the stubs shipped with Laravel Nova.  
Most notably, type declarations are used instead of DocBlocks.

## Installation

1. Install this package.
   ```console
   $ composer require zepfietje/laravel-nova-stubs --dev
   ```
2. Add the following hook to the scripts in `composer.json` to keep your stubs in sync with updates to this package.
   ```
   "post-update-cmd": [
       "@php artisan nova:stubs --force"
   ]
   ```
3. Publish the stubs.
   ```console
   $ php artisan nova:stubs
   ```

## Starware

Laravel Nova Stubs is Starware.  
This means you're free to use the project, as long as you star its GitHub repository.  
Your appreciation makes us grow and glow up. ⭐
