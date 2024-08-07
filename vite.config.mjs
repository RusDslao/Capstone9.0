import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',                
                'resources/js/app.js',

                'resources/css/sidebar.css',
                'resources/js/sidebar.js',

                'resources/js/enrollment/form.css',
                'resources/js/enrollment/form.js',

            ],
            refresh: true,
        }),
    ],
    build: {
        outDir: 'public/build',
        manifest: true,
    }
});
