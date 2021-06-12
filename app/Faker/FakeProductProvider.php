<?php

namespace App\Faker;

use Faker\Provider\Base;
use Illuminate\Database\Eloquent\Collection;

class FakeProductProvider extends Base
{
    private static $FAKES_PATH = 'img/faker/food/';

    /** @var Collection */
    public static $fakes;

    private static function getFakes(){
        $path = resource_path(self::$FAKES_PATH);
        self::$fakes = collect(scandir($path))->skip(2)
            ->map(function ($file) use ($path) { return $path.$file; })
            ->map(function ($file) { return json_decode(file_get_contents($file), true); });
    }

    public static function product()
    {
        if (!self::$fakes){
            self::getFakes();
        }
        return self::$fakes->random();
    }
}
