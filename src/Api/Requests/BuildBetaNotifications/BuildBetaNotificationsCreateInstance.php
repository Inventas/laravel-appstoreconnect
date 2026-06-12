<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BuildBetaNotifications;

use Inventas\AppStoreConnectKit\Api\Dto\BuildBetaNotificationCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * buildBetaNotifications_createInstance
 */
class BuildBetaNotificationsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/buildBetaNotifications';
    }

    public function __construct(
        protected BuildBetaNotificationCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
