<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderCustomerGroupSetMessage>
 *
 * @method OrderCustomerGroupSetMessage current()
 * @method OrderCustomerGroupSetMessage at($offset)
 */
class OrderCustomerGroupSetMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderCustomerGroupSetMessage $value
     * @psalm-param OrderCustomerGroupSetMessage|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return OrderCustomerGroupSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderCustomerGroupSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderCustomerGroupSetMessage
     */
    protected function mapper()
    {
        return function (int $index): ?OrderCustomerGroupSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderCustomerGroupSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
