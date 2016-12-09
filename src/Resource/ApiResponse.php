<?php

/*
 *
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace APIPHP\Localise\Resource;

/**
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
interface ApiResponse
{
    /**
     * Create an API response object from the HTTP response from the API server.
     *
     * @param array $data
     *
     * @return self
     */
    public static function create(array $data);
}
