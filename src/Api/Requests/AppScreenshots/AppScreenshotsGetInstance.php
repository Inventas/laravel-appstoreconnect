<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppScreenshots;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appScreenshots_getInstance
 */
class AppScreenshotsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appScreenshots/{$this->id}";
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
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
