<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppEventLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appEventLocalizations_getInstance
 */
class AppEventLocalizationsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appEventLocalizations/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsappEventLocalizations
     * @param  array<int, string>|null  $fieldsappEvents
     * @param  array<int, string>|null  $fieldsappEventScreenshots
     * @param  array<int, string>|null  $fieldsappEventVideoClips
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsappEventLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappEvents = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappEventScreenshots = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappEventVideoClips = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitappEventScreenshots = null,
        protected ?int $limitappEventVideoClips = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[appEventLocalizations]' => $this->fieldsappEventLocalizations,
            'fields[appEvents]' => $this->fieldsappEvents,
            'fields[appEventScreenshots]' => $this->fieldsappEventScreenshots,
            'fields[appEventVideoClips]' => $this->fieldsappEventVideoClips,
            'include' => $this->include,
            'limit[appEventScreenshots]' => $this->limitappEventScreenshots,
            'limit[appEventVideoClips]' => $this->limitappEventVideoClips,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
