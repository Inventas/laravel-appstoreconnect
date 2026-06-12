<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\CiProducts;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ciProducts_app_getToOneRelationship
 */
class CiProductsAppGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/ciProducts/{$this->id}/relationships/app";
    }

    public function __construct(
        protected string $id,
    ) {}
}
