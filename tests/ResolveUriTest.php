<?php

// Copyright (C) 2021 Ivan Stasiuk <brokeyourbike@gmail.com>.
//
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this file,
// You can obtain one at https://mozilla.org/MPL/2.0/.

namespace BrokeYourBike\Tests\ResolveUri;

use PHPUnit\Framework\TestCase;
use BrokeYourBike\ResolveUri\ResolveUriTrait;

/**
 * @author Ivan Stasiuk <brokeyourbike@gmail.com>
 */
class ResolveUriTest extends TestCase
{
    /** @test */
    public function it_uses_json_request_result_trait(): void
    {
        $usedTraits = class_uses(ApiClientFixture::class);

        $this->assertArrayHasKey(ResolveUriTrait::class, $usedTraits);
    }

    /** @test */
    public function it_can_resolve_uri()
    {
        $apiClient = new ApiClientFixture();

        $uri = $apiClient->resolveUriFor('https://example.com', 'hello-world');

        $this->assertInstanceOf(\Psr\Http\Message\UriInterface::class, $uri);
        $this->assertSame('https://example.com/hello-world', (string) $uri);
    }
}
