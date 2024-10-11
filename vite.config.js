import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    // server: {
    //     host: true, // Ini penting untuk mengizinkan akses dari IP address lain
    //     port: 5173, // Port default Vite
    //     hmr: {
    //         host: '192.168.0.13', // Ganti dengan IP address lokal Anda
    //     },
    // },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
