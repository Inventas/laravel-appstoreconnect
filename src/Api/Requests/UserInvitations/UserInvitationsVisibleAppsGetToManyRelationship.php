<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\UserInvitations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * userInvitations_visibleApps_getToManyRelationship
 */
class UserInvitationsVisibleAppsGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/userInvitations/{$this->id}/relationships/visibleApps";
    }

    public function __construct(
        protected string $id,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
