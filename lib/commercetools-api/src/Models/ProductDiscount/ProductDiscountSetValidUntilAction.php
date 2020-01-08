<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use DateTimeImmutable;

interface ProductDiscountSetValidUntilAction extends ProductDiscountUpdateAction
{
    const FIELD_VALID_UNTIL = 'validUntil';

    /**
     * <p>The time from which the discount should be ineffective.
     * Please take Eventual Consistency into account for calculated undiscounted values.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getValidUntil();

    public function setValidUntil(?DateTimeImmutable $validUntil): void;
}
