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

class FakerMediaTypesTest extends TestCase
{
    /**
     * @var string
     */
    protected static $CLASSPREFIX = 'Kigkonsult\FakerLocRelTypes\Provider\\';

    /**
     * @var string
     */
    protected static $CLASSTOTEST = '\MediaTypes';


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
     * Test application mediaTypes
     *
     * @return void
     */
    public function testApplicationMediaTypesInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = self::$CLASSPREFIX . $folder . self::$CLASSTOTEST;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->applicationMediaType());
            $this->assertStringStartsWith( 'application', $faker->applicationMediaType());
        } // end foreach
    }

    /**
     * Test audio mediaTypes
     *
     * @return void
     */
    public function testAudioMediaTypesInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = self::$CLASSPREFIX . $folder . self::$CLASSTOTEST;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->audioMediaType());
            $this->assertStringStartsWith( 'audio', $faker->audioMediaType());
        } // end foreach
    }

    /**
     * Test font mediaTypes
     *
     * @return void
     */
    public function testFontMediaTypesInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = self::$CLASSPREFIX . $folder . self::$CLASSTOTEST;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->fontMediaType());
            $this->assertStringStartsWith( 'font', $faker->fontMediaType());
        } // end foreach
    }

    /**
     * Test image mediaTypes
     *
     * @return void
     */
    public function testImageMediaTypesInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = self::$CLASSPREFIX . $folder . self::$CLASSTOTEST;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->imageMediaType());
            $this->assertStringStartsWith( 'image', $faker->imageMediaType());
        } // end foreach
    }

    /**
     * Test message mediaTypes
     *
     * @return void
     */
    public function testMessageMediaTypesInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = self::$CLASSPREFIX . $folder . self::$CLASSTOTEST;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->messageMediaType());
            $this->assertStringStartsWith( 'message', $faker->messageMediaType());
        } // end foreach
    }

    /**
     * Test model mediaTypes
     *
     * @return void
     */
    public function testModelMediaTypesInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = self::$CLASSPREFIX . $folder . self::$CLASSTOTEST;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->modelMediaType());
            $this->assertStringStartsWith( 'model', $faker->modelMediaType());
        } // end foreach
    }

    /**
     * Test multipart mediaTypes
     *
     * @return void
     */
    public function testMultipartMediaTypesInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = self::$CLASSPREFIX . $folder . self::$CLASSTOTEST;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->multipartMediaType());
            $this->assertStringStartsWith( 'multipart', $faker->multipartMediaType());
        } // end foreach
    }

    /**
     * Test text mediaTypes
     *
     * @return void
     */
    public function testTextMediaTypesInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = self::$CLASSPREFIX . $folder . self::$CLASSTOTEST;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->textMediaType());
            $this->assertStringStartsWith( 'text', $faker->textMediaType());
        } // end foreach
    }

    /**
     * Test video mediaTypes
     *
     * @return void
     */
    public function testVideoMediaTypesInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = self::$CLASSPREFIX . $folder . self::$CLASSTOTEST;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->videoMediaType());
            $this->assertStringStartsWith( 'video', $faker->videoMediaType());
        } // end foreach
    }

    /**
     * Test any mediaType
     *
     * @return void
     */
    public function testAnyMediaTypesInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = self::$CLASSPREFIX . $folder . self::$CLASSTOTEST;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            for( $x = 0; $x < 27; $x++ ) {
                $this->assertIsString( $faker->anyMediaType());
            }
        } // end foreach
    }
}
