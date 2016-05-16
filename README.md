# laravel-phillips-hue
provides basic API functionality for Phillips Hue


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
