<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppClipAdvancedExperienceImages;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appClipAdvancedExperienceImages_getInstance
 */
class AppClipAdvancedExperienceImagesGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appClipAdvancedExperienceImages/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsappClipAdvancedExperienceImages
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsappClipAdvancedExperienceImages = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[appClipAdvancedExperienceImages]' => $this->fieldsappClipAdvancedExperienceImages], static fn (mixed $value): bool => $value !== null);
    }
}
