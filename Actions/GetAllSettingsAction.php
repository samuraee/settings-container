<?php

namespace App\Containers\VendorSection\Settings\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;

class GetAllSettingsAction extends Action
{
    public function run()
    {
        return Apiato::call('Settings@GetAllSettingsTask', [], [
            'addRequestCriteria',
            'ordered'
        ]);
    }
}
