<?php

namespace App\Http\Services;

use DB;
use Carbon\Carbon;
use App\Models\User;
use App\Http\Services\Responses\ServiceResponse;

class DoctorService
{
    protected $userModel;

    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    public function getAvailableByDate(string $date): ServiceResponse
    {
        try {
            $date = Carbon::parse($date)->toDateTimeString();

            $doctors = $this->userModel
                ->where('users.type', 'doctor')
                ->whereNotIn('users.id', function ($query) use ($date) {
                    $query->from('appointments')
                        ->select('appointments.doctor_id')
                        ->where('appointments.start_date', $date)
                        ->where('status', '!=', 'cancelled')
                        ->whereNull('deleted_at');
                })
                ->leftJoin('doctors', 'users.id', 'doctors.user_id')
                ->get(['users.id', 'users.name', 'users.image', 'doctors.specialty']);
        } catch (\Throwable $th) {
            return new ServiceResponse(
                false,
                'Erreur lors de la recherche de médecins !',
                null,
                $th
            );
        }

        return new ServiceResponse(
            true,
            'Recherche réussie de médecins !',
            $doctors
        );
    }
}
