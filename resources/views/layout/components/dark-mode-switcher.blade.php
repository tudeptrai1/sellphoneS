<!-- BEGIN: Dark Mode Switcher-->
<div data-url="{{ route('dark-mode-switcher') }}" class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
    <div class="mr-4 text-slate-600 dark:text-slate-200">Dark Mode</div>
    <div class="dark-mode-switcher__toggle {{ $dark_mode ? 'dark-mode-switcher__toggle--active' : '' }} border"></div>
</div>
<!-- END: Dark Mode Switcher-->
