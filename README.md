# laravel-Slovakia-country-seeder
Laravel Seeds and Migration Files for [Country, Regions, Districts and Municipalities] of Slovak Republic.

## Information

| Seeder  | Entries | Related migration |
| ------------- | ------------- | ------------- |
| CountriesTableSeeder  | 1 | 2024_01_22_000000_create_countries_table |
| RegionsTableSeeder  | 8 | 2024_01_22_100000_create_regions_table |
| DistrictsTableSeeder  | 79 | 2024_01_22_200000_create_districts_table |
| MunicipalityTypesTableSeeder  | 3 | 2024_01_22_300000_municipality_types_table |
| MunicipalitiesTableSeeder  | 2927 | 2024_01_22_400000_create_municipalities_table |

> MunicipalitiesTableSeeder contain also information "Municipality Type" where value can be 1 (City) / 2 (Village) / 3 (City part).
> List contains 139 Cities => Bratislava and Kosice are split to City parts (That's the reason why the number of cities is not 141)

## Installation

Copy the database folder in your laravel project and run commands:

```
php artisan migrate

php artisan db:seed
```
