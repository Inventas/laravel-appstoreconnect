<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\UserInvitations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * userInvitations_getInstance
 */
class UserInvitationsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/userInvitations/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsuserInvitations
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsuserInvitations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitvisibleApps = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[userInvitations]' => $this->fieldsuserInvitations,
            'fields[apps]' => $this->fieldsapps,
            'include' => $this->include,
            'limit[visibleApps]' => $this->limitvisibleApps,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
