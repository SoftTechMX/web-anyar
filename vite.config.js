import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',

                'resources/sass/theme/anyar.scss',
                'resources/js/theme/anyar.js',

                'resources/sass/components/buttons.scss',
                'resources/sass/components/cards.scss',
            ],
            refresh: true,
        }),
    ],
});
