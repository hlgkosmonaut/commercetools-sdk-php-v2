<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObjectModel;

final class OrderEditSetKeyActionModel extends JsonObjectModel implements OrderEditSetKeyAction
{
    const DISCRIMINATOR_VALUE = 'setKey';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $key;

    public function __construct(
        string $key = null
    ) {
        $this->key = $key;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderEditUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>If <code>key</code> is absent or <code>null</code>, this field will be removed if it exists.</p>.
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderEditSetKeyAction::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }
}
