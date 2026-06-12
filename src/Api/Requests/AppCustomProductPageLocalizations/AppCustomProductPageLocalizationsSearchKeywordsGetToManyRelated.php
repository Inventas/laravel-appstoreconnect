<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPageLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appCustomProductPageLocalizations_searchKeywords_getToManyRelated
 */
class AppCustomProductPageLocalizationsSearchKeywordsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appCustomProductPageLocalizations/{$this->id}/searchKeywords";
    }

    /**
     * @param  array<int, string>|null  $filterplatform
     * @param  array<int, string>|null  $filterlocale
     * @param  array<int, string>|null  $fieldsappKeywords
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterplatform = null,
        /** @var array<int, string>|null */
        protected ?array $filterlocale = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappKeywords = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[platform]' => $this->filterplatform,
            'filter[locale]' => $this->filterlocale,
            'fields[appKeywords]' => $this->fieldsappKeywords,
            'limit' => $this->limit,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
