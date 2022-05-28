<?php
/**
 * Location-, Relation- and Incident Object report enumeration types for PHP Faker.
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

/**
 * class Rfc7970enums
 *
 * Rfc7970 'attribute' enumeration values as found in https://www.iana.org/assignments/iodef2/iodef2.xhtml
 * Latest update 2016-12-01
 *
 * rfc7970 enumeration          method name
 *
 * Restriction                  rfc7970Restriction
 * Incident-purpose             rfc7970IncidentPurpose
 * Incident-status              rfc7970IncidentStatus
 * Contact-role                 rfc7970ContactRole
 * Contact-type                 rfc7970ContactType
 * RegistryHandle-registry      rfc7970RegistryHandleRegistry
 * PostalAddress-type           rfc7970PostalAddressType
 * Telephone-type               rfc7970TelephoneType
 * Email-type                   rfc7970EmailType
 * Expectation-action           rfc7970ExpectationAction
 *                              rfc7970HistoryItemAction    same content as previous
 * Discovery-source             rfc7970DiscoverySource
 * SystemImpact-type            rfc7970SystemImpactType
 *                              rfc7970IntendedImpactType   same content as previous
 * BusinessImpact-severity      rfc7970BusinessImpactSeverity
 * BusinessImpact-type          rfc7970BusinessImpactType
 * TimeImpact-metric            rfc7970TimeImpactMetric
 * TimeImpact-duration          rfc7970TimeImpactDuration
 *                              rfc7970CounterDuration     same content as previous
 * Confidence-rating            rfc7970ConfidenceRating
 * NodeRole-category            rfc7970NodeRoleCategory
 * System-category              rfc7970SystemCategory
 * System-ownership             rfc7970SystemOwnership
 * Address-category             rfc7970AddressCategory
 * Counter-type                 rfc7970CounterType
 * Counter-unit                 rfc7970CounterUnit
 * DomainData-system-status     rfc7970DomainDataSystemStatus
 * DomainData-domain-status     rfc7970DomainDataDomainStatus
 * RecordPattern-type           rfc7970RecordPatternType
 * RecordPattern-offsetunit     rfc7970RecordPatternOffsetunit
 * Key-registryaction           rfc7970KeyRegistryaction
 * HashData-scope               rfc7970HashDataScope
 * BulkObservable-type          rfc7970BulkObservableType
 * IndicatorExpression-operator rfc7970IndicatorExpressionOperator
 * ExtensionType-dtype          rfc7970ExtensionTypeDtype
 * SoftwareReference-spec-id    rfc7970SoftwareReferenceSpecId    errata (but exists)
 *                              rfc7970SoftwareReferenceSpecname  correct
 * SoftwareReference-dtype      rfc7970SoftwareReferenceDtype
 *
 * For the Rfc7970 types content
 *   see 'Licensing Terms' link in the bottom of page https://www.iana.org/assignments/iodef2/iodef2.xhtml
 */
class Rfc7970enums extends FakerBase
{
    /**
     * @link https://www.iana.org/assignments/iodef2/restriction.csv
     * @var string[]
     */
    protected static $restrictions = [
        'public',
        'partner',
        'need-to-know',
        'private',
        'default',
        'white',
        'green',
        'amber',
        'red',
        'ext-value'
    ];

    /**
     * A random selected restriction enumeration value.
     *
     * @return string
     * @deprecated
     * @codeCoverageIgnore
     */
    public function restriction() : string
    {
        return static::randomElement( static::$restrictions );
    }

    /**
     * A random selected rfc7970 restriction enumeration value.
     *
     * @return string
     */
    public function rfc7970Restriction() : string
    {
        return static::randomElement( static::$restrictions );
    }

    /* ---------------------------------------------------------------------- */

    /**
     * @link https://www.iana.org/assignments/iodef2/incident-purpose.csv
     * @var string[]
     */
    protected static $incidentPurposes = [
        'partner',
        'traceback',
        'mitigation',
        'reporting',
        'watch',
        'other',
        'ext-value'
    ];

    /**
     * A random selected incident-purpose enumeration value.
     *
     * @return string
     * @deprecated
     * @codeCoverageIgnore
     */
    public function incidentPurpose() : string
    {
        return static::randomElement( static::$incidentPurposes );
    }

    /**
     * A random selected rfc7970 incident-purpose enumeration value.
     *
     * @return string
     */
    public function rfc7970IncidentPurpose() : string
    {
        return static::randomElement( static::$incidentPurposes );
    }

    /* ---------------------------------------------------------------------- */

    /**
     * @link https://www.iana.org/assignments/iodef2/incident-status.csv
     * @var string[]
     */
    protected static $incidentStatus = [
        'new',
        'in-progress',
        'forwarded',
        'resolved',
        'future',
        'ext-value'
    ];

    /**
     * A random selected incident-status enumeration value.
     *
     * @return string
     * @deprecated
     * @codeCoverageIgnore
     */
    public function incidentStatus() : string
    {
        return static::randomElement( static::$incidentStatus );
    }

    /**
     * A random selected rfc7970 incident-status enumeration value.
     *
     * @return string
     */
    public function rfc7970IncidentStatus() : string
    {
        return static::randomElement( static::$incidentStatus );
    }

    /* ---------------------------------------------------------------------- */

    /**
     * @link https://www.iana.org/assignments/iodef2/contact-role.csv
     * @var string[]
     */
    protected static $contactRoles = [
        'reator',
        'reporter',
        'admin',
        'tech',
        'provider',
        'user',
        'billing',
        'legal',
        'irt',
        'abuse',
        'cc',
        'cc-irt',
        'leo',
        'vendor',
        'vendor-support',
        'victim',
        'victim-notified',
        'ext-value'
    ];

    /**
     * A random selected contact-role enumeration value.
     *
     * @return string
     * @deprecated
     * @codeCoverageIgnore
     */
    public function contactRole() : string
    {
        return static::randomElement( static::$contactRoles );
    }

    /**
     * A random selected rfc7970 contact-role enumeration value.
     *
     * @return string
     */
    public function rfc7970ContactRole() : string
    {
        return static::randomElement( static::$contactRoles );
    }

    /* ---------------------------------------------------------------------- */

    /**
     * @link https://www.iana.org/assignments/iodef2/contact-type.csv
     * @var string[]
     */
    protected static $contactTypes = [
        'person',
        'organization',
        'ext-value'
    ];

    /**
     * A random selected contact-type enumeration value.
     *
     * @return string
     * @deprecated
     * @codeCoverageIgnore
     */
    public function contactType() : string
    {
        return static::randomElement( static::$contactTypes );
    }

    /**
     * A random selected rfc7970 contact-type enumeration value.
     *
     * @return string
     */
    public function rfc7970ContactType() : string
    {
        return static::randomElement( static::$contactTypes );
    }

    /* ---------------------------------------------------------------------- */

    /**
     * @link https://www.iana.org/assignments/iodef2/registryhandle-registry.csv
     *
     * @var string[]
     */
    protected static $registryHandleRegistries = [
        'internic',
        'apnic',
        'arin',
        'lacnic',
        'ripe',
        'afrinic',
        'local',
        'ext-value'
    ];

    /**
     * A random selected registryHandle-registry enumeration value.
     *
     * @return string
     * @deprecated
     * @codeCoverageIgnore
     */
    public function registryHandleRegistry() : string
    {
        return static::randomElement( static::$registryHandleRegistries );
    }

    /**
     * A random selected rfc7970 registryHandle-registry enumeration value.
     *
     * @return string
     */
    public function rfc7970RegistryHandleRegistry() : string
    {
        return static::randomElement( static::$registryHandleRegistries );
    }

    /* ---------------------------------------------------------------------- */

    /**
     * @link https://www.iana.org/assignments/iodef2/telephone-type.csv
     * @var string[]
     */
    protected static $postalAddressTypes = [
        'street',
        'mailing',
        'ext-value'
    ];

    /**
     * A random selected postalAddress-type enumeration value.
     *
     * @return string
     * @deprecated
     * @codeCoverageIgnore
     */
    public function postalAddressType() : string
    {
        return static::randomElement( static::$postalAddressTypes );
    }

    /**
     * A random selected rfc7970 postalAddress-type enumeration value.
     *
     * @return string
     */
    public function rfc7970PostalAddressType() : string
    {
        return static::randomElement( static::$postalAddressTypes );
    }

    /* ---------------------------------------------------------------------- */

    /**
     * @link https://www.iana.org/assignments/iodef2/telephone-type.csv
     * @var string[]
     */
    protected static $telephoneTypes = [
        'wired',
        'mobile',
        'fax',
        'hotline',
        'ext-value'
    ];

    /**
     * A random selected telephone-type enumeration value.
     *
     * @return string
     * @deprecated
     * @codeCoverageIgnore
     */
    public function telephoneType() : string
    {
        return static::randomElement( static::$telephoneTypes );
    }

    /**
     * A random selected rfc7970 telephone-type enumeration value.
     *
     * @return string
     */
    public function rfc7970TelephoneType() : string
    {
        return static::randomElement( static::$telephoneTypes );
    }

    /* ---------------------------------------------------------------------- */

    /**
     * @link https://www.iana.org/assignments/iodef2/email-type.csv
     * @var string[]
     */
    protected static $emailTypes = [
        'wired',
        'mobile',
        'fax',
        'hotline',
        'ext-value'
    ];

    /**
     * A random selected email-type enumeration value.
     *
     * @return string
     * @deprecated
     * @codeCoverageIgnore
     */
    public function emailType() : string
    {
        return static::randomElement( static::$emailTypes );
    }

    /**
     * A random selected rfc7970 email-type enumeration value.
     *
     * @return string
     */
    public function rfc7970EmailType() : string
    {
        return static::randomElement( static::$emailTypes );
    }

    /* ---------------------------------------------------------------------- */

    /**
     * @link https://www.iana.org/assignments/iodef2/expectation-action.csv
     * @var string[]
     */
    protected static $expectationActions = [
        'nothing',
        'contact-source-site',
        'contact-target-site',
        'contact-sender',
        'investigate',
        'block-host',
        'block-network',
        'block-port',
        'rate-limit-host',
        'rate-limit-network',
        'rate-limit-port',
        'redirect-traffic',
        'honeypot',
        'upgrade-software',
        'rebuild-asset',
        'harden-asset',
        'remediate-other',
        'status-triage',
        'status-new-info',
        'watch-and-report',
        'training',
        'defined-coa',
        'other',
        'ext-value'
    ];

    /**
     * A random selected expectation-action enumeration value.
     *
     * @return string
     * @deprecated
     * @codeCoverageIgnore
     */
    public function expectationAction() : string
    {
        return static::randomElement( static::$expectationActions );
    }

    /**
     * A random selected rfc7970 expectation-action enumeration value.
     *
     * @return string
     */
    public function rfc7970ExpectationAction() : string
    {
        return static::randomElement( static::$expectationActions );
    }

    /**
     * A random selected rfc7970 HistoryItem-action enumeration value.4
     *
     * @return string
     */
    public function rfc7970HistoryItemAction() : string
    {
        return static::randomElement( static::$expectationActions );
    }


    /* ---------------------------------------------------------------------- */

    /**
     * @link https://www.iana.org/assignments/iodef2/discovery-source.csv
     * @var string[]
     */
    protected static $discoverySources = [
        'nothing',
        'contact-source-site',
        'contact-target-site',
        'contact-sender',
        'investigate',
        'block-host',
        'block-network',
        'block-port',
        'rate-limit-host',
        'rate-limit-network',
        'rate-limit-port',
        'redirect-traffic',
        'honeypot',
        'upgrade-software',
        'rebuild-asset',
        'harden-asset',
        'remediate-other',
        'status-triage',
        'status-new-info',
        'watch-and-report',
        'training',
        'defined-coa',
        'other',
        'ext-value'
    ];

    /**
     * A random selected discovery-source enumeration value.
     *
     * @return string
     * @deprecated
     * @codeCoverageIgnore
     */
    public function discoverySource() : string
    {
        return static::randomElement( static::$discoverySources );
    }

    /**
     * A random selected rfc7970 discovery-source enumeration value.
     *
     * @return string
     */
    public function rfc7970DiscoverySource() : string
    {
        return static::randomElement( static::$discoverySources );
    }

    /* ---------------------------------------------------------------------- */

    /**
     * @link https://www.iana.org/assignments/iodef2/systemimpact-type.csv
     * @var string[]
     */
    protected static $systemImpactTypes = [
        'takeover-account',
        'takeover-service',
        'takeover-system',
        'cps-manipulation',
        'cps-damage',
        'availability-data',
        'availability-account',
        'availability-service',
        'availability-system',
        'damaged-system',
        'damaged-data',
        'breach-propietary',
        'breach-privacy',
        'breach-credential',
        'breach-configuration',
        'integrity-data',
        'integrity-configuration',
        'integrity-hardware',
        'traffic-redirection',
        'monitoring-traffic',
        'monitoring-host',
        'policy',
        'unknown',
        'ext-value'
    ];

    /**
     * A random selected systemImpact-type enumeration value.
     *
     * @return string
     * @deprecated
     * @codeCoverageIgnore
     */
    public function systemImpactType() : string
    {
        return static::randomElement( static::$systemImpactTypes );
    }

    /**
     * A random selected rfc7970 systemImpact-type enumeration value.
     *
     * @return string
     */
    public function rfc7970SystemImpactType() : string
    {
        return static::randomElement( static::$systemImpactTypes );
    }

    /* ---------------------------------------------------------------------- */

    /**
     * @link https://www.iana.org/assignments/iodef2/businessimpact-severity.csv
     * @var string[]
     */
    protected static $businessImpactSeverities = [
        'none',
        'low',
        'medium',
        'high',
        'unknown',
        'ext-value'
    ];

    /**
     * A random selected businessImpact-severity enumeration value.
     *
     * @return string
     * @deprecated
     * @codeCoverageIgnore
     */
    public function businessImpactSeverity() : string
    {
        return static::randomElement( static::$businessImpactSeverities );
    }

    /**
     * A random selected rfc7970 businessImpact-severity enumeration value.
     *
     * @return string
     */
    public function rfc7970BusinessImpactSeverity() : string
    {
        return static::randomElement( static::$businessImpactSeverities );
    }

    /* ---------------------------------------------------------------------- */

    /**
     * @link https://www.iana.org/assignments/iodef2/businessimpact-type.csv
     * @var string[]
     */
    protected static $businessImpactTypes = [
        'breach-proprietary',
        'breach-privacy',
        'breach-credential',
        'loss-of-integrity',
        'loss-of-service',
        'theft-financial',
        'theft-service',
        'degraded-reputation',
        'asset-damage',
        'asset-manipulation',
        'legal',
        'extortion',
        'unknown',
        'ext-value'
    ];

    /**
     * A random selected businessImpact-type enumeration value.
     *
     * @return string
     * @deprecated
     * @codeCoverageIgnore
     */
    public function businessImpactType() : string
    {
        return static::randomElement( static::$businessImpactTypes );
    }

    /**
     * A random selected rfc7970 businessImpact-type enumeration value.
     *
     * @return string
     */
    public function rfc7970BusinessImpactType() : string
    {
        return static::randomElement( static::$businessImpactTypes );
    }

    /**
     * A random selected rfc7970 intendedImpact-type enumeration value.
     *
     * rfc7970IntendedImpact::type same as BusinessImpact-type
     *
     * @return string
     */
    public function rfc7970IntendedImpactType() : string
    {
        return static::randomElement( static::$businessImpactTypes );
    }

    /* ---------------------------------------------------------------------- */

    /**
     * @link https://www.iana.org/assignments/iodef2/timeimpact-metric.csv
     * @var string[]
     */
    protected static $timeImpactMetrics = [
        'labor',
        'elapsed',
        'downtime',
        'ext-value'
    ];

    /**
     * A random selected timeImpact-metric enumeration value.
     *
     * @return string
     * @deprecated
     * @codeCoverageIgnore
     */
    public function timeImpactMetric() : string
    {
        return static::randomElement( static::$timeImpactMetrics );
    }

    /**
     * A random selected rfc7970 timeImpact-metric enumeration value.
     *
     * @return string
     */
    public function rfc7970TimeImpactMetric() : string
    {
        return static::randomElement( static::$timeImpactMetrics );
    }

    /* ---------------------------------------------------------------------- */

    /**
     * @link https://www.iana.org/assignments/iodef2/timeimpact-duration.csv
     * @var string[]
     */
    protected static $timeImpactdurations = [
        'second',
        'minute',
        'hour',
        'day',
        'month',
        'quarter',
        'year',
        'ext-value'
    ];

    /**
     * A random selected timeImpact-duration enumeration value.
     *
     * @return string
     * @deprecated
     * @codeCoverageIgnore
     */
    public function timeImpactDuration() : string
    {
        return static::randomElement( static::$timeImpactdurations );
    }

    /**
     * A random selected rfc7970 timeImpact-duration enumeration value.
     *
     * @return string
     */
    public function rfc7970TimeImpactDuration() : string
    {
        return static::randomElement( static::$timeImpactdurations );
    }

    /**
     * A random selected rfc7970 counter-duration enumeration value.
     *
     * @return string
     */
    public function rfc7970CounterDuration() : string
    {
        return static::randomElement( static::$timeImpactdurations );
    }

    /* ---------------------------------------------------------------------- */

    /**
     * @link https://www.iana.org/assignments/iodef2/confidence-rating.csv
     * @var string[]
     */
    protected static $confidenceRating = [
        'low',
        'medium',
        'high',
        'numeric',
        'unknown',
        'ext-value'
    ];

    /**
     * A random selected confidence-rating enumeration value.
     *
     * @return string
     * @deprecated
     * @codeCoverageIgnore
     */
    public function confidenceRating() : string
    {
        return static::randomElement( static::$confidenceRating );
    }

    /**
     * A random selected rfc7970 confidence-rating enumeration value.
     *
     * @return string
     */
    public function rfc7970ConfidenceRating() : string
    {
        return static::randomElement( static::$confidenceRating );
    }

    /* ---------------------------------------------------------------------- */

    /**
     * @link https://www.iana.org/assignments/iodef2/noderole-category.csv
     * @var string[]
     */
    protected static $nodeRoleCategories = [
        'client',
        'client-enterprise',
        'client-partner',
        'client-remote',
        'client-kiosk',
        'client-mobile',
        'server-internal',
        'server-public',
        'www',
        'mail',
        'webmail',
        'messaging',
        'streaming',
        'voice',
        'file',
        'ftp',
        'p2p',
        'name',
        'directory',
        'credential',
        'print',
        'application',
        'database',
        'backup',
        'dhcp',
        'assessment',
        'source-control',
        'config-management',
        'monitoring',
        'infra',
        'infra-firewall',
        'infra-router',
        'infra-switch',
        'camera',
        'proxy',
        'remote-access',
        'log',
        'virtualization',
        'pos',
        'scada',
        'scada-supervisory',
        'sinkhole',
        'honeypot',
        'anonymization',
        'c2-server',
        'malware-distribution',
        'drop-server',
        'hop-point',
        'reflector',
        'phishing-site',
        'spear-phishing-site',
        'recruiting-site',
        'fraudulent-site',
        'ext-value'
    ];

    /**
     * A random selected nodeRole-category enumeration value.
     *
     * @return string
     * @deprecated
     * @codeCoverageIgnore
     */
    public function nodeRoleCategory() : string
    {
        return static::randomElement( static::$nodeRoleCategories );
    }

    /**
     * A random selected rfc7970 nodeRole-category enumeration value.
     *
     * @return string
     */
    public function rfc7970NodeRoleCategory() : string
    {
        return static::randomElement( static::$nodeRoleCategories );
    }

    /* ---------------------------------------------------------------------- */

    /**
     * @link https://www.iana.org/assignments/iodef2/system-category.csv
     * @var string[]
     */
    protected static $systemCategories = [
        'source',
        'target',
        'intermediate',
        'sensor',
        'infrastructure',
        'ext-value'
    ];

    /**
     * A random selected system-category enumeration value.
     *
     * @return string
     * @deprecated
     * @codeCoverageIgnore
     */
    public function systemCategory() : string
    {
        return static::randomElement( static::$systemCategories );
    }

    /**
     * A random selected rfc7970 system-category enumeration value.
     *
     * @return string
     */
    public function rfc7970SystemCategory() : string
    {
        return static::randomElement( static::$systemCategories );
    }

    /* ---------------------------------------------------------------------- */

    /**
     * @link https://www.iana.org/assignments/iodef2/system-ownership.csv
     * @var string[]
     */
    protected static $systemOwnerships = [
        'organization',
        'personal',
        'partner',
        'customer',
        'no-relationship',
        'unknown',
        'ext-value'
    ];

    /**
     * A random selected system-ownership enumeration value.
     *
     * @return string
     * @deprecated
     * @codeCoverageIgnore
     */
    public function systemOwnership() : string
    {
        return static::randomElement( static::$systemOwnerships );
    }

    /**
     * A random selected rfc7970system-ownership enumeration value.
     *
     * @return string
     */
    public function rfc7970SystemOwnership() : string
    {
        return static::randomElement( static::$systemOwnerships );
    }

    /* ---------------------------------------------------------------------- */

    /**
     * @link https://www.iana.org/assignments/iodef2/address-category.csv
     * @var string[]
     */
    protected static $addressCategories = [
        'asn',
        'atm',
        'e-mail',
        'ipv4-addr',
        'ipv4-net',
        'ipv4-net-masked',
        'ipv4-net-mask',
        'ipv6-addr',
        'ipv6-net',
        'ipv6-net-masked',
        'mac',
        'site-uri',
        'ext-value'
    ];

    /**
     * A random selected address-category enumeration value.
     *
     * @return string
     * @deprecated
     * @codeCoverageIgnore
     */
    public function addressCategory() : string
    {
        return static::randomElement( static::$addressCategories );
    }

    /**
     * A random selected rfc7970 address-category enumeration value.
     *
     * @return string
     */
    public function rfc7970AddressCategory() : string
    {
        return static::randomElement( static::$addressCategories );
    }

    /* ---------------------------------------------------------------------- */

    /**
     * @link https://www.iana.org/assignments/iodef2/counter-type.csv
     * @var string[]
     */
    protected static $counterTypes = [
        'count',
        'peak',
        'average',
        'ext-value'
    ];

    /**
     * A random selected counter-type enumeration value.
     *
     * @return string
     * @deprecated
     * @codeCoverageIgnore
     */
    public function counterType() : string
    {
        return static::randomElement( static::$counterTypes );
    }

    /**
     * A random selected rfc7970 counter-type enumeration value.
     *
     * @return string
     */
    public function rfc7970CounterType() : string
    {
        return static::randomElement( static::$counterTypes );
    }

    /* ---------------------------------------------------------------------- */

    /**
     * @link https://www.iana.org/assignments/iodef2/counter-unit.csv
     * @var string[]
     */
    protected static $counterUnits = [
        'byte',
        'mbit',
        'packet',
        'flow',
        'session',
        'alert',
        'message',
        'event',
        'host',
        'site',
        'organization',
        'ext-value'
    ];

    /**
     * A random selected counter-unit enumeration value.
     *
     * @return string
     * @deprecated
     * @codeCoverageIgnore
     */
    public function counterUnit() : string
    {
        return static::randomElement( static::$counterUnits );
    }

    /**
     * A random selected rfc7970 counter-unit enumeration value.
     *
     * @return string
     */
    public function rfc7970CounterUnit() : string
    {
        return static::randomElement( static::$counterUnits );
    }

    /* ---------------------------------------------------------------------- */

    /**
     * @link https://www.iana.org/assignments/iodef2/domaindata-system-status.csv
     * @var string[]
     */
    protected static $domainDataSystemStatus = [
        'spoofed',
        'fraudulent',
        'innocent-hacked',
        'innocent-hijacked',
        'unknown',
        'ext-value'
    ];

    /**
     * A random selected domainData-system-status enumeration value.
     *
     * @return string
     * @deprecated
     * @codeCoverageIgnore
     */
    public function domainDataSystemStatus() : string
    {
        return static::randomElement( static::$domainDataSystemStatus );
    }

    /**
     * A random selected rfc7970 domainData-system-status enumeration value.
     *
     * @return string
     */
    public function rfc7970DomainDataSystemStatus() : string
    {
        return static::randomElement( static::$domainDataSystemStatus );
    }

    /* ---------------------------------------------------------------------- */

    /**
     * @link https://www.iana.org/assignments/iodef2/domaindata-domain-status.csv
     * @var string[]
     */
    protected static $domainDataDomainStatus = [
        'reservedDelegation',
        'assignedAndActive',
        'assignedAndInactive',
        'assignedAndOnHold',
        'revoked',
        'transferPending',
        'registryLock',
        'registrarLock',
        'other',
        'unknown',
        'ext-value'
    ];

    /**
     * A random selected domainData-domain-status enumeration value.
     *
     * @return string
     * @deprecated
     * @codeCoverageIgnore
     */
    public function domainDataDomainStatus() : string
    {
        return static::randomElement( static::$domainDataDomainStatus );
    }

    /**
     * A random selected rfc7970 domainData-domain-status enumeration value.
     *
     * @return string
     */
    public function rfc7970DomainDataDomainStatus() : string
    {
        return static::randomElement( static::$domainDataDomainStatus );
    }

    /* ---------------------------------------------------------------------- */

    /**
     * @link https://www.iana.org/assignments/iodef2/recordpattern-type.csv
     * @var string[]
     */
    protected static $recordPatternTypes = [
        'regex',
        'binary',
        'xpath',
        'ext-value'
    ];

    /**
     * A random selected recordPattern-type enumeration value.
     *
     * @return string
     * @deprecated
     * @codeCoverageIgnore
     */
    public function recordPatternType() : string
    {
        return static::randomElement( static::$recordPatternTypes );
    }

    /**
     * A random selected rfc7970 recordPattern-type enumeration value.
     *
     * @return string
     */
    public function rfc7970RecordPatternType() : string
    {
        return static::randomElement( static::$recordPatternTypes );
    }

    /* ---------------------------------------------------------------------- */

    /**
     * @link https://www.iana.org/assignments/iodef2/recordpattern-offsetunit.csv
     * @var string[]
     */
    protected static $recordPatternOffsetunits = [
        'line',
        'byte',
        'ext-value'
    ];

    /**
     * A random selected recordPattern-offsetunit enumeration value.
     *
     * @return string
     * @deprecated
     * @codeCoverageIgnore
     */
    public function recordPatternOffsetunit() : string
    {
        return static::randomElement( static::$recordPatternOffsetunits );
    }

    /**
     * A random selected rfc7970 recordPattern-offsetunit enumeration value.
     *
     * @return string
     */
    public function rfc7970RecordPatternOffsetunit() : string
    {
        return static::randomElement( static::$recordPatternOffsetunits );
    }

    /* ---------------------------------------------------------------------- */

    /**
     * @link https://www.iana.org/assignments/iodef2/key-registryaction.csv
     * @var string[]
     */
    protected static $keyRegistryactions = [
        'add-key',
        'add-value',
        'delete-key',
        'delete-value',
        'modify-key',
        'modify-value',
        'ext-value'
    ];

    /**
     * A random selected key-registryaction enumeration value.
     *
     * @return string
     * @deprecated
     * @codeCoverageIgnore
     */
    public function keyRegistryaction() : string
    {
        return static::randomElement( static::$keyRegistryactions );
    }

    /**
     * A random selected rfc7970 key-registryaction enumeration value.
     *
     * @return string
     */
    public function rfc7970KeyRegistryaction() : string
    {
        return static::randomElement( static::$keyRegistryactions );
    }

    /* ---------------------------------------------------------------------- */

    /**
     * @link https://www.iana.org/assignments/iodef2/hashdata-scope.csv
     * @var string[]
     */
    protected static $hashDataScopes = [
        'file-contents',
        'file-pe-section',
        'file-pe-iat',
        'file-pe-resource',
        'file-pdf-object',
        'email-hash',
        'email-headers-hash',
        'email-body-hash',
        'ext-value'
    ];

    /**
     * A random selected hashData-scope enumeration value.
     *
     * @return string
     * @deprecated
     * @codeCoverageIgnore
     */
    public function hashDataScope() : string
    {
        return static::randomElement( static::$hashDataScopes );
    }

    /**
     * A random selected rfc7970hashData-scope enumeration value.
     *
     * @return string
     */
    public function rfc7970HashDataScope() : string
    {
        return static::randomElement( static::$hashDataScopes );
    }

    /* ---------------------------------------------------------------------- */

    /**
     * @link https://www.iana.org/assignments/iodef2/bulkobservable-type.csv
     * @var string[]
     */
    protected static $bulkObservableTypes = [
        'asn',
        'atm',
        'e-mail',
        'ipv4-addr',
        'ipv4-net',
        'ipv4-net-mask',
        'ipv6-addr',
        'ipv6-net',
        'ipv6-net-mask',
        'mac',
        'site-uri',
        'domain-name',
        'domain-to-ipv4',
        'domain-to-ipv6',
        'domain-to-ipv4-timestamp',
        'domain-to-ipv6-timestamp',
        'ipv4-port',
        'ipv6-port',
        'windows-reg-key',
        'file-hash',
        'email-x-mailer',
        'email-subject',
        'http-user-agent',
        'http-request-uri',
        'mutex',
        'file-path',
        'user-name',
        'ext-value'
    ];

    /**
     * A random selected bulkObservable-type enumeration value.
     *
     * @return string
     * @deprecated
     * @codeCoverageIgnore
     */
    public function bulkObservableType() : string
    {
        return static::randomElement( static::$bulkObservableTypes );
    }

    /**
     * A random selected rfc7970bulkObservable-type enumeration value.
     *
     * @return string
     */
    public function rfc7970BulkObservableType() : string
    {
        return static::randomElement( static::$bulkObservableTypes );
    }

    /* ---------------------------------------------------------------------- */

    /**
     * @link https://www.iana.org/assignments/iodef2/indicatorexpression-operator.csv
     * @var string[]
     */
    protected static $indicatorExpressionOperators = [
        'not',
        'and',
        'or',
        'xor'
    ];

    /**
     * A random selected indicatorExpression-operator enumeration value.
     *
     * @return string
     * @deprecated
     * @codeCoverageIgnore
     */
    public function indicatorExpressionOperator() : string
    {
        return static::randomElement( static::$indicatorExpressionOperators );
    }

    /**
     * A random selected rfc7970 indicatorExpression-operator enumeration value.
     *
     * @return string
     */
    public function rfc7970IndicatorExpressionOperator() : string
    {
        return static::randomElement( static::$indicatorExpressionOperators );
    }

    /* ---------------------------------------------------------------------- */

    /**
     * @link https://www.iana.org/assignments/iodef2/extensiontype-dtype.csv
     * @var string[]
     */
    protected static $extensionTypeDtypes = [
        'boolean',
        'byte',
        'bytes',
        'character',
        'date-time',
        'ntp-stamp',
        'integer',
        'portlist',
        'real',
        'string',
        'file',
        'path',
        'frame',
        'packet',
        'ipv4-packet',
        'ipv6-packet',
        'url',
        'csv',
        'winreg',
        'xml',
        'ext-value'
    ];

    /**
     * A random selected extensionType-dtype enumeration value.
     *
     * @return string
     * @deprecated
     * @codeCoverageIgnore
     */
    public function extensionTypeDtype() : string
    {
        return static::randomElement( static::$extensionTypeDtypes );
    }

    /**
     * A random selected rfc7970 extensionType-dtype enumeration value.
     *
     * @return string
     */
    public function rfc7970ExtensionTypeDtype() : string
    {
        return static::randomElement( static::$extensionTypeDtypes );
    }

    /* ---------------------------------------------------------------------- */

    /**
     * @link https://www.iana.org/assignments/iodef2/softwarereference-spec-id.csv
     * @var string[]
     */
    protected static $softwareReferenceSpecIds = [
        'custom',
        'cpe',
        'swid',
        'ext-value'
    ];

    /**
     * A random selected softwareReference-spec-id enumeration value.
     *
     * @return string
     * @deprecated
     * @codeCoverageIgnore
     */
    public function softwareReferenceSpecId() : string
    {
        return static::randomElement( static::$softwareReferenceSpecIds );
    }

    /**
     * A random selected rfc7970 softwareReference-spec-name enumeration value.
     *
     * Error in rcf7970
     *
     * @return string
     */
    public function rfc7970SoftwareReferenceSpecId() : string
    {
        return static::randomElement( static::$softwareReferenceSpecIds );
    }

    /**
     * A random selected rfc7970 softwareReference-spec-name enumeration value.
     *
     * @return string
     */
    public function rfc7970SoftwareReferenceSpecName() : string
    {
        return static::randomElement( static::$softwareReferenceSpecIds );
    }

    /* ---------------------------------------------------------------------- */

    /**
     * @link https://www.iana.org/assignments/iodef2/softwarereference-dtype.csv
     * @var string[]
     */
    protected static $softwareReferenceDtypes = [
        'bytes',
        'integer',
        'real',
        'string',
        'xml',
        'ext-value'
    ];

    /**
     * A random selected softwareReference-dtype enumeration value.
     *
     * @return string
     * @deprecated
     * @codeCoverageIgnore
     */
    public function softwareReferenceDtype() : string
    {
        return static::randomElement( static::$softwareReferenceDtypes );
    }

    /**
     * A random selected rfc7970 softwareReference-dtype enumeration value.
     *
     * @return string
     */
    public function rfc7970SoftwareReferenceDtype() : string
    {
        return static::randomElement( static::$softwareReferenceDtypes );
    }
}
