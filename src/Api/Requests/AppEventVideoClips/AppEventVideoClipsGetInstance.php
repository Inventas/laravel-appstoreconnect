<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppEventVideoClips;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appEventVideoClips_getInstance
 */
class AppEventVideoClipsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appEventVideoClips/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsappEventVideoClips
     * @param  array<int, string>|null  $fieldsappEventLocalizations
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsappEventVideoClips = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappEventLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[appEventVideoClips]' => $this->fieldsappEventVideoClips,
            'fields[appEventLocalizations]' => $this->fieldsappEventLocalizations,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
