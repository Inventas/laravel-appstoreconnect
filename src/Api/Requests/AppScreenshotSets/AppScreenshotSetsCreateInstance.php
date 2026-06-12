<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppScreenshotSets;

use Inventas\AppStoreConnectKit\Api\Dto\AppScreenshotSetCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appScreenshotSets_createInstance
 */
class AppScreenshotSetsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/appScreenshotSets';
    }

    public function __construct(
        protected AppScreenshotSetCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
