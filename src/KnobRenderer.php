<?php

namespace SLLH\Knob;

use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * @author Sullivan Senechal <soullivaneuh@gmail.com>
 */
final class KnobRenderer
{
    public function renderInput($options)
    {
        $resolver = new OptionsResolver();
        $this->configureOptions($resolver);

        $options = $resolver->resolve($options);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
    }
}
