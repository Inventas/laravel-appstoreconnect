<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPageLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appCustomProductPageLocalizations_appPreviewSets_getToManyRelated
 */
class AppCustomProductPageLocalizationsAppPreviewSetsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appCustomProductPageLocalizations/{$this->id}/appPreviewSets";
    }

    /**
     * @param  array<int, string>|null  $filterpreviewType
     * @param  array<int, string>|null  $filterappStoreVersionLocalization
     * @param  array<int, string>|null  $filterappStoreVersionExperimentTreatmentLocalization
     * @param  array<int, string>|null  $fieldsappPreviewSets
     * @param  array<int, string>|null  $fieldsappStoreVersionLocalizations
     * @param  array<int, string>|null  $fieldsappCustomProductPageLocalizations
     * @param  array<int, string>|null  $fieldsappStoreVersionExperimentTreatmentLocalizations
     * @param  array<int, string>|null  $fieldsappPreviews
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterpreviewType = null,
        /** @var array<int, string>|null */
        protected ?array $filterappStoreVersionLocalization = null,
        /** @var array<int, string>|null */
        protected ?array $filterappStoreVersionExperimentTreatmentLocalization = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappPreviewSets = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreVersionLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappCustomProductPageLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreVersionExperimentTreatmentLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappPreviews = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitappPreviews = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[previewType]' => $this->filterpreviewType,
            'filter[appStoreVersionLocalization]' => $this->filterappStoreVersionLocalization,
            'filter[appStoreVersionExperimentTreatmentLocalization]' => $this->filterappStoreVersionExperimentTreatmentLocalization,
            'fields[appPreviewSets]' => $this->fieldsappPreviewSets,
            'fields[appStoreVersionLocalizations]' => $this->fieldsappStoreVersionLocalizations,
            'fields[appCustomProductPageLocalizations]' => $this->fieldsappCustomProductPageLocalizations,
            'fields[appStoreVersionExperimentTreatmentLocalizations]' => $this->fieldsappStoreVersionExperimentTreatmentLocalizations,
            'fields[appPreviews]' => $this->fieldsappPreviews,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[appPreviews]' => $this->limitappPreviews,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
