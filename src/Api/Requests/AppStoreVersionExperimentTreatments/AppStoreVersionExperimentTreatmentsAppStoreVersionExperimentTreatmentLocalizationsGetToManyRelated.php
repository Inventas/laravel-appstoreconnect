<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionExperimentTreatments;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appStoreVersionExperimentTreatments_appStoreVersionExperimentTreatmentLocalizations_getToManyRelated
 */
class AppStoreVersionExperimentTreatmentsAppStoreVersionExperimentTreatmentLocalizationsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appStoreVersionExperimentTreatments/{$this->id}/appStoreVersionExperimentTreatmentLocalizations";
    }

    /**
     * @param  array<int, string>|null  $filterlocale
     * @param  array<int, string>|null  $fieldsappStoreVersionExperimentTreatmentLocalizations
     * @param  array<int, string>|null  $fieldsappStoreVersionExperimentTreatments
     * @param  array<int, string>|null  $fieldsappScreenshotSets
     * @param  array<int, string>|null  $fieldsappPreviewSets
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterlocale = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreVersionExperimentTreatmentLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreVersionExperimentTreatments = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappScreenshotSets = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappPreviewSets = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitappScreenshotSets = null,
        protected ?int $limitappPreviewSets = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[locale]' => $this->filterlocale,
            'fields[appStoreVersionExperimentTreatmentLocalizations]' => $this->fieldsappStoreVersionExperimentTreatmentLocalizations,
            'fields[appStoreVersionExperimentTreatments]' => $this->fieldsappStoreVersionExperimentTreatments,
            'fields[appScreenshotSets]' => $this->fieldsappScreenshotSets,
            'fields[appPreviewSets]' => $this->fieldsappPreviewSets,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[appScreenshotSets]' => $this->limitappScreenshotSets,
            'limit[appPreviewSets]' => $this->limitappPreviewSets,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
