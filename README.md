
> Location-, Relation- and Incident Object report enumeration types for PHP Faker
>
* Location types as found in [rfc4589] 'Location Types Registry'
  * "the types of places a human or end system might be found"

* Link Relation Types as found in [Link Relation Types]
  * in reference with [rfc8288] Web Linking
  * "...the relationships between resources on the Web ("links")
  and the type of those relationships"
    
* Report enumeration values defined by Incident Object Description Exchange Format ([rfc7970]), 
  and as found in [iana.org/iodef2] : 
  * Restriction,Incident-purpose,Incident-status,Contact-role,Contact-type,
  RegistryHandle-registry,PostalAddress-type,Telephone-type,Email-type,
  Expectation-action,Discovery-source,SystemImpact-type,BusinessImpact-severity,
  BusinessImpact-type,TimeImpact-metric,TimeImpact-duration,Confidence-rating,
  NodeRole-category,System-category,System-ownership,Address-category,Counter-type,
  Counter-unit,DomainData-system-status,DomainData-domain-status,RecordPattern-type,
  RecordPattern-offsetunit,Key-registryaction,HashData-scope,BulkObservable-type,
  IndicatorExpression-operator,ExtensionType-dtype,SoftwareReference-spec-id,SoftwareReference-dtype

Installation
------------

Add the FakerLocRelTypes library to your `composer.json` file:

```
composer require kigkonsult/fakerlocreltypes
```

Usage
-----

To use this with [Faker], invoke the `Kigkonsult\FakerLocRelTypes` classes as Faker generators.

```php
<?php

use Faker\Factory;
use Kigkonsult\FakerLocRelTypes\Provider\en_US\LocationTypes;

$faker = Factory::create();
$faker->addProvider( new LocationTypes( $faker ));

// Generator
// a random rfc4589 Place Location Type
$locationType = $faker->locationType();

```

```php
<?php

use Faker\Factory;
use Kigkonsult\FakerLocRelTypes\Provider\en_US\RelationTypes;

$faker = Factory::create();
$faker->addProvider( new RelationTypes( $faker ));

// Generator
// a random rfc8288 Web Relation Type
$relationType = $faker->relationType();

```

```php
<?php

use Faker\Factory;
use Kigkonsult\FakerLocRelTypes\Provider\en_US\Rfc7970enums;

$faker = Factory::create();
$faker->addProvider( new Rfc7970enums( $faker ));

// Generator
// a random rfc7970 restriction enumeration value
$restriction  = $faker->restriction();

```

###### Sponsorship

Donation using [paypal.me/kigkonsult] are appreciated.
For invoice, please e-mail</a>.


###### Support

For support go to [github.com FakerLocRelTypes]


###### License

This project is licensed under the LGPLv3 License


[Composer]:https://getcomposer.org/
[Faker]:https://github.com/fakerphp/faker
[github.com FakerLocRelTypes]:https://github.com/iCalcreator/fakerlocreltypes/issues
[iana.org/iodef2]:https://www.iana.org/assignments/iodef2/iodef2.xhtml
[Link Relation Types]:https://www.iana.org/assignments/link-relations/link-relations.xhtml
[rfc4589]:https://www.rfc-editor.org/rfc/rfc4589.txt
[rfc7970]:https://www.rfc-editor.org/rfc/rfc7970.html
[rfc8288]:https://www.rfc-editor.org/rfc/rfc8288.html
[paypal.me/kigkonsult]:https://paypal.me/kigkonsult
