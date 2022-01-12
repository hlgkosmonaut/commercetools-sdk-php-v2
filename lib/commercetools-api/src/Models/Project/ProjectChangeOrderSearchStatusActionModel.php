<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProjectChangeOrderSearchStatusActionModel extends JsonObjectModel implements ProjectChangeOrderSearchStatusAction
{
    public const DISCRIMINATOR_VALUE = 'changeOrderSearchStatus';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $status;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $status = null
    ) {
        $this->status = $status;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Activated indicates that the Order Search feature is active. Deactivated means that the namely feature is currently configured to be inactive.</p>
     *
     * @return null|string
     */
    public function getStatus()
    {
        if (is_null($this->status)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_STATUS);
            if (is_null($data)) {
                return null;
            }
            $this->status = (string) $data;
        }

        return $this->status;
    }


    /**
     * @param ?string $status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }
}
