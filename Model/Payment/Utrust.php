<?php
/**
 * @copyright Copyright (c) 2024 Magebit, Ltd. (https://magebit.com/)
 * @author    Magebit <info@magebit.com>
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\CheckoutUtrustPayment\Model\Payment;

use Utrust\Payment\Model\Payment\Utrust as UtrustExtended;

class Utrust extends UtrustExtended
{
    /**
     * Get instructions text from config
     *
     * @return string
     */
    public function getInstructions(): string
    {
        $instructions = $this->getConfigData('instructions');

        return $instructions !== null ? trim($instructions) : '';
    }
}
