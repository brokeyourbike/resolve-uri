<?php

// Copyright (C) 2021 Ivan Stasiuk <brokeyourbike@gmail.com>.
//
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this file,
// You can obtain one at https://mozilla.org/MPL/2.0/.

namespace BrokeYourBike\ResolveUri;

use GuzzleHttp\Psr7\Utils;
use GuzzleHttp\Psr7\UriResolver;

/**
 * @author Ivan Stasiuk <brokeyourbike@gmail.com>
 */
trait ResolveUriTrait
{
    /**
     * @return \Psr\Http\Message\UriInterface
     */
    public function resolveUriFor(string $baseUri, string $uri): \Psr\Http\Message\UriInterface
    {
        $baseUri = Utils::uriFor($baseUri);
        $uri = Utils::uriFor($uri);

        return UriResolver::resolve($baseUri, $uri);
    }
}
