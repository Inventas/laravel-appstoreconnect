<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * apps_buildUploads_getToManyRelated
 */
class AppsBuildUploadsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/buildUploads";
    }

    /**
     * @param  array<int, string>|null  $filtercfBundleShortVersionString
     * @param  array<int, string>|null  $filtercfBundleVersion
     * @param  array<int, string>|null  $filterplatform
     * @param  array<int, string>|null  $filterstate
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldsbuildUploads
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $fieldsbuildUploadFiles
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filtercfBundleShortVersionString = null,
        /** @var array<int, string>|null */
        protected ?array $filtercfBundleVersion = null,
        /** @var array<int, string>|null */
        protected ?array $filterplatform = null,
        /** @var array<int, string>|null */
        protected ?array $filterstate = null,
        /** @var array<int, string>|null */
        protected ?array $sort = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuildUploads = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuilds = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuildUploadFiles = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[cfBundleShortVersionString]' => $this->filtercfBundleShortVersionString,
            'filter[cfBundleVersion]' => $this->filtercfBundleVersion,
            'filter[platform]' => $this->filterplatform,
            'filter[state]' => $this->filterstate,
            'sort' => $this->sort,
            'fields[buildUploads]' => $this->fieldsbuildUploads,
            'fields[builds]' => $this->fieldsbuilds,
            'fields[buildUploadFiles]' => $this->fieldsbuildUploadFiles,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
