<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppClipHeaderImages;

use Inventas\AppStoreConnectKit\Api\Dto\AppClipHeaderImageUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appClipHeaderImages_updateInstance
 */
class AppClipHeaderImagesUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/appClipHeaderImages/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected AppClipHeaderImageUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
