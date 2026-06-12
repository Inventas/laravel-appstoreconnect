<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaBuildLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaBuildLocalizations_build_getToOneRelationship
 */
class BetaBuildLocalizationsBuildGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/betaBuildLocalizations/{$this->id}/relationships/build";
    }

    public function __construct(
        protected string $id,
    ) {}
}
