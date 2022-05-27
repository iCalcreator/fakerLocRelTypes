<?php
/**
 * Location-, Relation- and Incident Object report enumeration types for PHP Faker
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

class FakerRfc7970enumsTest extends TestCase
{
    /**
     * @var string
     */
    protected static $CLASSTOTESTFMT = 'Kigkonsult\FakerLocRelTypes\Provider\%s\Rfc7970enums';


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
     * Test Restriction
     * @return void
     */
    public function testRestrictionsInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = sprintf( self::$CLASSTOTESTFMT, $folder );
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->restriction());
        } // end foreach
    }

    /**
     * Test Incident-purpose
     *
     * @return void
     */
    public function testIncidentPurposesInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = sprintf( self::$CLASSTOTESTFMT, $folder );;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->incidentPurpose());
        } // end foreach
    }

    /**
     * Test Incident-status
     *
     * @return void
     */
    public function testIncidentStatusInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = sprintf( self::$CLASSTOTESTFMT, $folder );;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->IncidentStatus());
        } // end foreach
    }

    /**
     * Test Contact-role
     *
     * @return void
     */
    public function testContactRolesInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = sprintf( self::$CLASSTOTESTFMT, $folder );;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->contactRole());
        } // end foreach
    }

    /**
     * Test Contact-type
     *
     * @return void
     */
    public function testContactTypesInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = sprintf( self::$CLASSTOTESTFMT, $folder );;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->contactType());
        } // end foreach
    }

    /**
     * Test RegistryHandle-registry
     *
     * @return void
     */
    public function testRegistryHandleRegistrysInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = sprintf( self::$CLASSTOTESTFMT, $folder );;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->registryHandleRegistry());
        } // end foreach
    }

    /**
     * Test PostalAddress-type
     *
     * @return void
     */
    public function testPostalAddressTypesInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = sprintf( self::$CLASSTOTESTFMT, $folder );;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->postalAddressType());
        } // end foreach
    }

    /**
     * Test Telephone-type
     *
     * @return void
     */
    public function testTelephoneTypesInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = sprintf( self::$CLASSTOTESTFMT, $folder );;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->telephoneType());
        } // end foreach
    }

    /**
     * Test Email-type
     *
     * @return void
     */
    public function testEmailTypesInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = sprintf( self::$CLASSTOTESTFMT, $folder );;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->emailType());
        } // end foreach
    }

    /**
     * Test Expectation-action
     *
     * @return void
     */
    public function testExpectationActionsInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = sprintf( self::$CLASSTOTESTFMT, $folder );;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->expectationAction());
        } // end foreach
    }

    /**
     * Test Discovery-source
     *
     * @return void
     */
    public function testDiscoverySourcesInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = sprintf( self::$CLASSTOTESTFMT, $folder );;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->discoverySource());
        } // end foreach
    }

    /**
     * Test SystemImpact-type
     *
     * @return void
     */
    public function testSystemImpactTypesInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = sprintf( self::$CLASSTOTESTFMT, $folder );;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->systemImpactType());
        } // end foreach
    }

    /**
     * Test BusinessImpact-severity
     *
     * @return void
     */
    public function testBusinessImpactSeveritysInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = sprintf( self::$CLASSTOTESTFMT, $folder );;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->businessImpactSeverity());
        } // end foreach
    }

    /**
     * Test BusinessImpact-type
     *
     * @return void
     */
    public function testBusinessImpactTypesInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = sprintf( self::$CLASSTOTESTFMT, $folder );;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->businessImpactType());
        } // end foreach
    }

    /**
     * Test TimeImpact-metric
     *
     * @return void
     */
    public function testTimeImpactMetricsInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = sprintf( self::$CLASSTOTESTFMT, $folder );;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->TimeImpactMetric());
        } // end foreach
    }

    /**
     * Test TimeImpact-duration
     *
     * @return void
     */
    public function testTimeImpactDurationsInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = sprintf( self::$CLASSTOTESTFMT, $folder );;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->timeImpactDuration());
        } // end foreach
    }

    /**
     * Test Confidence-rating
     *
     * @return void
     */
    public function testConfidenceRatingsInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = sprintf( self::$CLASSTOTESTFMT, $folder );;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->confidenceRating());
        } // end foreach
    }

    /**
     * Test NodeRole-category
     *
     * @return void
     */
    public function testNodeRoleCategorysInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = sprintf( self::$CLASSTOTESTFMT, $folder );;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->nodeRoleCategory());
        } // end foreach
    }

    /**
     * Test SystemCategory
     *
     * @return void
     */
    public function testSystemCategorysInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = sprintf( self::$CLASSTOTESTFMT, $folder );;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->systemCategory());
        } // end foreach
    }

    /**
     * Test System-ownership
     *
     * @return void
     */
    public function testSystemOwnershipsInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = sprintf( self::$CLASSTOTESTFMT, $folder );;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->systemOwnership());
        } // end foreach
    }

    /**
     * Test Address-category
     *
     * @return void
     */
    public function testAddressCategorysInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = sprintf( self::$CLASSTOTESTFMT, $folder );;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->addressCategory());
        } // end foreach
    }

    /**
     * Test Counter-type
     *
     * @return void
     */
    public function testCounterTypesInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = sprintf( self::$CLASSTOTESTFMT, $folder );;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->counterType());
        } // end foreach
    }

    /**
     * Test Counter-unit
     *
     * @return void
     */
    public function testCounterUnitsInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = sprintf( self::$CLASSTOTESTFMT, $folder );;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->counterUnit());
        } // end foreach
    }

    /**
     * Test DomainData-system-status
     *
     * @return void
     */
    public function testDomainDataSystemStatusInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = sprintf( self::$CLASSTOTESTFMT, $folder );;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->domainDataSystemStatus());
        } // end foreach
    }

    /**
     * Test DomainData-domain-status
     *
     * @return void
     */
    public function testDomainDataDomainStatusInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = sprintf( self::$CLASSTOTESTFMT, $folder );;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->domainDataDomainStatus());
        } // end foreach
    }

    /**
     * Test RecordPattern-type
     *
     * @return void
     */
    public function testRecordPatternTypesInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = sprintf( self::$CLASSTOTESTFMT, $folder );;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->recordPatternType());
        } // end foreach
    }

    /**
     * Test RecordPattern-offsetunit
     *
     * @return void
     */
    public function testRecordPatternOffsetunitsInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = sprintf( self::$CLASSTOTESTFMT, $folder );;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->recordPatternOffsetunit());
        } // end foreach
    }

    /**
     * Test Key-registryaction
     *
     * @return void
     */
    public function testKeyRegistryactionsInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = sprintf( self::$CLASSTOTESTFMT, $folder );;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->keyRegistryaction());
        } // end foreach
    }

    /**
     * Test HashData-scope
     *
     * @return void
     */
    public function testHashDataScopesInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = sprintf( self::$CLASSTOTESTFMT, $folder );;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->hashDataScope());
        } // end foreach
    }

    /**
     * Test BulkObservable-type
     *
     * @return void
     */
    public function testBulkObservableTypesInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = sprintf( self::$CLASSTOTESTFMT, $folder );;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->bulkObservableType());
        } // end foreach
    }

    /**
     * Test IndicatorExpression-operator
     *
     * @return void
     */
    public function testIndicatorExpressionOperatorsInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = sprintf( self::$CLASSTOTESTFMT, $folder );;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->indicatorExpressionOperator());
        } // end foreach
    }

    /**
     * Test ExtensionType-dtype
     *
     * @return void
     */
    public function testExtensionTypeDtypesInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = sprintf( self::$CLASSTOTESTFMT, $folder );;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->extensionTypeDtype());
        } // end foreach
    }

    /**
     * Test SoftwareReference-spec-id
     *
     * @return void
     */
    public function testSoftwareReferenceSpecIdsInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = sprintf( self::$CLASSTOTESTFMT, $folder );;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->softwareReferenceSpecId());
        } // end foreach
    }

    /**
     * Test SoftwareReference-dtype
     *
     * @return void
     */
    public function testSoftwareReferenceDtypesInAllLanguages(): void
    {
        foreach( $this->folder as $folder ) {
            $class = sprintf( self::$CLASSTOTESTFMT, $folder );;
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));
            $this->assertIsString( $faker->softwareReferenceDtype());
        } // end foreach
    }
}
