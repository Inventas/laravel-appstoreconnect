<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppClipAppStoreReviewDetails;

use Inventas\AppStoreConnectKit\Api\Dto\AppClipAppStoreReviewDetailCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appClipAppStoreReviewDetails_createInstance
 */
class AppClipAppStoreReviewDetailsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/appClipAppStoreReviewDetails';
    }

    public function __construct(
        protected AppClipAppStoreReviewDetailCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
