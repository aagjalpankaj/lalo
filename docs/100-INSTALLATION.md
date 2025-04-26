# Installation

### Install the package
```bash
composer require aagjalpankaj/lalo
```

### Publish the config
```bash
php artisan vendor:publish --provider="Aagjalpankaj\Lalo\ServiceProvider"
```

### Configure logging channel

Add `tap` option to any monolog logging channel in `logging.php` as below:

```php
'single' => [
    'driver' => 'single',
    'tap' => [Aagjalpankaj\Lalo\Logger::class],
    // other existing configuration...
],
```

Use the logging channel in `.env`:
```bash
LOG_CHANNEL=single
```
