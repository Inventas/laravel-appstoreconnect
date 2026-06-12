<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppPreviews;

use Inventas\AppStoreConnectKit\Api\Dto\AppPreviewUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appPreviews_updateInstance
 */
class AppPreviewsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/appPreviews/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected AppPreviewUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
