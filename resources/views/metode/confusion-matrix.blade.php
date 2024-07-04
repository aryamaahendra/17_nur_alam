@extends('components.layouts.dashboard')

@section('content')
    @if ($accuracy)
        <div role="alert" class="alert w-full max-w-2xl mx-auto alert-success mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>Akurasi algoritma Naive Bayes: {{ number_format($accuracy * 100, 2) }}%</span>
        </div>
    @endif

    <div class="card w-full max-w-2xl mx-auto bg-base-100 rounded shadow border">
        <div class="card-body p-0">
            <div class="flex items-center justify-between p-4">
                <div class="flex items-center gap-1">
                    <form action="{{ route('dshb.metode.confusionmatrix.proses') }}" method="POST">
                        @csrf
                        @method('POST')

                        <button type="submit" class="btn btn-warning rounded">
                            <span>Buat Confusion Matrix</span>
                            <x-icons.view class="w-5 h-5 stroke-current" />
                        </button>
                    </form>
                </div>

                <div class="flex items-center gap-1">
                </div>
            </div>


            @if ($cm == null && $report == null)
                <p class="text-center text-muted mb-8 mt-2">
                    proses buat confusion matrix terlebih dahulu
                </p>
            @else
                <div class="overflow-x-auto px-4 pb-4">
                    <table class="table border">

                        <tbody>
                            <tr>
                                <td class="border text-center" rowspan="2" colspan="2">
                                    Confusion Matrix
                                </td>

                                <td class="border" colspan="2">Actual</td>
                            </tr>

                            <tr>
                                <td class="border">0</td>
                                <td class="border">1</td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td rowspan="2">Predicted</td>
                                <td class="border">0</td>
                                <td class="border">{{ $cm[0][0] }}</td>
                                <td class="border">{{ $cm[0][1] }}</td>

                            </tr>
                            <!-- row 3 -->
                            <tr>
                                <td class="border">1</td>
                                <td class="border">{{ $cm[1][0] }}</td>
                                <td class="border">{{ $cm[1][1] }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="overflow-x-auto px-4 pb-4">
                    <table class="table border">

                        <thead>
                            <tr>
                                <th class="border">Types</th>
                                <th class="border w-1">0</th>
                                <th class="border w-1">1</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border">Precision</td>
                                <td class="bor w-1der">{{ number_format($report->getPrecision()[0] * 100, 2) }}%</td>
                                <td class="border w-1">{{ number_format($report->getPrecision()[1] * 100, 2) }}%</td>
                            </tr>
                            <tr>
                                <td class="border">Recall</td>
                                <td class="border w-1">{{ number_format($report->getRecall()[0] * 100, 2) }}%</td>
                                <td class="border w-1">{{ number_format($report->getRecall()[1] * 100, 2) }}%</td>
                            </tr>
                            <tr>
                                <td class="border">F1 Score</td>
                                <td class="border w-1">{{ number_format($report->getF1score()[0] * 100, 2) }}%</td>
                                <td class="border w-1">{{ number_format($report->getF1score()[1] * 100, 2) }}%</td>
                            </tr>
                            {{-- <tr>
                                <td class="border">Support</td>
                                <td class="border w-1">{{ number_format($report->getSupport()[0]) }}</td>
                                <td class="border w-1">{{ number_format($report->getSupport()[1]) }}</td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
@endsection
