<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionPromotions;

use Inventas\AppStoreConnectKit\Api\Dto\AppStoreVersionPromotionCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appStoreVersionPromotions_createInstance
 */
class AppStoreVersionPromotionsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/appStoreVersionPromotions';
    }

    public function __construct(
        protected AppStoreVersionPromotionCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
