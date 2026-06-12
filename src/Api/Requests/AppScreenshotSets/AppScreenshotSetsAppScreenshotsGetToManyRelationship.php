<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppScreenshotSets;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appScreenshotSets_appScreenshots_getToManyRelationship
 */
class AppScreenshotSetsAppScreenshotsGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appScreenshotSets/{$this->id}/relationships/appScreenshots";
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
