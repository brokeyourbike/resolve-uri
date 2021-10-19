# resolve-uri

[![Latest Stable Version](https://img.shields.io/github/v/release/brokeyourbike/resolve-uri)](https://github.com/brokeyourbike/resolve-uri/releases)
[![Total Downloads](https://poser.pugx.org/brokeyourbike/resolve-uri/downloads)](https://packagist.org/packages/brokeyourbike/resolve-uri)
[![License: MPL-2.0](https://img.shields.io/badge/license-MPL--2.0-purple.svg)](https://github.com/brokeyourbike/resolve-uri/blob/main/LICENSE)

[![ci](https://github.com/brokeyourbike/resolve-uri/actions/workflows/ci.yml/badge.svg)](https://github.com/brokeyourbike/resolve-uri/actions/workflows/ci.yml)
[![codecov](https://codecov.io/gh/brokeyourbike/resolve-uri/branch/main/graph/badge.svg?token=ImcgnxzGfc)](https://codecov.io/gh/brokeyourbike/resolve-uri)
[![Type Coverage](https://shepherd.dev/github/brokeyourbike/resolve-uri/coverage.svg)](https://shepherd.dev/github/brokeyourbike/resolve-uri)

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
        $uri = $this->fetchUriFor('https://example.com', "products/{$productId}");
    }
}
```

## Why

Resolve URI when `base_url` is not defined in HTTP client.

## License
[Mozilla Public License v2.0](https://github.com/brokeyourbike/resolve-uri/blob/main/LICENSE)
