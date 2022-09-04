const mix = require('laravel-mix')

mix.ts('resources/ts/birds/main.tsx', 'assets/birds.js')
    .react()
    .sourceMaps()
    .disableNotifications()