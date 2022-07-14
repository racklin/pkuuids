# Using a UUID as PrimaryKey for Laravel 5.3+
PkUuids package use `ramsey/uuid`[https://github.com/ramsey/uuid] (official installed on 5.3+) to generate a UUID_v4(random) as primary key for `Eloquent Model`.


inspired by http://stackoverflow.com/questions/31817067/laravel-5-using-a-uuid-as-primary-key

## Install
1. Use composer to add the package into your project
using
`composer require racklin/pkuuids:dev-master`

## Migrations
Use a UUID as primary key, we need to change `$table->increments('id');` to `$table->uuid('id')->primary();`

## Models
### Disable auto-increment primary key
Add `$incrementing = false;` to your Models.

### Use Traits
Add `use PkUuuids;` to your Models.

Example:
```
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Racklin\PkUuids\PkUuids;

class User extends Model
{
    use PkUuids;

    public $incrementing = false;
}
```


## Laravel version

Current package version works for Laravel 5.3+.
