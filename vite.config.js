import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
mode: 'production',
publicDir: '/home/ubuntu/WebApps/portfolio/public',
 plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        vue(),
    ],
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        return pages[`./Pages/${name}.vue`]
      },
	build: {
	outDir: '/home/ubuntu/WebApps/portfolio/public/build',    
rollupOptions: {
      onwarn(warning, warn) {
        // Ignore specific unresolved import warnings
        if (warning.code === 'UNRESOLVED_IMPORT') {
          console.warn('Ignored warning:', warning.message);  // Log to console if needed
          return;  // Ignore this specific warning
        }
        // Handle all other warnings as usual
        warn(warning);
}}
   
  },

 server: {
    // Ensure this is only for development and not included in production
    
      host: '127.0.0.1',
      port: 5173
    
  },

});
