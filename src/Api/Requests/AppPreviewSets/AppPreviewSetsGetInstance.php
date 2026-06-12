<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppPreviewSets;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appPreviewSets_getInstance
 */
class AppPreviewSetsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appPreviewSets/{$this->id}";
    }

    /**
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
        protected ?array $fieldsappPreviewSets = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreVersionLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappCustomProductPageLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreVersionExperimentTreatmentLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappPreviews = null,
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
            'fields[appPreviewSets]' => $this->fieldsappPreviewSets,
            'fields[appStoreVersionLocalizations]' => $this->fieldsappStoreVersionLocalizations,
            'fields[appCustomProductPageLocalizations]' => $this->fieldsappCustomProductPageLocalizations,
            'fields[appStoreVersionExperimentTreatmentLocalizations]' => $this->fieldsappStoreVersionExperimentTreatmentLocalizations,
            'fields[appPreviews]' => $this->fieldsappPreviews,
            'include' => $this->include,
            'limit[appPreviews]' => $this->limitappPreviews,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
