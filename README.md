# github-webhook-parser

This lib aims to convert Github API v3 events to PHP objects

## Install

Via Composer

`composer require prestashop/github-webhook-parser`

## Usage

Use the `WebhookHandler` class to retrieve the event:

```php
$payload = json_decode($request->getContent(), true);
$webhookHandler = new \PrestaShop\Github\WebhookHandler();

try {
    $event = $webhookHandler->handle($payload);
} catch (\PrestaShop\Github\Exception\EventNotHandledException $e) {
    ...
}

if ($event instanceof \PrestaShop\Github\Event\PullRequestEvent) {
    $action = $event->getAction();
    $pullRequest = $event->getPullRequest();
}
```

## Testing

``` bash
$ composer install
$ vendor/bin/phpunit
```

## Credits

- [All Contributors](https://github.com/PrestaShop/github-webhook-parser/contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.