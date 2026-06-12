<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Webhooks;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * webhooks_getInstance
 */
class WebhooksGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/webhooks/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldswebhooks
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldswebhooks = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[webhooks]' => $this->fieldswebhooks, 'fields[apps]' => $this->fieldsapps, 'include' => $this->include], static fn (mixed $value): bool => $value !== null);
    }
}
