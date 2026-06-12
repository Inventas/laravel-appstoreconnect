<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPageVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appCustomProductPageVersions_appCustomProductPageLocalizations_getToManyRelated
 */
class AppCustomProductPageVersionsAppCustomProductPageLocalizationsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appCustomProductPageVersions/{$this->id}/appCustomProductPageLocalizations";
    }

    /**
     * @param  array<int, string>|null  $filterlocale
     * @param  array<int, string>|null  $fieldsappCustomProductPageLocalizations
     * @param  array<int, string>|null  $fieldsappCustomProductPageVersions
     * @param  array<int, string>|null  $fieldsappScreenshotSets
     * @param  array<int, string>|null  $fieldsappPreviewSets
     * @param  array<int, string>|null  $fieldsappKeywords
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterlocale = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappCustomProductPageLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappCustomProductPageVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappScreenshotSets = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappPreviewSets = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappKeywords = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitappScreenshotSets = null,
        protected ?int $limitappPreviewSets = null,
        protected ?int $limitsearchKeywords = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[locale]' => $this->filterlocale,
            'fields[appCustomProductPageLocalizations]' => $this->fieldsappCustomProductPageLocalizations,
            'fields[appCustomProductPageVersions]' => $this->fieldsappCustomProductPageVersions,
            'fields[appScreenshotSets]' => $this->fieldsappScreenshotSets,
            'fields[appPreviewSets]' => $this->fieldsappPreviewSets,
            'fields[appKeywords]' => $this->fieldsappKeywords,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[appScreenshotSets]' => $this->limitappScreenshotSets,
            'limit[appPreviewSets]' => $this->limitappPreviewSets,
            'limit[searchKeywords]' => $this->limitsearchKeywords,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
