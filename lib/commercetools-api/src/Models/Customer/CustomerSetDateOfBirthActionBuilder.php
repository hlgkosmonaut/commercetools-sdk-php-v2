<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;
use DateTimeImmutable;

/**
 * @implements Builder<CustomerSetDateOfBirthAction>
 */
final class CustomerSetDateOfBirthActionBuilder implements Builder
{
    /**
     * @var ?DateTimeImmutable
     */
    private $dateOfBirth;

    /**
     * <p>If not defined, the date of birth is unset.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @return $this
     */
    public function withDateOfBirth(?DateTimeImmutable $dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    public function build(): CustomerSetDateOfBirthAction
    {
        return new CustomerSetDateOfBirthActionModel(
            $this->dateOfBirth
        );
    }

    public static function of(): CustomerSetDateOfBirthActionBuilder
    {
        return new self();
    }
}
