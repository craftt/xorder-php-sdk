<?php

/**
 * xOrder Client Interface.
 *
 * @package     craftt/xorder-sdk
 * @author      Ryan Stratton <ryan@craftt.com>
 * @copyright   Copyright (c) Ryan Stratton
 * @license     https://github.com/craftt/xorder-php-sdk/blob/master/LICENSE.md Apache 2.0
 * @link        https://github.com/craftt/xorder-php-sdk
 */

namespace XOrder\Contracts;

use XOrder\Credentials;
use XOrder\xOrder;

/**
 * Client Interface
 */
interface ClientInterface
{

    /**
     * Login to the Container World LoginServlet.
     *
     * @param  \XOrder\Credentials|null $credentials
     * @return \XOrder\Client
     */
    public function login(Credentials $credentials = null);

    /**
     * End the session with the container world xOrder servlet.
     *
     * @return \XOrder\Response|boolean
     */
    public function logout();

    /**
     * Send an order to the xOrder servlet.
     *
     * @param  \XOrder\XOrder $xorder
     * @return \XOrder\Response
     */
    public function send(XOrder $xorder);

    /**
     * Send an order to the xOrder servlet to be
     * validated.
     * @param  \XOrder\XOrder $order
     * @return \XOrder\Response
     */
    public function validate(XOrder $order);
}
