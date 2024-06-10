<div class="border-b shadow">
    <div class="border-b">
        <div class="navbar bg-base-100 w-full max-w-6xl mx-auto">
            <div class="">
                <a class="btn btn-ghost text-xl">NAPPII</a>
            </div>

            <div class="flex-1 flex justify-center items-center">
            </div>

            <div class="flex-none space-x-2">

                <button class="btn btn-circle btn-ghost w-12 min-h-12 h-12">
                    <x-icons.maximize class="h-6 w-6" />
                </button>

                <button class="btn btn-circle btn-ghost w-12 min-h-12 h-12">
                    <x-icons.color-swatch class="h-6 w-6" />
                </button>

                <button class="btn btn-circle btn-ghost w-12 min-h-12 h-12">
                    <x-icons.bell class="h-6 w-6" />
                </button>

                <div class="dropdown dropdown-end">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                        <div class="w-12 rounded-full">
                            <img alt="Tailwind CSS Navbar component" src="{{ Auth::user()->getAvatar() }}" />
                        </div>
                    </div>

                    <ul tabindex="0"
                        class="menu menu-sm dropdown-content mt-3 z-40 p-2 shadow bg-base-100 rounded-box w-52">
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="flex items-center py-2 px-4 gap-2">
                                    <x-icons.database-smile class="h-5 w-5" />
                                    Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="navbar bg-base-100 w-full max-w-6xl mx-auto">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    @include('components.layouts.dashboard.partials.menus')
                </ul>
            </div>

            <label class="input input-bordered flex items-center gap-2">
                <input type="text" class="grow" placeholder="Search" />
                <kbd class="kbd kbd-sm">⌘</kbd>
                <kbd class="kbd kbd-sm">K</kbd>
            </label>
        </div>

        <div class="navbar-center hidden lg:flex">
        </div>

        <div class="navbar-end">
            <ul class="menu menu-horizontal px-1 !py-0">
                @include('components.layouts.dashboard.partials.menus')
            </ul>
        </div>
    </div>
</div>
