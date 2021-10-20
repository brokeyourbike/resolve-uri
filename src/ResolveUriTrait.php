<?php

// Copyright (C) 2021 Ivan Stasiuk <brokeyourbike@gmail.com>.
//
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this file,
// You can obtain one at https://mozilla.org/MPL/2.0/.

namespace BrokeYourBike\ResolveUri;

use Psr\Http\Message\UriInterface;
use GuzzleHttp\Psr7\Utils;
use GuzzleHttp\Psr7\UriResolver;

/**
 * @author Ivan Stasiuk <brokeyourbike@gmail.com>
 */
trait ResolveUriTrait
{
    /**
     * @param string|UriInterface $baseUri
     * @param string|UriInterface $uri
     * @return UriInterface
     */
    public function resolveUriFor($baseUri, $uri): UriInterface
    {
        $base = Utils::uriFor($baseUri);
        $rel = Utils::uriFor($uri);

        return UriResolver::resolve($base, $rel);
    }
}
