<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppScreenshotSets;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appScreenshotSets_appScreenshots_getToManyRelated
 */
class AppScreenshotSetsAppScreenshotsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appScreenshotSets/{$this->id}/appScreenshots";
    }

    /**
     * @param  array<int, string>|null  $fieldsappScreenshots
     * @param  array<int, string>|null  $fieldsappScreenshotSets
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsappScreenshots = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappScreenshotSets = null,
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
            'fields[appScreenshots]' => $this->fieldsappScreenshots,
            'fields[appScreenshotSets]' => $this->fieldsappScreenshotSets,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
