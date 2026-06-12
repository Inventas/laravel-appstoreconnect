<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\EndUserLicenseAgreements;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * endUserLicenseAgreements_deleteInstance
 */
class EndUserLicenseAgreementsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/endUserLicenseAgreements/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
