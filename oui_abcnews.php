<?php

/*
 * This file is part of oui_abcnews,
 * a oui_player v2+ extension to easily embed
 * ABC News customizable video players in Textpattern CMS.
 *
 * https://github.com/NicolasGraph/oui_abcnews
 *
 * Copyright (C) 2018 Nicolas Morand
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; version 2 of the License.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA..
 */

/**
 * Abcnews
 *
 * @package Oui\Player
 */

namespace Oui {

    if (class_exists('Oui\Provider')) {

        class Abcnews extends Provider
        {
            protected static $patterns = array(
                'scheme' => '#^(http|https)://(abcnews\.go\.com/([a-zA-Z]+/)?video)/[^0-9]+([0-9]+)$#i',
                'id'     => '4',
            );
            protected static $src = '//abcnews.go.com/';
            protected static $glue = array('video/embed?id=', '&amp;', '&amp;');
            protected static $dims = array(
                'width'  => '640',
                'height' => '360',
                'ratio'  => '',
            );
        }
    }
}
