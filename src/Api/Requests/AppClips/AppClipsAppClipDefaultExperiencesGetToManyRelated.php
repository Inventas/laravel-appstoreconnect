<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppClips;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appClips_appClipDefaultExperiences_getToManyRelated
 */
class AppClipsAppClipDefaultExperiencesGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appClips/{$this->id}/appClipDefaultExperiences";
    }

    /**
     * @param  array<int, string>|null  $fieldsappClipDefaultExperiences
     * @param  array<int, string>|null  $fieldsappClips
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $fieldsappClipDefaultExperienceLocalizations
     * @param  array<int, string>|null  $fieldsappClipAppStoreReviewDetails
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        protected ?bool $existsreleaseWithAppStoreVersion = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappClipDefaultExperiences = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappClips = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappClipDefaultExperienceLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappClipAppStoreReviewDetails = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitappClipDefaultExperienceLocalizations = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'exists[releaseWithAppStoreVersion]' => $this->existsreleaseWithAppStoreVersion,
            'fields[appClipDefaultExperiences]' => $this->fieldsappClipDefaultExperiences,
            'fields[appClips]' => $this->fieldsappClips,
            'fields[appStoreVersions]' => $this->fieldsappStoreVersions,
            'fields[appClipDefaultExperienceLocalizations]' => $this->fieldsappClipDefaultExperienceLocalizations,
            'fields[appClipAppStoreReviewDetails]' => $this->fieldsappClipAppStoreReviewDetails,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[appClipDefaultExperienceLocalizations]' => $this->limitappClipDefaultExperienceLocalizations,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
