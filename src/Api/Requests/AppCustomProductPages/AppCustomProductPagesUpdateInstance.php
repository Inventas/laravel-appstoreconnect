<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPages;

use Inventas\AppStoreConnectKit\Api\Dto\AppCustomProductPageUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appCustomProductPages_updateInstance
 */
class AppCustomProductPagesUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/appCustomProductPages/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected AppCustomProductPageUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
