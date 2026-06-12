<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaLicenseAgreements;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaLicenseAgreements_app_getToOneRelationship
 */
class BetaLicenseAgreementsAppGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/betaLicenseAgreements/{$this->id}/relationships/app";
    }

    public function __construct(
        protected string $id,
    ) {}
}
