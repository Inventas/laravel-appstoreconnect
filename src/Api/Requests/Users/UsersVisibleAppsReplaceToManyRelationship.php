<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Users;

use Inventas\AppStoreConnectKit\Api\Dto\UserVisibleAppsLinkagesRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * users_visibleApps_replaceToManyRelationship
 */
class UsersVisibleAppsReplaceToManyRelationship extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/users/{$this->id}/relationships/visibleApps";
    }

    public function __construct(
        protected string $id,
        protected UserVisibleAppsLinkagesRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
