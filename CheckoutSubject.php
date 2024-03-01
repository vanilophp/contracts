<?php

declare(strict_types=1);

/**
 * Contains the CheckoutSubject interface.
 *
 * @copyright   Copyright (c) 2017 Attila Fulop
 * @author      Attila Fulop
 * @license     MIT
 * @since       2017-11-03
 *
 */

namespace Vanilo\Contracts;

use Illuminate\Support\Collection;

/**
 * This one is typically a (readonly) cart
 */
interface CheckoutSubject
{
    /**
     *
     * @return Collection<CheckoutSubjectItem>
     */
    public function getItems(): Collection;

    public function itemsTotal(): float;

    /**
     * Returns the final total of the CheckoutSubject (typically a cart)
     */
    public function total(): float;
}
