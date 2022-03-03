
> Location- and RelationTypes for PHP Faker
>
* Location types as found in [rfc4589] 'Location Types Registry'
  * "the types of places a human or end system might be found"

* Link Relation Types as found in [Link Relation Types]
  * in reference with [rfc8288] Web Linking
  * "...the relationships between resources on the Web ("links")
  and the type of those relationships"

Installation
------------

Add the FakerLocRelTypes library to your `composer.json` file:

```
composer require kigkonsult/fakerlocreltypes
```

Usage
-----

To use this with [Faker], 
you must invoke the `Kigkonsult\FakerLocRelTypes` classes 
as Faker generators:

```php
<?php

use Faker\Factory;
use Kigkonsult\FakerLocRelTypes\Provider\en_US\LocationTypes;
use Kigkonsult\FakerLocRelTypes\Provider\en_US\RelationTypes;

$faker = Factory::create();
$faker->addProvider( new LocationTypes( $faker ));
$faker->addProvider( new RelationTypes( $faker ));

// Generators

// a random Place Location Type
$locationType = $faker->locationType();

// a random Web Relation Type
$relationType = $faker->relationType();

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
[Link Relation Types]:https://www.iana.org/assignments/link-relations/link-relations.xhtml
[rfc4589]:https://www.rfc-editor.org/rfc/rfc4589.txt
[rfc8288]:https://www.rfc-editor.org/rfc/rfc8288.html
[paypal.me/kigkonsult]:https://paypal.me/kigkonsult
