<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\PassTypeIds;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * passTypeIds_deleteInstance
 */
class PassTypeIdsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/passTypeIds/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
