import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
            'resources/css/app.css', 
            'resources/js/app.js',
            'resources/css/tailwind.css',
        ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '@': '/resources/js',
            '~bootstrap': path.resolve(__dirname,"node_modules/bootstrap/dist")
        },
    },
});
