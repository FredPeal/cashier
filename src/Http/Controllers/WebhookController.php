<?php

declare(strict_types=1);

namespace Phalcon\Cashier\Controllers;

use Baka\Http\Rest\CrudExtendedController;
use Phalcon\Cashier\Traits\StripeWebhookHandlersTrait;

/**
 * Class PaymentsController
 *
 * Class to handle payment webhook from our cashier library
 *
 * @package Gewaer\Api\Controllers
 * @property Log $log
 *
 */
class WebhookController extends CrudExtendedController
{
    /**
     * Stripe Webhook Handlers Trait
     */
    use StripeWebhookHandlersTrait;
}
