<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppInfos;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appInfos_appInfoLocalizations_getToManyRelated
 */
class AppInfosAppInfoLocalizationsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appInfos/{$this->id}/appInfoLocalizations";
    }

    /**
     * @param  array<int, string>|null  $filterlocale
     * @param  array<int, string>|null  $fieldsappInfoLocalizations
     * @param  array<int, string>|null  $fieldsappInfos
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterlocale = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappInfoLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappInfos = null,
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
            'filter[locale]' => $this->filterlocale,
            'fields[appInfoLocalizations]' => $this->fieldsappInfoLocalizations,
            'fields[appInfos]' => $this->fieldsappInfos,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
