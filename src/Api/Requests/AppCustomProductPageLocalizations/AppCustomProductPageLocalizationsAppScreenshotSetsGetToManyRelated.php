<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPageLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appCustomProductPageLocalizations_appScreenshotSets_getToManyRelated
 */
class AppCustomProductPageLocalizationsAppScreenshotSetsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appCustomProductPageLocalizations/{$this->id}/appScreenshotSets";
    }

    /**
     * @param  array<int, string>|null  $filterscreenshotDisplayType
     * @param  array<int, string>|null  $filterappStoreVersionLocalization
     * @param  array<int, string>|null  $filterappStoreVersionExperimentTreatmentLocalization
     * @param  array<int, string>|null  $fieldsappScreenshotSets
     * @param  array<int, string>|null  $fieldsappStoreVersionLocalizations
     * @param  array<int, string>|null  $fieldsappCustomProductPageLocalizations
     * @param  array<int, string>|null  $fieldsappStoreVersionExperimentTreatmentLocalizations
     * @param  array<int, string>|null  $fieldsappScreenshots
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterscreenshotDisplayType = null,
        /** @var array<int, string>|null */
        protected ?array $filterappStoreVersionLocalization = null,
        /** @var array<int, string>|null */
        protected ?array $filterappStoreVersionExperimentTreatmentLocalization = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappScreenshotSets = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreVersionLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappCustomProductPageLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreVersionExperimentTreatmentLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappScreenshots = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitappScreenshots = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[screenshotDisplayType]' => $this->filterscreenshotDisplayType,
            'filter[appStoreVersionLocalization]' => $this->filterappStoreVersionLocalization,
            'filter[appStoreVersionExperimentTreatmentLocalization]' => $this->filterappStoreVersionExperimentTreatmentLocalization,
            'fields[appScreenshotSets]' => $this->fieldsappScreenshotSets,
            'fields[appStoreVersionLocalizations]' => $this->fieldsappStoreVersionLocalizations,
            'fields[appCustomProductPageLocalizations]' => $this->fieldsappCustomProductPageLocalizations,
            'fields[appStoreVersionExperimentTreatmentLocalizations]' => $this->fieldsappStoreVersionExperimentTreatmentLocalizations,
            'fields[appScreenshots]' => $this->fieldsappScreenshots,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[appScreenshots]' => $this->limitappScreenshots,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
