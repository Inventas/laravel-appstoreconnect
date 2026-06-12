<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppClips;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appClips_appClipAdvancedExperiences_getToManyRelated
 */
class AppClipsAppClipAdvancedExperiencesGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appClips/{$this->id}/appClipAdvancedExperiences";
    }

    /**
     * @param  array<int, string>|null  $filterstatus
     * @param  array<int, string>|null  $filterplaceStatus
     * @param  array<int, string>|null  $filteraction
     * @param  array<int, string>|null  $fieldsappClipAdvancedExperiences
     * @param  array<int, string>|null  $fieldsappClips
     * @param  array<int, string>|null  $fieldsappClipAdvancedExperienceImages
     * @param  array<int, string>|null  $fieldsappClipAdvancedExperienceLocalizations
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterstatus = null,
        /** @var array<int, string>|null */
        protected ?array $filterplaceStatus = null,
        /** @var array<int, string>|null */
        protected ?array $filteraction = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappClipAdvancedExperiences = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappClips = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappClipAdvancedExperienceImages = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappClipAdvancedExperienceLocalizations = null,
        protected ?int $limit = null,
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
            'filter[status]' => $this->filterstatus,
            'filter[placeStatus]' => $this->filterplaceStatus,
            'filter[action]' => $this->filteraction,
            'fields[appClipAdvancedExperiences]' => $this->fieldsappClipAdvancedExperiences,
            'fields[appClips]' => $this->fieldsappClips,
            'fields[appClipAdvancedExperienceImages]' => $this->fieldsappClipAdvancedExperienceImages,
            'fields[appClipAdvancedExperienceLocalizations]' => $this->fieldsappClipAdvancedExperienceLocalizations,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[localizations]' => $this->limitlocalizations,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
