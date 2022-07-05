<?php
/**
 * Location-, Relation- Media- and Incident Object report types for PHP Faker
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
namespace Kigkonsult\FakerLocRelTypes;

use Faker\Factory;
use PHPUnit\Framework\TestCase;

class FakerRfc8288RelationTest extends TestCase
{
    /**
     * @var string
     */
    protected static $CLASSPREFIX = 'Kigkonsult\FakerLocRelTypes\Provider\\';

    /**
     * @var array|false
     */
    protected $folder;

    /**
     * @return void
     */
    public function setUp(): void
    {
        static $DIR   = 'src/Provider';
        static $EXCL  = [ '..', '.' ];
        $this->folder = array_diff( scandir( $DIR ), $EXCL );
    }
    /**
     * Test relationTypes
     *
     * @return void
     */
    public function testRelationTypesInAllLanguages(): void
    {
        static $CLASSTOTEST = '\Rfc8288RelationTypes';
        foreach( $this->folder as $folder ) {
            $class = self::$CLASSPREFIX . $folder . $CLASSTOTEST;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->rfc8288RelationType());
        } // end foreach
    }
}
