Teams(sport) Names Provider for Faker
---

This package will allow [Faker](https://github.com/fzaninotto/Faker) to generate fake teams(sport) names.

## Install
To install, use composer:

```bash
composer require teka/faker-team
```

## Use
```php
$faker = \Faker\Factory::create();
$faker->addProvider(new Faker\Provider\TeamProvider($faker));
```

```
$faker->teamName();
// Screaming Silver Annihilators

$faker->abreviation($fake->teamName())
// SSA
```

## License

This package is under the WTFPL license. Do whatever you want with it.

[LICENSE](https://github.com/marcelotk15/faker-team/LICENSE)

## Reporting an issue or a feature request

Fork it, send a PR. Issues and feature requests are tracked in the
[GitHub issue tracker](https://github.com/marcelotk15/faker-team/issues).