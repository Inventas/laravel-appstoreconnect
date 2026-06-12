<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppClipAppStoreReviewDetails;

use Inventas\AppStoreConnectKit\Api\Dto\AppClipAppStoreReviewDetailUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appClipAppStoreReviewDetails_updateInstance
 */
class AppClipAppStoreReviewDetailsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/appClipAppStoreReviewDetails/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected AppClipAppStoreReviewDetailUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
