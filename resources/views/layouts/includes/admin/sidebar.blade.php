<aside id="top-bar-sidebar" class="fixed top-0 left-0 z-40 w-64 h-full bg-white transition-transform duration-300 ease-in-out -translate-x-full sm:translate-x-0 shadow-xl sm:shadow-none" aria-label="Sidebar" :class="{
    'transform-none': open,
    '-translate-x-full': !open,
    'z-50': open,
}">
    <div class="h-full px-3 py-4 overflow-y-auto bg-white border-e border-default">
        <div class="flex items-center gap-3 px-2.5 pb-4 mb-4 border-b border-default">
            <a href="{{ url('/') }}" class="flex items-center gap-2">
                <span class="sr-only">{{ config('app.name') }}</span>
                <x-application-mark class="block h-8 w-8 sm:hidden" />
                <x-application-logo class="hidden h-8 w-auto sm:block" />
            </a>
        </div>
        <ul class="space-y-1 text-sm font-medium">
            <li>
                <a href="#" class="flex items-center gap-3 px-3 py-2 text-body rounded-base hover:bg-neutral-secondary-medium hover:text-heading transition-colors group">
                <svg class="shrink-0 w-5 h-5 text-body transition duration-75 group-hover:text-heading" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6.025A7.5 7.5 0 1 0 17.975 14H10V6.025Z"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.5 3c-.169 0-.334.014-.5.025V11h7.975c.011-.166.025-.331.025-.5A7.5 7.5 0 0 0 13.5 3Z"/></svg>
                <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center gap-3 px-3 py-2 text-body rounded-base hover:bg-neutral-secondary-medium hover:text-heading transition-colors group">
                <svg class="shrink-0 w-5 h-5 text-body transition duration-75 group-hover:text-heading" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v14M9 5v14M4 5h16a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z"/></svg>
                <span class="flex-1 whitespace-nowrap">Kanban</span>
                <span class="bg-neutral-secondary-medium border border-default-medium text-heading text-xs font-medium px-1.5 py-0.5 rounded-sm">Pro</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center gap-3 px-3 py-2 text-body rounded-base hover:bg-neutral-secondary-medium hover:text-heading transition-colors group">
                <svg class="shrink-0 w-5 h-5 text-body transition duration-75 group-hover:text-heading" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 13h3.439a.991.991 0 0 1 .908.6 3.978 3.978 0 0 0 7.306 0 .99.99 0 0 1 .908-.6H20M4 13v6a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-6M4 13l2-9h12l2 9M9 7h6m-7 3h8"/></svg>
                <span class="flex-1 whitespace-nowrap">Inbox</span>
                <span class="inline-flex items-center justify-center w-4.5 h-4.5 text-xs font-medium text-fg-danger-strong bg-danger-soft border border-danger-subtle rounded-full">2</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center gap-3 px-3 py-2 text-body rounded-base hover:bg-neutral-secondary-medium hover:text-heading transition-colors group">
                <svg class="shrink-0 w-5 h-5 text-body transition duration-75 group-hover:text-heading" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M16 19h4a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-2m-2.236-4a3 3 0 1 0 0-4M3 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/></svg>
                <span class="flex-1 whitespace-nowrap">Users</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center gap-3 px-3 py-2 text-body rounded-base hover:bg-neutral-secondary-medium hover:text-heading transition-colors group">
                <svg class="shrink-0 w-5 h-5 text-body transition duration-75 group-hover:text-heading" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10V6a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v4m3-2 .917 11.923A1 1 0 0 1 17.92 21H6.08a1 1 0 0 1-.997-1.077L6 8h12Z"/></svg>
                <span class="flex-1 whitespace-nowrap">Products</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center gap-3 px-3 py-2 text-body rounded-base hover:bg-neutral-secondary-medium hover:text-heading transition-colors group">
                <svg class="shrink-0 w-5 h-5 text-body transition duration-75 group-hover:text-heading" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2"/></svg>
                <span class="flex-1 whitespace-nowrap">Sign In</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
