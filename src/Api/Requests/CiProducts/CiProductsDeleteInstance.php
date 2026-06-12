<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\CiProducts;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ciProducts_deleteInstance
 */
class CiProductsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/ciProducts/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
