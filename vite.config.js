import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 
                'resources/css/home.css',
                'resources/js/home.js',
                'resources/css/navbar.css',
                'resources/js/navbar.js',
                'resources/css/show.css',
                'resources/js/show.js',
                'resources/js/readGithub.js',],
            refresh: true,
        }),
    ],
});
