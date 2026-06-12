<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Users;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * users_visibleApps_getToManyRelationship
 */
class UsersVisibleAppsGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/users/{$this->id}/relationships/visibleApps";
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
