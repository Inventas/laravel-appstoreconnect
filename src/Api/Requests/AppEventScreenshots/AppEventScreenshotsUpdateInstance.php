<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppEventScreenshots;

use Inventas\AppStoreConnectKit\Api\Dto\AppEventScreenshotUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appEventScreenshots_updateInstance
 */
class AppEventScreenshotsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/appEventScreenshots/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected AppEventScreenshotUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
