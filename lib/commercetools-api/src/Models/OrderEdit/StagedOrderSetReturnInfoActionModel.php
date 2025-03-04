<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\ReturnInfoDraftCollection;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StagedOrderSetReturnInfoActionModel extends JsonObjectModel implements StagedOrderSetReturnInfoAction
{
    public const DISCRIMINATOR_VALUE = 'setReturnInfo';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?ReturnInfoDraftCollection
     */
    protected $items;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ReturnInfoDraftCollection $items = null
    ) {
        $this->items = $items;
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
     * @return null|ReturnInfoDraftCollection
     */
    public function getItems()
    {
        if (is_null($this->items)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->items = ReturnInfoDraftCollection::fromArray($data);
        }

        return $this->items;
    }


    /**
     * @param ?ReturnInfoDraftCollection $items
     */
    public function setItems(?ReturnInfoDraftCollection $items): void
    {
        $this->items = $items;
    }
}
