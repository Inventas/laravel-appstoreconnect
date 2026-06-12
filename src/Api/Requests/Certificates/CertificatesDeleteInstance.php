<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Certificates;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * certificates_deleteInstance
 */
class CertificatesDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/certificates/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
