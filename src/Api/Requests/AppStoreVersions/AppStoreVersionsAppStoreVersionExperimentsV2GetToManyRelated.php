<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appStoreVersions_appStoreVersionExperimentsV2_getToManyRelated
 */
class AppStoreVersionsAppStoreVersionExperimentsV2GetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appStoreVersions/{$this->id}/appStoreVersionExperimentsV2";
    }

    /**
     * @param  array<int, string>|null  $filterstate
     * @param  array<int, string>|null  $fieldsappStoreVersionExperiments
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $fieldsappStoreVersionExperimentTreatments
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterstate = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreVersionExperiments = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreVersionExperimentTreatments = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitcontrolVersions = null,
        protected ?int $limitappStoreVersionExperimentTreatments = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[state]' => $this->filterstate,
            'fields[appStoreVersionExperiments]' => $this->fieldsappStoreVersionExperiments,
            'fields[apps]' => $this->fieldsapps,
            'fields[appStoreVersions]' => $this->fieldsappStoreVersions,
            'fields[appStoreVersionExperimentTreatments]' => $this->fieldsappStoreVersionExperimentTreatments,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[controlVersions]' => $this->limitcontrolVersions,
            'limit[appStoreVersionExperimentTreatments]' => $this->limitappStoreVersionExperimentTreatments,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
