<?php

namespace App\Presenters;

use Laracasts\Presenter\Presenter;

class AppointmentPresenter extends Presenter
{
    public function status(): string
    {
        if ($this->entity->status === 'pending') {
            return '
            En attente';
        }
        if ($this->entity->status === 'confirmed') {
            return 'Confirme';
        }
        return 'annule';
    }
}
