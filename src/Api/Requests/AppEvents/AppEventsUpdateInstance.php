<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppEvents;

use Inventas\AppStoreConnectKit\Api\Dto\AppEventUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appEvents_updateInstance
 */
class AppEventsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/appEvents/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected AppEventUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
