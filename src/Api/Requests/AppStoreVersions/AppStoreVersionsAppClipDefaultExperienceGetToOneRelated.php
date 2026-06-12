<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appStoreVersions_appClipDefaultExperience_getToOneRelated
 */
class AppStoreVersionsAppClipDefaultExperienceGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appStoreVersions/{$this->id}/appClipDefaultExperience";
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
            'fields[appClipDefaultExperiences]' => $this->fieldsappClipDefaultExperiences,
            'fields[appClips]' => $this->fieldsappClips,
            'fields[appStoreVersions]' => $this->fieldsappStoreVersions,
            'fields[appClipDefaultExperienceLocalizations]' => $this->fieldsappClipDefaultExperienceLocalizations,
            'fields[appClipAppStoreReviewDetails]' => $this->fieldsappClipAppStoreReviewDetails,
            'include' => $this->include,
            'limit[appClipDefaultExperienceLocalizations]' => $this->limitappClipDefaultExperienceLocalizations,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
