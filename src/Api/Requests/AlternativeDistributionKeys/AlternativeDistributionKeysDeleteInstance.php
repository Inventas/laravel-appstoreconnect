<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AlternativeDistributionKeys;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * alternativeDistributionKeys_deleteInstance
 */
class AlternativeDistributionKeysDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/alternativeDistributionKeys/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
