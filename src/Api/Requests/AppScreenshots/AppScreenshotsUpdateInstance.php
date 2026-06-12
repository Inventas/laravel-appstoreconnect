<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppScreenshots;

use Inventas\AppStoreConnectKit\Api\Dto\AppScreenshotUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appScreenshots_updateInstance
 */
class AppScreenshotsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/appScreenshots/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected AppScreenshotUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
