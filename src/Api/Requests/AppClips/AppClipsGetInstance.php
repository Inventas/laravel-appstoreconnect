<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppClips;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appClips_getInstance
 */
class AppClipsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appClips/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsappClips
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsappClipDefaultExperiences
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsappClips = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappClipDefaultExperiences = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitappClipDefaultExperiences = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[appClips]' => $this->fieldsappClips,
            'fields[apps]' => $this->fieldsapps,
            'fields[appClipDefaultExperiences]' => $this->fieldsappClipDefaultExperiences,
            'include' => $this->include,
            'limit[appClipDefaultExperiences]' => $this->limitappClipDefaultExperiences,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
