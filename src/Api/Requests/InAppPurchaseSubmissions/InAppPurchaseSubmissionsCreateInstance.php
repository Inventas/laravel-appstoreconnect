<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseSubmissions;

use Inventas\AppStoreConnectKit\Api\Dto\InAppPurchaseSubmissionCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * inAppPurchaseSubmissions_createInstance
 */
class InAppPurchaseSubmissionsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/inAppPurchaseSubmissions';
    }

    public function __construct(
        protected InAppPurchaseSubmissionCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
