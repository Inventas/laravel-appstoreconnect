<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppEvents;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appEvents_getInstance
 */
class AppEventsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appEvents/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsappEvents
     * @param  array<int, string>|null  $fieldsappEventLocalizations
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsappEvents = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappEventLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitlocalizations = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[appEvents]' => $this->fieldsappEvents,
            'fields[appEventLocalizations]' => $this->fieldsappEventLocalizations,
            'include' => $this->include,
            'limit[localizations]' => $this->limitlocalizations,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
