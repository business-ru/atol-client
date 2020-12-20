<?php

declare(strict_types=1);

namespace Lamoda\AtolClient\V4\DTO\Register;

use JMS\Serializer\Annotation as Serializer;

final class Client
{
    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     */
    private $email;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     */
    private $phone;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     */
    private $name;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     */
    private $inn;

    public function __construct(?string $email, ?string $phone, ?string $name = null, ?string $inn = null)
    {
        $this->email = $email;
        $this->phone = $phone;
        $this->name = $name;
        $this->inn = $inn;

        $this->assertValidity();
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        $this->assertValidity();

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;
        $this->assertValidity();

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        $this->assertValidity();

        return $this;
    }

    public function getInn(): ?string
    {
        return $this->inn;
    }

    public function setInn(?string $inn): self
    {
        $this->inn = $inn;
        $this->assertValidity();

        return $this;
    }

    private function assertValidity(): void
    {
        /** @noinspection IsEmptyFunctionUsageInspection */
        if (empty($this->email) && empty($this->phone)) {
            throw new \InvalidArgumentException('Email and phone can not be empty at the same time');
        }
    }
}
