<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * apps_appClips_getToManyRelated
 */
class AppsAppClipsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/appClips";
    }

    /**
     * @param  array<int, string>|null  $filterbundleId
     * @param  array<int, string>|null  $fieldsappClips
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsappClipDefaultExperiences
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterbundleId = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappClips = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappClipDefaultExperiences = null,
        protected ?int $limit = null,
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
            'filter[bundleId]' => $this->filterbundleId,
            'fields[appClips]' => $this->fieldsappClips,
            'fields[apps]' => $this->fieldsapps,
            'fields[appClipDefaultExperiences]' => $this->fieldsappClipDefaultExperiences,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[appClipDefaultExperiences]' => $this->limitappClipDefaultExperiences,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
