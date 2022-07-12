<?php
/**
 * PHP Faker Location-, Relation-, Media-, Incident Object report types and schemaURIs
 *
 * This file is a part of FakerLocRelTypes
 *
 * @author    Kjell-Inge Gustafsson, kigkonsult <ical@kigkonsult.se>
 * @copyright 2022 Kjell-Inge Gustafsson, kigkonsult, All rights reserved
 * @link      https://kigkonsult.se
 * @license   Subject matter of licence is the software FakerLocRelTypes.
 *            The above author, copyright, link and this licence notices shall be
 *            included in all copies or substantial portions of the FakerLocRelTypes.
 *
 *            FakerLocRelTypes is free software: you can redistribute it and/or
 *            modify it under the terms of the GNU Lesser General Public License
 *            as published by the Free Software Foundation, either version 3 of
 *            the License, or (at your option) any later version.
 *
 *            FakerLocRelTypes is distributed in the hope that it will be useful,
 *            but WITHOUT ANY WARRANTY; without even the implied warranty of
 *            MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *            GNU Lesser General Public License for more details.
 *
 *            You should have received a copy of the GNU Lesser General Public License
 *            along with FakerLocRelTypes. If not, see <https://www.gnu.org/licenses/>.
 */
namespace Kigkonsult\FakerLocRelTypes\Provider\en_US;

use Faker\Provider\Base as FakerBase;

class Rfc4589LocationTypes extends FakerBase
{
    /**
     * Location types as found in 'Location Types Registry', https://www.rfc-editor.org/rfc/rfc4589.txt
     *
     * "the types of places a human or end system might be found"
     *
     * For the locationTypes (below ) content :
     *   Copyright (C) The Internet Society (2006).
     *   see 'Copyright Notice' in the top of https://www.rfc-editor.org/rfc/rfc4589.txt
     *
     * @var string[]
     */
    public static $locationTypes = [
        'aircraft',
        'airport',
        'arena',
        'automobile',
        'bank',
        'bar',
        'bicycle',
        'bus',
        'bus-station',
        'cafe',
        'classroom',
        'club',
        'construction',
        'convention-center',
        'government',
        'hospital',
        'hotel',
        'industrial',
        'library',
        'motorcycle',
        'office',
        'other',
        'outdoors',
        'parking',
        'place-of-worship',
        'prison',
        'public',
        'public-transport',
        'residence',
        'restaurant',
        'school',
        'shopping-area',
        'stadium',
        'store',
        'street',
        'theater',
        'train',
        'train-station',
        'truck',
        'underway',
        'unknown',
        'warehouse',
        'water',
        'watercraft'
    ];

    /**
     * A random rfc4589 location type (lowercase).
     *
     * @return string
     */
    public function rfc4589LocationType() : string
    {
        return static::randomElement( static::$locationTypes );
    }
}
