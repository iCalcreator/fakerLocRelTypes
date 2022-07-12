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
use PHPUnit\Framework\TestCase;

class FakerRfc7970enumsTest extends TestCase
{
    /**
     * @var string
     */
    protected static $CLASSTOTESTFMT = 'Kigkonsult\FakerLocRelTypes\Provider\%s\Rfc7970enums';

    /**
     * @var string[]
     */
    protected $class = [];

    /**
     * @return void
     */
    public function setUp(): void
    {
        static $DIR   = 'src/Provider';
        static $EXCL  = [ '..', '.' ];
        $this->classes = [];
        foreach( array_diff( scandir( $DIR ), $EXCL ) as $folder ) {
            $class = sprintf( self::$CLASSTOTESTFMT, $folder );
            if( class_exists( $class )) {
                $this->classes[] = $class;
            }
        }
    }

    /**
     * Test ALL
     * @return void
     */
    public function testRestrictions(): void
    {
        foreach( $this->classes as $class ) {
            $faker = Factory::create();
            $faker->addProvider( new $class( $faker ));

            // Test Restriction
            $this->assertIsString( $faker->rfc7970Restriction());

            // Test Incident-purpose
            $this->assertIsString( $faker->rfc7970IncidentPurpose());

            // Test Incident-status
            $this->assertIsString( $faker->rfc7970IncidentStatus());

            // Test Contact-role
            $this->assertIsString( $faker->rfc7970ContactRole());

            // Test Contact-type
            $this->assertIsString( $faker->rfc7970ContactType());

            // Test RegistryHandle-registry
            $this->assertIsString( $faker->rfc7970RegistryHandleRegistry());

            // Test PostalAddress-type
            $this->assertIsString( $faker->rfc7970PostalAddressType());

            // Test Telephone-type
            $this->assertIsString( $faker->rfc7970TelephoneType());

            // Test Email-type
            $this->assertIsString( $faker->rfc7970EmailType());

            // Test Expectation-action
            $this->assertIsString( $faker->rfc7970ExpectationAction());

            // Test HistoryItem-action
            $this->assertIsString( $faker->rfc7970HistoryItemAction());

            // Test Discovery-source
            $this->assertIsString( $faker->rfc7970DiscoverySource());

            // Test SystemImpact-type
            $this->assertIsString( $faker->rfc7970SystemImpactType());

            // Test BusinessImpact-severity
            $this->assertIsString( $faker->rfc7970BusinessImpactSeverity());

            // Test BusinessImpact-type
            $this->assertIsString( $faker->rfc7970BusinessImpactType());

            // Test IntendedImpactImpact-type
            $this->assertIsString( $faker->rfc7970IntendedImpactType());

            // Test TimeImpact-metric
            $this->assertIsString( $faker->rfc7970TimeImpactMetric());

            // Test TimeImpact-duration
            $this->assertIsString( $faker->rfc7970TimeImpactDuration());

            // Test Counter-duration
            $this->assertIsString( $faker->rfc7970CounterDuration());

            // Test Confidence-rating
            $this->assertIsString( $faker->rfc7970ConfidenceRating());

            // Test NodeRole-category
            $this->assertIsString( $faker->rfc7970NodeRoleCategory());

            // Test SystemCategory
            $this->assertIsString( $faker->rfc7970SystemCategory());

            // Test System-ownership
            $this->assertIsString( $faker->rfc7970SystemOwnership());

            // Test Address-category
            $this->assertIsString( $faker->rfc7970AddressCategory());

            // Test Counter-type
            $this->assertIsString( $faker->rfc7970CounterType());

            // Test Counter-unit
            $this->assertIsString( $faker->rfc7970CounterUnit());

            // Test DomainData-system-status
            $this->assertIsString( $faker->rfc7970DomainDataSystemStatus());

            // Test DomainData-domain-status
            $this->assertIsString( $faker->rfc7970DomainDataDomainStatus());

            // Test RecordPattern-type
            $this->assertIsString( $faker->rfc7970RecordPatternType());

            // Test RecordPattern-offsetunit
            $this->assertIsString( $faker->rfc7970RecordPatternOffsetunit());

            // Test Key-registryaction
            $this->assertIsString( $faker->rfc7970KeyRegistryaction());

            // Test HashData-scope
            $this->assertIsString( $faker->rfc7970HashDataScope());

            // Test BulkObservable-type
            $this->assertIsString( $faker->rfc7970BulkObservableType());

            // Test IndicatorExpression-operator
            $this->assertIsString( $faker->rfc7970IndicatorExpressionOperator());

            // Test ExtensionType-dtype
            $this->assertIsString( $faker->rfc7970ExtensionTypeDtype());

            // Test SoftwareReference-spec-id
            $this->assertIsString( $faker->rfc7970SoftwareReferenceSpecId());

            // Test SoftwareReference-spec-name
            $this->assertIsString( $faker->rfc7970SoftwareReferenceSpecName());

            // Test SoftwareReference-dtype
            $this->assertIsString( $faker->rfc7970SoftwareReferenceDtype());
        } // end foreach
    }
}
