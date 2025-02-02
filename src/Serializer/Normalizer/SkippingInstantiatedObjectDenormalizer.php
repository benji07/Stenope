<?php

/*
 * This file is part of the "StenopePHP/Stenope" bundle.
 *
 * @author Thomas Jarrand <thomas.jarrand@gmail.com>
 */

namespace Stenope\Bundle\Serializer\Normalizer;

use Symfony\Component\Serializer\Normalizer\ContextAwareDenormalizerInterface;

/**
 * Avoiding double-denormalization for already instantiated objects inside $data.
 *
 * @final
 */
class SkippingInstantiatedObjectDenormalizer implements ContextAwareDenormalizerInterface
{
    public const SKIP = 'skip_instantiated_object';

    public function denormalize($data, string $type, string $format = null, array $context = []): object
    {
        return $data;
    }

    public function supportsDenormalization($data, string $type, string $format = null, array $context = []): bool
    {
        return (bool) ($context[self::SKIP] ?? false) && \is_object($data);
    }
}
