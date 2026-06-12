<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPageLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appCustomProductPageLocalizations_getInstance
 */
class AppCustomProductPageLocalizationsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appCustomProductPageLocalizations/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsappCustomProductPageLocalizations
     * @param  array<int, string>|null  $fieldsappCustomProductPageVersions
     * @param  array<int, string>|null  $fieldsappScreenshotSets
     * @param  array<int, string>|null  $fieldsappPreviewSets
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsappCustomProductPageLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappCustomProductPageVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappScreenshotSets = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappPreviewSets = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitappPreviewSets = null,
        protected ?int $limitappScreenshotSets = null,
        protected ?int $limitsearchKeywords = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[appCustomProductPageLocalizations]' => $this->fieldsappCustomProductPageLocalizations,
            'fields[appCustomProductPageVersions]' => $this->fieldsappCustomProductPageVersions,
            'fields[appScreenshotSets]' => $this->fieldsappScreenshotSets,
            'fields[appPreviewSets]' => $this->fieldsappPreviewSets,
            'include' => $this->include,
            'limit[appPreviewSets]' => $this->limitappPreviewSets,
            'limit[appScreenshotSets]' => $this->limitappScreenshotSets,
            'limit[searchKeywords]' => $this->limitsearchKeywords,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
