<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Certificates;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * certificates_passTypeId_getToOneRelationship
 */
class CertificatesPassTypeIdGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/certificates/{$this->id}/relationships/passTypeId";
    }

    public function __construct(
        protected string $id,
    ) {}
}
