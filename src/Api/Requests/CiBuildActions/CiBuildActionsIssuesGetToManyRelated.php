<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\CiBuildActions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ciBuildActions_issues_getToManyRelated
 */
class CiBuildActionsIssuesGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/ciBuildActions/{$this->id}/issues";
    }

    /**
     * @param  array<int, string>|null  $fieldsciIssues
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsciIssues = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[ciIssues]' => $this->fieldsciIssues, 'limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
