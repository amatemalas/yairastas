<?php namespace Amatemalas\Yairastas\Events;

use ValidationException;

class BeforeRegisterCustom
{
    public function subscribe($event)
    {
        $event->listen('rainlab.user.beforeRegister', function ($data) {
            if (!$this->hasAcceptedPolicy($data)) {
                throw new ValidationException(['legal' => 'Debes aceptar los términos y condiciones.']);
            }
        });

        $event->listen('rainlab.user.register', function($user) {
            $user->gender = post('gender');
            $user->phone = post('phone');
            $user->groups()->sync([2]);
            $user->save();
        });
    }

    protected function hasAcceptedPolicy($data)
    {
        if (!array_key_exists('legal', $data)) {
            return false;
        }
        return true;
    }
}
