import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                // Add the path to Bootstrap Icons CSS
                'node_modules/bootstrap-icons/font/bootstrap-icons.css'
            ],
            refresh: true,
        }),
    ],
});
