<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class MultiBuyLineItemsTargetModel extends JsonObjectModel implements MultiBuyLineItemsTarget
{
    public const DISCRIMINATOR_VALUE = 'multiBuyLineItems';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $predicate;

    /**
     * @var ?int
     */
    protected $triggerQuantity;

    /**
     * @var ?int
     */
    protected $discountedQuantity;

    /**
     * @var ?int
     */
    protected $maxOccurrence;

    /**
     * @var ?string
     */
    protected $selectionMode;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $predicate = null,
        ?int $triggerQuantity = null,
        ?int $discountedQuantity = null,
        ?int $maxOccurrence = null,
        ?string $selectionMode = null
    ) {
        $this->predicate = $predicate;
        $this->triggerQuantity = $triggerQuantity;
        $this->discountedQuantity = $discountedQuantity;
        $this->maxOccurrence = $maxOccurrence;
        $this->selectionMode = $selectionMode;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Valid <a href="/../api/projects/predicates#lineitem-field-identifiers">LineItem target predicate</a>. The Discount will be applied to Line Items that are matched by the predicate.</p>
     *
     * @return null|string
     */
    public function getPredicate()
    {
        if (is_null($this->predicate)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PREDICATE);
            if (is_null($data)) {
                return null;
            }
            $this->predicate = (string) $data;
        }

        return $this->predicate;
    }

    /**
     * <p>Number of Line Items to be present in order to trigger an application of this Discount.</p>
     *
     * @return null|int
     */
    public function getTriggerQuantity()
    {
        if (is_null($this->triggerQuantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_TRIGGER_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->triggerQuantity = (int) $data;
        }

        return $this->triggerQuantity;
    }

    /**
     * <p>Number of Line Items that are discounted per application of this Discount.</p>
     *
     * @return null|int
     */
    public function getDiscountedQuantity()
    {
        if (is_null($this->discountedQuantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_DISCOUNTED_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->discountedQuantity = (int) $data;
        }

        return $this->discountedQuantity;
    }

    /**
     * <p>Maximum number of times this Discount can be applied.</p>
     *
     * @return null|int
     */
    public function getMaxOccurrence()
    {
        if (is_null($this->maxOccurrence)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_MAX_OCCURRENCE);
            if (is_null($data)) {
                return null;
            }
            $this->maxOccurrence = (int) $data;
        }

        return $this->maxOccurrence;
    }

    /**
     * <p>Discounts particular Line Items only according to the SelectionMode.</p>
     *
     * @return null|string
     */
    public function getSelectionMode()
    {
        if (is_null($this->selectionMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SELECTION_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->selectionMode = (string) $data;
        }

        return $this->selectionMode;
    }


    /**
     * @param ?string $predicate
     */
    public function setPredicate(?string $predicate): void
    {
        $this->predicate = $predicate;
    }

    /**
     * @param ?int $triggerQuantity
     */
    public function setTriggerQuantity(?int $triggerQuantity): void
    {
        $this->triggerQuantity = $triggerQuantity;
    }

    /**
     * @param ?int $discountedQuantity
     */
    public function setDiscountedQuantity(?int $discountedQuantity): void
    {
        $this->discountedQuantity = $discountedQuantity;
    }

    /**
     * @param ?int $maxOccurrence
     */
    public function setMaxOccurrence(?int $maxOccurrence): void
    {
        $this->maxOccurrence = $maxOccurrence;
    }

    /**
     * @param ?string $selectionMode
     */
    public function setSelectionMode(?string $selectionMode): void
    {
        $this->selectionMode = $selectionMode;
    }
}
