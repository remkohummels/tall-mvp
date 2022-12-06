<?php

namespace App\Actions\Universities;

use App\Models\Institutes\University;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class BuildQueryForUniversitiesRankedUnderFactor
{
    use AsAction;

    /**
     * @param int $factor_id
     * @param Request $request
     * @return Builder
     */
    public function handle(int $factor_id, Request $request): Builder
    {
        $call_back = BuildUniversitySearchCallBack::run($request);
        return University::query()
            ->with('country')
            ->whereRelation('rawRankings', 'factor_id', '=', $factor_id)
            ->when($call_back, fn(Builder $query, $call_back) => $query->where($call_back))
            ->orderBy('university_name');
    }
}
