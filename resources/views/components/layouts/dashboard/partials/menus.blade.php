<li>
    <a>
        <x-icons.home class="h-5 w-5" />
        Dsahboard
        <span class="badge badge-sm">99+</span>
    </a>
</li>
<li>
    <a>
        <x-icons.package class="h-5 w-5" />
        Assets
    </a>
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
