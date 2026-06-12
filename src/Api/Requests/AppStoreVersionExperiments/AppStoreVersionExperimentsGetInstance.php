<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionExperiments;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appStoreVersionExperiments_getInstance
 */
class AppStoreVersionExperimentsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appStoreVersionExperiments/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsappStoreVersionExperiments
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $fieldsappStoreVersionExperimentTreatments
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreVersionExperiments = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreVersionExperimentTreatments = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitappStoreVersionExperimentTreatments = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[appStoreVersionExperiments]' => $this->fieldsappStoreVersionExperiments,
            'fields[appStoreVersions]' => $this->fieldsappStoreVersions,
            'fields[appStoreVersionExperimentTreatments]' => $this->fieldsappStoreVersionExperimentTreatments,
            'include' => $this->include,
            'limit[appStoreVersionExperimentTreatments]' => $this->limitappStoreVersionExperimentTreatments,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
