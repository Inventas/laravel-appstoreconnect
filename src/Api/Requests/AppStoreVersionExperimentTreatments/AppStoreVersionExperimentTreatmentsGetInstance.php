<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionExperimentTreatments;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appStoreVersionExperimentTreatments_getInstance
 */
class AppStoreVersionExperimentTreatmentsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appStoreVersionExperimentTreatments/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsappStoreVersionExperimentTreatments
     * @param  array<int, string>|null  $fieldsappStoreVersionExperiments
     * @param  array<int, string>|null  $fieldsappStoreVersionExperimentTreatmentLocalizations
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreVersionExperimentTreatments = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreVersionExperiments = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreVersionExperimentTreatmentLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitappStoreVersionExperimentTreatmentLocalizations = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[appStoreVersionExperimentTreatments]' => $this->fieldsappStoreVersionExperimentTreatments,
            'fields[appStoreVersionExperiments]' => $this->fieldsappStoreVersionExperiments,
            'fields[appStoreVersionExperimentTreatmentLocalizations]' => $this->fieldsappStoreVersionExperimentTreatmentLocalizations,
            'include' => $this->include,
            'limit[appStoreVersionExperimentTreatmentLocalizations]' => $this->limitappStoreVersionExperimentTreatmentLocalizations,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
