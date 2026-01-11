<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @fluxAppearance
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Proxicore</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    </head>
    <x-layouts.app.sidebar class="flex p-6 lg:p-8">
        <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
                <div class="text-[13px] leading-[20px] flex-1 p-6 pb-12 lg:p-20 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] border-1 border-gray-300 rounded">
                    <h1 class="mb-1 font-medium">Välkommen till Proxicores Databas-test!</h1>
                    <p class="mb-2 text-[#706f6c] dark:text-[#A1A09A]">Klicka på en av alternativen till vänster för att komma igång.</p>
                </div>
            </main>
        </div>
        @fluxScripts
    </x-layouts.app.sidebar>
</html>
