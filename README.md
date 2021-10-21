# resolve-uri

[![Latest Stable Version](https://img.shields.io/github/v/release/brokeyourbike/resolve-uri-php)](https://github.com/brokeyourbike/resolve-uri-php/releases)
[![Total Downloads](https://poser.pugx.org/brokeyourbike/resolve-uri-php/downloads)](https://packagist.org/packages/brokeyourbike/resolve-uri-php)
[![License: MPL-2.0](https://img.shields.io/badge/license-MPL--2.0-purple.svg)](https://github.com/brokeyourbike/resolve-uri-php/blob/main/LICENSE)

[![ci](https://github.com/brokeyourbike/resolve-uri-php/actions/workflows/ci.yml/badge.svg)](https://github.com/brokeyourbike/resolve-uri-php/actions/workflows/ci.yml)
[![codecov](https://codecov.io/gh/brokeyourbike/resolve-uri-php/branch/main/graph/badge.svg?token=ImcgnxzGfc)](https://codecov.io/gh/brokeyourbike/resolve-uri-php)
[![Type Coverage](https://shepherd.dev/github/brokeyourbike/resolve-uri-php/coverage.svg)](https://shepherd.dev/github/brokeyourbike/resolve-uri-php)

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
