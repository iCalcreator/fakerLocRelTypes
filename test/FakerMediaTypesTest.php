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
namespace Kigkonsult\FakerLocRelTypes;

use Faker\Factory;
use Kigkonsult\FakerLocRelTypes\Provider\MediaTypes;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Kigkonsult\FakerLocRelTypes\Provider\MediaTypes
 */
class FakerMediaTypesTest extends TestCase
{
    /**
     * Test application mediaTypes
     *
     * @return void
     */
    public function testAllMediaTypes(): void
    {
        $faker = Factory::create();
        $faker->addProvider( new MediaTypes( $faker ));

        $this->assertIsString( $faker->applicationMediaType());
        $this->assertStringStartsWith( 'application', $faker->applicationMediaType());

        $this->assertIsString( $faker->audioMediaType());
        $this->assertStringStartsWith( 'audio', $faker->audioMediaType());

        $this->assertIsString( $faker->fontMediaType());
        $this->assertStringStartsWith( 'font', $faker->fontMediaType());

        $this->assertIsString( $faker->imageMediaType());
        $this->assertStringStartsWith( 'image', $faker->imageMediaType());

        $this->assertIsString( $faker->messageMediaType());
        $this->assertStringStartsWith( 'message', $faker->messageMediaType());

        $this->assertIsString( $faker->modelMediaType());
        $this->assertStringStartsWith( 'model', $faker->modelMediaType());

        $this->assertIsString( $faker->multipartMediaType());
        $this->assertStringStartsWith( 'multipart', $faker->multipartMediaType());

        $this->assertIsString( $faker->textMediaType());
        $this->assertStringStartsWith( 'text', $faker->textMediaType());

        $this->assertIsString( $faker->videoMediaType());
        $this->assertStringStartsWith( 'video', $faker->videoMediaType());

        for( $x = 0; $x < 36; $x++ ) {
            $this->assertIsString( $faker->anyMediaType());
        }
    }
}
