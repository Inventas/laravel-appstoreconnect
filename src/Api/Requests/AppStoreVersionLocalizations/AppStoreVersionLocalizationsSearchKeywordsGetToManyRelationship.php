<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appStoreVersionLocalizations_searchKeywords_getToManyRelationship
 */
class AppStoreVersionLocalizationsSearchKeywordsGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appStoreVersionLocalizations/{$this->id}/relationships/searchKeywords";
    }

    public function __construct(
        protected string $id,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
