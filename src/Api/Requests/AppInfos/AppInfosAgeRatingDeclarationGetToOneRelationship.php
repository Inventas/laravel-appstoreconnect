<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppInfos;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appInfos_ageRatingDeclaration_getToOneRelationship
 */
class AppInfosAgeRatingDeclarationGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appInfos/{$this->id}/relationships/ageRatingDeclaration";
    }

    public function __construct(
        protected string $id,
    ) {}
}
