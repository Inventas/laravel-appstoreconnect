<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\CiBuildActions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ciBuildActions_testResults_getToManyRelated
 */
class CiBuildActionsTestResultsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/ciBuildActions/{$this->id}/testResults";
    }

    /**
     * @param  array<int, string>|null  $fieldsciTestResults
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsciTestResults = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[ciTestResults]' => $this->fieldsciTestResults, 'limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
