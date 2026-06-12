<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreReviewDetails;

use Inventas\AppStoreConnectKit\Api\Dto\AppStoreReviewDetailUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appStoreReviewDetails_updateInstance
 */
class AppStoreReviewDetailsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/appStoreReviewDetails/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected AppStoreReviewDetailUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
