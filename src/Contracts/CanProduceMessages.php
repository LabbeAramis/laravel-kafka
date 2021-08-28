<?php

namespace Junges\Kafka\Contracts;

use Junges\Kafka\Message;

interface CanProduceMessages
{
    public static function create(string $broker, string $topic): self;

    public function withConfigOption(string $name, string $option): self;

    public function withConfigOptions(array $options): self;

    public function withHeaders(array $headers): self;

    public function withKafkaMessageKey(string $key): self;

    public function withMessageKey(string $key, mixed $message): self;

    public function withMessage(Message $message): self;

    public function withDebugEnabled(bool $enabled = true): self;

    public function getTopic(): string;

    public function getMessage(): Message;

    public function send(): bool;
}
