<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppCategories;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appCategories_parent_getToOneRelationship
 */
class AppCategoriesParentGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appCategories/{$this->id}/relationships/parent";
    }

    public function __construct(
        protected string $id,
    ) {}
}
