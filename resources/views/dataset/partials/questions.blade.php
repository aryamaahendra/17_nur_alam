@props(['answers' => null])

<table class="table">
    <tbody>
        @forelse ($questions as $question)
            @php
                $old = old('question[' . $question->id . ']');
                if ($answers) {
                    $old = $answers[$question->id];
                }
            @endphp

            <tr>
                <td>
                    <div class="">
                        {{ $question->question }}
                    </div>

                    <div class="flex items-center gap-4 mt-2">
                        <div class="form-control">
                            <label class="label cursor-pointer gap-2">
                                <input type="radio" name="question[{{ $question->id }}]" value="1"
                                    class="radio radio-sm" @checked($old == 1) />
                                <span class="label-text">Yes</span>
                            </label>
                        </div>

                        <div class="form-control">
                            <label class="label cursor-pointer gap-2">
                                <input type="radio" name="question[{{ $question->id }}]" value="0"
                                    class="radio radio-sm" @checked($old == 0) />
                                <span class="label-text">Noo</span>
                            </label>
                        </div>
                    </div>
                </td>
            </tr>
        @empty
        @endforelse
    </tbody>
</table>
