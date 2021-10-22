# resolve-uri

[![Latest Stable Version](https://img.shields.io/github/v/release/brokeyourbike/resolve-uri-php)](https://github.com/brokeyourbike/resolve-uri-php/releases)
[![Total Downloads](https://poser.pugx.org/brokeyourbike/resolve-uri/downloads)](https://packagist.org/packages/brokeyourbike/resolve-uri)
[![License: MPL-2.0](https://img.shields.io/badge/license-MPL--2.0-purple.svg)](https://github.com/brokeyourbike/resolve-uri-php/blob/main/LICENSE)

[![Maintainability](https://api.codeclimate.com/v1/badges/3df6e54f7cf05830ded9/maintainability)](https://codeclimate.com/github/brokeyourbike/resolve-uri-php/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/3df6e54f7cf05830ded9/test_coverage)](https://codeclimate.com/github/brokeyourbike/resolve-uri-php/test_coverage)
[![tests](https://github.com/brokeyourbike/resolve-uri-php/actions/workflows/tests.yml/badge.svg)](https://github.com/brokeyourbike/resolve-uri-php/actions/workflows/tests.yml)

Trait for resolving URI

## Installation

```bash
composer require brokeyourbike/resolve-uri
```

## Usage

```php
use BrokeYourBike\ResolveUri\ResolveUriTrait;

class APIClient
{
    use ResolveUriTrait;

    public function fetchProduct(string $productId)
    {
        $uri = $this->resolveUriFor('https://example.com', "products/{$productId}");
    }
}
```

## Why

Resolve URI when `base_url` is not defined in HTTP client.

## License
[Mozilla Public License v2.0](https://github.com/brokeyourbike/resolve-uri-php/blob/main/LICENSE)
