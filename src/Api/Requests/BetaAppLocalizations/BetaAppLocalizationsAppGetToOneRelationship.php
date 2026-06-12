<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaAppLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaAppLocalizations_app_getToOneRelationship
 */
class BetaAppLocalizationsAppGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/betaAppLocalizations/{$this->id}/relationships/app";
    }

    public function __construct(
        protected string $id,
    ) {}
}
