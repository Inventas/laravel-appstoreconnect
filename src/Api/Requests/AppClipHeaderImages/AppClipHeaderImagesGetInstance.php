<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppClipHeaderImages;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appClipHeaderImages_getInstance
 */
class AppClipHeaderImagesGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appClipHeaderImages/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsappClipHeaderImages
     * @param  array<int, string>|null  $fieldsappClipDefaultExperienceLocalizations
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsappClipHeaderImages = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappClipDefaultExperienceLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[appClipHeaderImages]' => $this->fieldsappClipHeaderImages,
            'fields[appClipDefaultExperienceLocalizations]' => $this->fieldsappClipDefaultExperienceLocalizations,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
