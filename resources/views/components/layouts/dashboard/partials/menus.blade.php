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
        <summary>
            <x-icons.database class="h-5 w-5" />
            Master Data
        </summary>

        <ul class="shadow border !mt-5 right-0 w-40 z-40">
            <li>
                <a>
                    <x-icons.tie class="h-5 w-5" />
                    Karyawan
                </a>
            </li>

            <li>
                <a>
                    <x-icons.number class="h-5 w-5" />
                    Klasifikasi
                </a>
            </li>

            <li>
                <a>
                    <x-icons.building-community class="h-5 w-5" />
                    Ruangan
                </a>
            </li>

            <li>
                <a href="{{ route('dshb.user.index') }}">
                    <x-icons.users class="h-5 w-5" />
                    User
                </a>
            </li>
        </ul>
    </details>
</li>
