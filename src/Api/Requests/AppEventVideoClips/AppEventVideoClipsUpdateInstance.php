<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppEventVideoClips;

use Inventas\AppStoreConnectKit\Api\Dto\AppEventVideoClipUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appEventVideoClips_updateInstance
 */
class AppEventVideoClipsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/appEventVideoClips/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected AppEventVideoClipUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
