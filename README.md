# Utrust Payment Compatability with Hyvä Checkout

## Installation

1. Install [https://github.com/utrustdev/utrust-for-magento2](Utrust_Payment)
2. Add Repository to Composer by running
```bash
composer config repositories.magebitcom composer https://composer.magebit.com/
```
3. Install Compatability Module by running
```bash
composer require magebitcom/magento2-hyva-checkout-utrust-payment
```
4. Enable Module
```bash
bin/magento module:enable Magebit_CheckoutUtrustPayment && bin/magento setup:upgrade
```

