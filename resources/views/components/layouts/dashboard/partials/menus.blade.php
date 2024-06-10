<li>
    <a href="{{ route('dshb.index') }}" @class(['active' => Route::is('dshb.index')])>
        <x-icons.home class="h-5 w-5" />
        Dsahboard
    </a>
</li>
<li>
    <details>
        <summary @class([
            'text-base-100 bg-base-content hover:bg-base-content' =>
                Route::is('dshb.metode.confusionmatrix') ||
                Route::is('dshb.metode.naivebayes'),
        ])>
            <x-icons.apps class="h-5 w-5" />
            Metode
        </summary>

        <ul class="shadow border !mt-5 right-0 w-52 z-40">
            <li>
                <a href="{{ route('dshb.metode.naivebayes') }}" @class(['active' => Route::is('dshb.metode.naivebayes')])>
                    <x-icons.cpu class="h-5 w-5" />
                    Naive Bayes
                </a>
            </li>

            <li>
                <a href="{{ route('dshb.metode.confusionmatrix') }}" @class(['active' => Route::is('dshb.metode.confusionmatrix')])>
                    <x-icons.brand-matrix class="h-5 w-5" />
                    Confusion Matrix
                </a>
            </li>
        </ul>
    </details>
</li>
<li>
    <details>
        <summary @class([
            'text-base-100 bg-base-content hover:bg-base-content' =>
                Route::is('dshb.dataset.*') ||
                Route::is('dshb.question.*') ||
                Route::is('dshb.user.*'),
        ])>
            <x-icons.database class="h-5 w-5" />
            Master Data
        </summary>

        <ul class="shadow border !mt-5 right-0 w-40 z-40">
            <li>
                <a href="{{ route('dshb.dataset.index') }}" @class(['active' => Route::is('dshb.dataset.*')])>
                    <x-icons.database-smile class="h-5 w-5" />
                    Dataset
                </a>
            </li>

            <li>
                <a href="{{ route('dshb.question.index') }}" @class(['active' => Route::is('dshb.question.*')])>
                    <x-icons.message class="h-5 w-5" />
                    Pertanyaan
                </a>
            </li>

            <li>
                <a href="{{ route('dshb.user.index') }}" @class(['active' => Route::is('dshb.user.*')])>
                    <x-icons.users class="h-5 w-5" />
                    User
                </a>
            </li>
        </ul>
    </details>
</li>
