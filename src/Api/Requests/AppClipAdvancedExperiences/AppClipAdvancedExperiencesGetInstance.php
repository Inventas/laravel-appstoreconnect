<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppClipAdvancedExperiences;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appClipAdvancedExperiences_getInstance
 */
class AppClipAdvancedExperiencesGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appClipAdvancedExperiences/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsappClipAdvancedExperiences
     * @param  array<int, string>|null  $fieldsappClips
     * @param  array<int, string>|null  $fieldsappClipAdvancedExperienceImages
     * @param  array<int, string>|null  $fieldsappClipAdvancedExperienceLocalizations
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsappClipAdvancedExperiences = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappClips = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappClipAdvancedExperienceImages = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappClipAdvancedExperienceLocalizations = null,
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
            'fields[appClipAdvancedExperiences]' => $this->fieldsappClipAdvancedExperiences,
            'fields[appClips]' => $this->fieldsappClips,
            'fields[appClipAdvancedExperienceImages]' => $this->fieldsappClipAdvancedExperienceImages,
            'fields[appClipAdvancedExperienceLocalizations]' => $this->fieldsappClipAdvancedExperienceLocalizations,
            'include' => $this->include,
            'limit[localizations]' => $this->limitlocalizations,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
