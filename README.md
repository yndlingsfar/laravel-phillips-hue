# laravel-phillips-hue
provides basic API functionality for Phillips Hue

__Installation__

````
composer require dsteiner23/laravel-phillips-hue
````


__Usage__

````
/**
 * Class Hue
 * @package App\Http\Controllers
 */
class HueController extends Controller
{
    public function test(LightSwitchInterface $lightSwitch)
    {
        $lightSwitch->switchState(5, 150, 150, 7500);
    }
}
````
