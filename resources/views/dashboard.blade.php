@extends('components.layouts.dashboard')

@section('content')
    <div class="stats w-full shadow border">
        <div class="stat">
            <div class="stat-figure text-secondary">
                <x-icons.database class="w-8 h-8" />
            </div>
            <div class="stat-title">Dataset</div>
            <div class="stat-value">{{ \App\Models\Dataset::count() }}</div>
            <div class="stat-desc">Jan 1st - Feb 1st</div>
        </div>

        <div class="stat">
            <div class="stat-figure text-secondary">
                <x-icons.history class="w-8 h-8" />
            </div>
            <div class="stat-title">History</div>
            <div class="stat-value">{{ \App\Models\History::count() }}</div>
            <div class="stat-desc">↗︎ 400 (22%)</div>
        </div>

        <div class="stat">
            <div class="stat-figure text-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="inline-block w-8 h-8 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4">
                    </path>
                </svg>
            </div>
            <div class="stat-title">Pertanyaan</div>
            <div class="stat-value">{{ \App\Models\Question::count() }}</div>
            <div class="stat-desc">↗︎ 400 (22%)</div>
        </div>

        <div class="stat">
            <div class="stat-figure text-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="inline-block w-8 h-8 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                </svg>
            </div>
            <div class="stat-title">Accuracy</div>
            <div class="stat-value">{{ number_format(Cache::get('cm_accuracy', 0) * 100, 2) }}%</div>
            <div class="stat-desc">↘︎ 90 (14%)</div>
        </div>
    </div>

    <div class="mt-6">
        <div class="card bg-base-100 shadow border">
            <div class="card-body">
                <h2 class="card-title">Hitory Penggunaan</h2>
                <div class="w-full max-w-xs mx-auto">
                    <canvas id="acquisitions"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection
