<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * apps_betaLicenseAgreement_getToOneRelationship
 */
class AppsBetaLicenseAgreementGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/relationships/betaLicenseAgreement";
    }

    public function __construct(
        protected string $id,
    ) {}
}
