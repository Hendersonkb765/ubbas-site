import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/cidsol/mobile/buscar.css',
                'resources/css/cidsol/mobile/cadastro.css',
                'resources/css/cidsol/mobile/home.css',
                'resources/css/cidsol/mobile/login.css',
                'resources/css/cidsol/buscar.css',
                'resources/css/cidsol/cadastro.css',
                'resources/css/cidsol/home.css',
                'resources/css/cidsol/login.css',
                'resources/css/app.css',
                'resources/css/cadastro.css',
                'resources/css/confirmado.css',
                'resources/css/mensagens.css',
                'resources/css/style-home.css',
                 'resources/js/app.js',
                 'resources/js/cidsol/mobile/menu.js',
                 'resources/js/cidsol/buscar.js',
                 'resources/js/cidsol/homeM.js',
                 'resources/js/cidsol/jquery.js',
                 'resources/js/cidsol/login.js',
                 'resources/js/app.js',
                 'resources/js/script-home.js',
            
                ],
            refresh: true,
        }),
    ],
});
