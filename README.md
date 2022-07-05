
> Location-, Relation- Media- and Incident Object report types for PHP Faker
>
* Location types as found in [rfc4589] 'Location Types Registry'
  * "the types of places a human or end system might be found"

* Link Relation Types as found in [Link Relation Types]
  * in reference with [rfc8288] Web Linking
  * "...the relationships between resources on the Web ("links")
  and the type of those relationships"

* MediaTypes (MIME-Types) as found in [mediaTypes]
  * application, audio, font, example, image, message, model, multipart, text, video or any type

* Report enumeration values defined by Incident Object Description Exchange Format ([rfc7970]), 
  * as found in [iana.org/iodef2]

#### Usage

To use this with [Faker], invoke the `Kigkonsult\FakerLocRelTypes` classes as Faker generators.

All generators loadBase are available as static array properties for ad Hoc use.

###### Rfc4589


Rfc4589LocationTypes has only one generator.
For details, please review [rfc4589].
```php
<?php

use Faker\Factory;
use Kigkonsult\FakerLocRelTypes\Provider\en_US\Rfc4589LocationTypes;

$faker = Factory::create();
$faker->addProvider( new Rfc4589LocationTypes( $faker ));

// Generator
// a random rfc4589 Place Location Type
$locationType = $faker->rfc4589LcationType();

```
###### Rfc8288

Rfc8288RelationTypes has only one generator.
For details, please review [Link Relation Types].

```php
<?php

use Faker\Factory;
use Kigkonsult\FakerLocRelTypes\Provider\en_US\Rfc8288RelationTypes;

$faker = Factory::create();
$faker->addProvider( new Rfc8288RelationTypes( $faker ));

// Generator
// a random rfc8288 Web Relation Type
$relationType = $faker->rc8288RelationType();

```

###### MediaTypes (MIME-types)
Split upp in `application`, `audio`, `font`, `example`, `image`, `message`, `model`, `multipart`, `text`, `video` or `any` mediaTypes.
All generators are suffixed by _mediaType_)

```php
<?php

use Faker\Factory;
use Kigkonsult\FakerLocRelTypes\Provider\en_US\MediaTypes;

$faker = Factory::create();
$faker->addProvider( new MediaTypes( $faker ));

// Generator
// a random application mediaType
$applicationType = $faker->applicationMediaType();

```


###### Rfc7970
Rfc7970enums has 38 generators (all prefixed by _rfc7970_) :

<table>
<tr><td>AddressCategory<td>EmailType<td>RecordPatternType
<tr><td>BulkObservableType<td>ExpectationAction<td>RegistryHandleRegistry
<tr><td>BusinessImpactSeverity<td>ExtensionTypeDtype<td>Restriction
<tr><td>BusinessImpactType<td>HashDataScope<td>SoftwareReferenceSpecId
<tr><td>ConfidenceRating<td>HistoryItemAction<td>SoftwareReferenceDtype
<tr><td>ContactRole<td>IncidentPurpose<td>SoftwareReferenceSpecName
<tr><td>ContactType<td>IncidentStatus<td>SystemCategory
<tr><td>CounterDuration<td>IndicatorExpressionOperator<td>SystemImpactType
<tr><td>CounterType<td>IntendedImpactType<td>SystemOwnership
<tr><td>CounterUnit<td>KeyRegistryaction<td>Telephone-type
<tr><td>DiscoverySource<td>NodeRoleCategory<td>TimeImpactDuration
<tr><td>DomainDataDomainStatus<td>PostalAddressType<td>TimeImpactMetric
<tr><td>DomainDataSystemStatus<td>RecordPatternOffsetunit<td>
</table>

For details, please review [iana.org/iodef2].


```php
<?php

use Faker\Factory;
use Kigkonsult\FakerLocRelTypes\Provider\en_US\Rfc7970enums;

$faker = Factory::create();
$faker->addProvider( new Rfc7970enums( $faker ));

// Generator
// a random rfc7970 restriction enumeration value
$restriction = $faker->rfc7970Restriction();

```

#### Installation

Add the FakerLocRelTypes library to your `composer.json` file:

```
composer require kigkonsult/fakerlocreltypes
```

#### Sponsorship

Donation using [paypal.me/kigkonsult] are appreciated.
For invoice, please e-mail</a>.


#### Support

For support go to [github.com FakerLocRelTypes]


#### License

This project is licensed under the LGPLv3 License


[Composer]:https://getcomposer.org/
[Faker]:https://github.com/fakerphp/faker
[github.com FakerLocRelTypes]:https://github.com/iCalcreator/fakerlocreltypes/issues
[iana.org/iodef2]:https://www.iana.org/assignments/iodef2/iodef2.xhtml
[Link Relation Types]:https://www.iana.org/assignments/link-relations/link-relations.xhtml
[mediaTypes]:https://www.iana.org/assignments/media-types/media-types.xhtml
[rfc4589]:https://www.rfc-editor.org/rfc/rfc4589.txt
[rfc7970]:https://www.rfc-editor.org/rfc/rfc7970.html
[rfc8288]:https://www.rfc-editor.org/rfc/rfc8288.html
[paypal.me/kigkonsult]:https://paypal.me/kigkonsult
