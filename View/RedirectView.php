<?php

/*
 * This file is part of the FOSRestBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\RestBundle\View;

use FOS\RestBundle\Response\Codes;

/**
 * Url based redirect implementation.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @author Lukas K. Smith <smith@pooteeweet.org>
 */
class RedirectView
{
    public static function create($url, $statusCode = Codes::HTTP_FOUND, array $headers = array())
    {
        return View::create(null, $statusCode, $headers)->setLocation($url);
    }
}
