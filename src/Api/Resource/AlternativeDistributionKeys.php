<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AlternativeDistributionKeyCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AlternativeDistributionKeys\AlternativeDistributionKeysCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AlternativeDistributionKeys\AlternativeDistributionKeysDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AlternativeDistributionKeys\AlternativeDistributionKeysGetCollection;
use Inventas\AppStoreConnectKit\Api\Requests\AlternativeDistributionKeys\AlternativeDistributionKeysGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AlternativeDistributionKeys extends BaseResource
{
    /**
     * @param  array<int, string>|null  $fieldsalternativeDistributionKeys
     */
    public function alternativeDistributionKeysGetCollection(
        ?bool $existsapp = null,
        ?array $fieldsalternativeDistributionKeys = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AlternativeDistributionKeysGetCollection($existsapp, $fieldsalternativeDistributionKeys, $limit));
    }

    public function alternativeDistributionKeysCreateInstance(
        AlternativeDistributionKeyCreateRequest $payload,
    ): Response {
        return $this->connector->send(new AlternativeDistributionKeysCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsalternativeDistributionKeys
     */
    public function alternativeDistributionKeysGetInstance(
        string $id,
        ?array $fieldsalternativeDistributionKeys = null,
    ): Response {
        return $this->connector->send(new AlternativeDistributionKeysGetInstance($id, $fieldsalternativeDistributionKeys));
    }

    public function alternativeDistributionKeysDeleteInstance(string $id): Response
    {
        return $this->connector->send(new AlternativeDistributionKeysDeleteInstance($id));
    }
}
