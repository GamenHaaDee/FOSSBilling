<?php
/**
 * FOSSBilling
 *
 * @copyright FOSSBilling (https://www.fossbilling.org)
 * @license   Apache-2.0
 *
 * This file may contain code previously used in the BoxBilling project.
 * Copyright BoxBilling, Inc 2011-2021
 *
 * This source file is subject to the Apache-2.0 License that is bundled
 * with this source code in the file LICENSE
 */


class Model_ClientOrder extends RedBean_SimpleModel
{
	const STATUS_PENDING_SETUP = "pending_setup";
	const STATUS_FAILED_SETUP = "failed_setup";
    const STATUS_FAILED_RENEW = "failed_renew";
	const STATUS_ACTIVE = "active";
	const STATUS_CANCELED = "canceled";
	const STATUS_SUSPENDED = "suspended";

    const ACTION_CREATE     = 'create';
    const ACTION_ACTIVATE   = 'activate';
    const ACTION_RENEW      = 'renew';
    const ACTION_SUSPEND    = 'suspend';
    const ACTION_UNSUSPEND  = 'unsuspend';
    const ACTION_CANCEL     = 'cancel';
    const ACTION_UNCANCEL   = 'uncancel';
    const ACTION_DELETE     = 'delete';
}