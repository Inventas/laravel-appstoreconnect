<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppClipDefaultExperienceLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appClipDefaultExperienceLocalizations_getInstance
 */
class AppClipDefaultExperienceLocalizationsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appClipDefaultExperienceLocalizations/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsappClipDefaultExperienceLocalizations
     * @param  array<int, string>|null  $fieldsappClipDefaultExperiences
     * @param  array<int, string>|null  $fieldsappClipHeaderImages
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsappClipDefaultExperienceLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappClipDefaultExperiences = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappClipHeaderImages = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[appClipDefaultExperienceLocalizations]' => $this->fieldsappClipDefaultExperienceLocalizations,
            'fields[appClipDefaultExperiences]' => $this->fieldsappClipDefaultExperiences,
            'fields[appClipHeaderImages]' => $this->fieldsappClipHeaderImages,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
