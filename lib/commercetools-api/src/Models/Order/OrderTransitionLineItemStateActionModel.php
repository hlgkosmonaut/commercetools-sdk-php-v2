<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifierModel;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

final class OrderTransitionLineItemStateActionModel extends JsonObjectModel implements OrderTransitionLineItemStateAction
{
    const DISCRIMINATOR_VALUE = 'transitionLineItemState';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $lineItemId;

    /**
     * @var ?int
     */
    protected $quantity;

    /**
     * @var ?StateResourceIdentifier
     */
    protected $fromState;

    /**
     * @var ?StateResourceIdentifier
     */
    protected $toState;

    /**
     * @var ?DateTimeImmutable
     */
    protected $actualTransitionDate;

    public function __construct(
        string $lineItemId = null,
        int $quantity = null,
        StateResourceIdentifier $fromState = null,
        StateResourceIdentifier $toState = null,
        DateTimeImmutable $actualTransitionDate = null
    ) {
        $this->lineItemId = $lineItemId;
        $this->quantity = $quantity;
        $this->fromState = $fromState;
        $this->toState = $toState;
        $this->actualTransitionDate = $actualTransitionDate;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getLineItemId()
    {
        if (is_null($this->lineItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderTransitionLineItemStateAction::FIELD_LINE_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->lineItemId = (string) $data;
        }

        return $this->lineItemId;
    }

    /**
     * @return null|int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(OrderTransitionLineItemStateAction::FIELD_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->quantity = (int) $data;
        }

        return $this->quantity;
    }

    /**
     * @return null|StateResourceIdentifier
     */
    public function getFromState()
    {
        if (is_null($this->fromState)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(OrderTransitionLineItemStateAction::FIELD_FROM_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->fromState = StateResourceIdentifierModel::of($data);
        }

        return $this->fromState;
    }

    /**
     * @return null|StateResourceIdentifier
     */
    public function getToState()
    {
        if (is_null($this->toState)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(OrderTransitionLineItemStateAction::FIELD_TO_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->toState = StateResourceIdentifierModel::of($data);
        }

        return $this->toState;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getActualTransitionDate()
    {
        if (is_null($this->actualTransitionDate)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderTransitionLineItemStateAction::FIELD_ACTUAL_TRANSITION_DATE);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->actualTransitionDate = $data;
        }

        return $this->actualTransitionDate;
    }

    public function setLineItemId(?string $lineItemId): void
    {
        $this->lineItemId = $lineItemId;
    }

    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function setFromState(?StateResourceIdentifier $fromState): void
    {
        $this->fromState = $fromState;
    }

    public function setToState(?StateResourceIdentifier $toState): void
    {
        $this->toState = $toState;
    }

    public function setActualTransitionDate(?DateTimeImmutable $actualTransitionDate): void
    {
        $this->actualTransitionDate = $actualTransitionDate;
    }

    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[OrderTransitionLineItemStateAction::FIELD_ACTUAL_TRANSITION_DATE]) && $data[OrderTransitionLineItemStateAction::FIELD_ACTUAL_TRANSITION_DATE] instanceof \DateTimeImmutable) {
            $data[OrderTransitionLineItemStateAction::FIELD_ACTUAL_TRANSITION_DATE] = $data[OrderTransitionLineItemStateAction::FIELD_ACTUAL_TRANSITION_DATE]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        return (object) $data;
    }
}
