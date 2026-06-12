<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * apps_betaFeedbackScreenshotSubmissions_getToManyRelated
 */
class AppsBetaFeedbackScreenshotSubmissionsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/betaFeedbackScreenshotSubmissions";
    }

    /**
     * @param  array<int, string>|null  $filterdeviceModel
     * @param  array<int, string>|null  $filterosVersion
     * @param  array<int, string>|null  $filterappPlatform
     * @param  array<int, string>|null  $filterdevicePlatform
     * @param  array<int, string>|null  $filterbuild
     * @param  array<int, string>|null  $filterbuildPreReleaseVersion
     * @param  array<int, string>|null  $filtertester
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldsbetaFeedbackScreenshotSubmissions
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $fieldsbetaTesters
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterdeviceModel = null,
        /** @var array<int, string>|null */
        protected ?array $filterosVersion = null,
        /** @var array<int, string>|null */
        protected ?array $filterappPlatform = null,
        /** @var array<int, string>|null */
        protected ?array $filterdevicePlatform = null,
        /** @var array<int, string>|null */
        protected ?array $filterbuild = null,
        /** @var array<int, string>|null */
        protected ?array $filterbuildPreReleaseVersion = null,
        /** @var array<int, string>|null */
        protected ?array $filtertester = null,
        /** @var array<int, string>|null */
        protected ?array $sort = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaFeedbackScreenshotSubmissions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuilds = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaTesters = null,
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
            'filter[deviceModel]' => $this->filterdeviceModel,
            'filter[osVersion]' => $this->filterosVersion,
            'filter[appPlatform]' => $this->filterappPlatform,
            'filter[devicePlatform]' => $this->filterdevicePlatform,
            'filter[build]' => $this->filterbuild,
            'filter[build.preReleaseVersion]' => $this->filterbuildPreReleaseVersion,
            'filter[tester]' => $this->filtertester,
            'sort' => $this->sort,
            'fields[betaFeedbackScreenshotSubmissions]' => $this->fieldsbetaFeedbackScreenshotSubmissions,
            'fields[builds]' => $this->fieldsbuilds,
            'fields[betaTesters]' => $this->fieldsbetaTesters,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
