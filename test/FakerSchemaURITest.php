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
use Kigkonsult\FakerLocRelTypes\Provider\SchemaURI;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Kigkonsult\FakerLocRelTypes\Provider\SchemaURI
 */
class FakerSchemaURITest extends TestCase
{
    /**
     * @param string $folder
     * @param string $method
     * @param bool|null $extend
     */
    public function doTest( string $method, ? bool $extend = false ) : void
    {
        static $SCHEMAURIDISP = 'schemaUriDisp';
        static $ANYURI        = 'anyUri';
        $faker  = Factory::create();
        $faker->addProvider( new SchemaURI( $faker ));
        $result = $faker->{$method}();
        $this->assertIsString( $result );
        $this->assertNotEmpty( $result );
        if(( $ANYURI !== $method ) &&
            isset( $GLOBALS[$SCHEMAURIDISP] ) && ( 1 == $GLOBALS[$SCHEMAURIDISP] )) {
            echo str_pad( $method, 10 ) . ': ' . $result . PHP_EOL; // test ###
        }
        if( $extend ) {
            $result = $faker->{$method}( true );
            $this->assertIsString( $result );
            $this->assertNotEmpty( $result );
            if(( $ANYURI !== $method ) &&
                isset( $GLOBALS[$SCHEMAURIDISP] ) && ( 1 == $GLOBALS[$SCHEMAURIDISP] )) {
                echo str_pad( $method, 10 ) . ': ' . $result . PHP_EOL; // test ###
            }
        }
    }
    /**
     * Test ALL URIs
     *
     * @return void
     */
    public function testAllURIs(): void
    {
        $this->doTest(  'cidUri' );

        $this->doTest(  'dataUri' );

        $this->doTest(  'dnsUri', true );

        $this->doTest(  'faxUri' );

        $this->doTest(  'feedUri' );

        $this->doTest(  'ftpUri', true );

        $this->doTest(  'geoUri', true );

        $this->doTest(  'httpUri', true );
        $this->doTest(  'httpsUri', true );

        $this->doTest(  'imapUri', true );

        $this->doTest(  'ldapUri', true );
        $this->doTest(  'ldapsUri', true  );

        $this->doTest(  'mailtoUri', true );

        $this->doTest(  'midUri' );

        $this->doTest(  'newsUri' );
        $this->doTest(  'snewsUri' );

        $this->doTest(  'nntpUri' );

        $this->doTest(  'paytoUri', true );

        $this->doTest(  'popUri' );

        $this->doTest(  'rsyncUri' );

        $this->doTest(  'sftpUri', true );

        $this->doTest(  'smbUri', true );

        $this->doTest(  'sshUri', true );

        $this->doTest(  'telnetUri', true );

        $this->doTest(  'telUri' );

        $this->doTest(  'urnUuidUri' );

        $this->doTest(  'vncUri', true );

        $this->doTest(  'webcalUri' );

        $this->doTest(  'xmppUri', true );

        for( $x = 0; $x < 300; $x++ ) {
            $this->doTest( 'anyUri' );
        }
    }
}
