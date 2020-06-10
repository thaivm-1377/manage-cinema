<?php

namespace App\Queries\Stats;

use App\Models\Repository;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SummaryQuery
{
    /**
     * Get summary data about project, build, user
     *
     * @param  Carbon $startDate
     * @param  Carbon $endDate
     * @return array
     */
    public function get($startDate, $endDate)
    {
        $totalProjects = Repository::where('is_enabled', true)
            ->rightJoin('builds', 'repositories.id', 'builds.repository_id')
            ->select(
                DB::raw('COUNT(DISTINCT(repositories.id)) as total_projects'),
                DB::raw('COUNT(builds.*) as total_builds')
            )
            ->first();

        $activeProjects = Repository::where('is_enabled', true)
            ->whereHas('builds', function ($q) use ($startDate, $endDate) {
                $q->whereBetween('created_at', [$startDate, $endDate]);
            })
            ->join('builds', function ($join) use ($startDate, $endDate) {
                $join->on('repositories.id', '=', 'builds.repository_id')
                    ->whereBetween('builds.created_at', [$startDate, $endDate]);
            })
            ->select(
                DB::raw('COUNT(DISTINCT(repositories.id)) as active_projects'),
                DB::raw('COUNT(builds.*) as builds')
            )
            ->first();

        return [
            'total_projects' => $totalProjects->total_projects,
            'total_builds' => $totalProjects->total_builds,
            'total_users' => User::count(),
            'active_projects' => $activeProjects->active_projects,
            'builds' => $activeProjects->builds,
        ];
    }
}
