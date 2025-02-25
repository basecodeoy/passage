<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Passage\Management;

final readonly class ApiKeys
{
    public function __construct(
        private Client $client,
    ) {
        //
    }

    public function list(): array
    {
        return $this->client->getByApp(path: 'api-keys')->json();
    }

    public function create(string $name): array
    {
        return $this->client->postByApp(path: 'api-keys', data: ['name' => $name])->json();
    }

    public function delete(string $apiKeyId): array
    {
        return $this->client->deleteByApp(path: 'api-keys/'.$apiKeyId)->json();
    }
}
