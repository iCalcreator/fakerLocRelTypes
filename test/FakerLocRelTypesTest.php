<?php
/**
 * FakerLocRelTypes, rfc4589 Location and rfc8288 relation types generate using fakerphp/faker.
 *
 * This file is a part of FakerLocRelTypes.
 *
 * @author    Kjell-Inge Gustafsson, kigkonsult <ical@kigkonsult.se>
 * @copyright 2007-2022 Kjell-Inge Gustafsson, kigkonsult, All rights reserved
 * @link      https://kigkonsult.se
 * @license   Subject matter of licence is the software FakerLocRelTypes.
 *            The above author, copyright, link and licence notices shall be
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

class FakerLocRelTypesTest extends TestCase
{
    protected $folder;

    public function setUp(): void
    {
        $this->folder = array_diff( scandir( 'src/Provider' ), [ '..', '.' ] );
    }

    public function testLoctionTypesInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = 'Kigkonsult\FakerLocRelTypes\Provider\\'.$folder.'\LocationTypes';
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->locationType());
        } // end foreach
    }

    public function testRelationTypesInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = 'Kigkonsult\FakerLocRelTypes\Provider\\'.$folder.'\RelationTypes';
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->relationType());
        } // end foreach
    }
}
