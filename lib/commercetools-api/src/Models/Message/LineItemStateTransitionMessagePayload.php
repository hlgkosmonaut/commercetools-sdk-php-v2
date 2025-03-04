<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\State\StateReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface LineItemStateTransitionMessagePayload extends OrderMessagePayload
{
    public const FIELD_LINE_ITEM_ID = 'lineItemId';
    public const FIELD_TRANSITION_DATE = 'transitionDate';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_FROM_STATE = 'fromState';
    public const FIELD_TO_STATE = 'toState';

    /**
     * @return null|string
     */
    public function getLineItemId();

    /**
     * @return null|DateTimeImmutable
     */
    public function getTransitionDate();

    /**
     * @return null|int
     */
    public function getQuantity();

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to a <a href="ctp:api:type:State">State</a>.</p>
     *
     * @return null|StateReference
     */
    public function getFromState();

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to a <a href="ctp:api:type:State">State</a>.</p>
     *
     * @return null|StateReference
     */
    public function getToState();

    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void;

    /**
     * @param ?DateTimeImmutable $transitionDate
     */
    public function setTransitionDate(?DateTimeImmutable $transitionDate): void;

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;

    /**
     * @param ?StateReference $fromState
     */
    public function setFromState(?StateReference $fromState): void;

    /**
     * @param ?StateReference $toState
     */
    public function setToState(?StateReference $toState): void;
}
