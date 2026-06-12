<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreReviewDetails;

use Inventas\AppStoreConnectKit\Api\Dto\AppStoreReviewDetailCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appStoreReviewDetails_createInstance
 */
class AppStoreReviewDetailsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/appStoreReviewDetails';
    }

    public function __construct(
        protected AppStoreReviewDetailCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
