<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class SubscriptionDraftModel extends JsonObjectModel implements SubscriptionDraft
{
    /**
     * @var ?ChangeSubscriptionCollection
     */
    protected $changes;

    /**
     * @var ?Destination
     */
    protected $destination;

    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?MessageSubscriptionCollection
     */
    protected $messages;

    /**
     * @var ?DeliveryFormat
     */
    protected $format;

    public function __construct(
        ChangeSubscriptionCollection $changes = null,
        Destination $destination = null,
        string $key = null,
        MessageSubscriptionCollection $messages = null,
        DeliveryFormat $format = null
    ) {
        $this->changes = $changes;
        $this->destination = $destination;
        $this->key = $key;
        $this->messages = $messages;
        $this->format = $format;
    }

    /**
     * @return null|ChangeSubscriptionCollection
     */
    public function getChanges()
    {
        if (is_null($this->changes)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(SubscriptionDraft::FIELD_CHANGES);
            if (is_null($data)) {
                return null;
            }
            $this->changes = ChangeSubscriptionCollection::fromArray($data);
        }

        return $this->changes;
    }

    /**
     * @return null|Destination
     */
    public function getDestination()
    {
        if (is_null($this->destination)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(SubscriptionDraft::FIELD_DESTINATION);
            if (is_null($data)) {
                return null;
            }
            $className = DestinationModel::resolveDiscriminatorClass($data);
            $this->destination = $className::of($data);
        }

        return $this->destination;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(SubscriptionDraft::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * @return null|MessageSubscriptionCollection
     */
    public function getMessages()
    {
        if (is_null($this->messages)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(SubscriptionDraft::FIELD_MESSAGES);
            if (is_null($data)) {
                return null;
            }
            $this->messages = MessageSubscriptionCollection::fromArray($data);
        }

        return $this->messages;
    }

    /**
     * @return null|DeliveryFormat
     */
    public function getFormat()
    {
        if (is_null($this->format)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(SubscriptionDraft::FIELD_FORMAT);
            if (is_null($data)) {
                return null;
            }
            $className = DeliveryFormatModel::resolveDiscriminatorClass($data);
            $this->format = $className::of($data);
        }

        return $this->format;
    }

    public function setChanges(?ChangeSubscriptionCollection $changes): void
    {
        $this->changes = $changes;
    }

    public function setDestination(?Destination $destination): void
    {
        $this->destination = $destination;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    public function setMessages(?MessageSubscriptionCollection $messages): void
    {
        $this->messages = $messages;
    }

    public function setFormat(?DeliveryFormat $format): void
    {
        $this->format = $format;
    }
}
