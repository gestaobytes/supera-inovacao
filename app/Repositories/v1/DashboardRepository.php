<?php

namespace App\Repositories\v1;

use App\Models\Maintenance;
use App\Interfaces\v1\DashboardInterface;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class DashboardRepository implements DashboardInterface
{
    private $model;

    public function __construct(Maintenance $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $user = Auth::user();
        $dateNow = Carbon::now()->addDays(-1);
        $dateFinal = Carbon::now()->addDays(7);

        $registers = $this->model->where([['user_id', $user->id],['dateservice', '>' ,$dateNow],['dateservice', '<' ,$dateFinal]])->get();
        
        // dd($registers);

        return view('admin.dashboard.index', compact('registers'));
    }
}
