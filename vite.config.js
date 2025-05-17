import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/styles.css",
                "resources/css/admin.css",
                "resources/js/admin.js",
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/css/adminadd.css",
                "resources/js/adminadd.js",
                "resources/css/adminedit.css",
                "resources/js/adminedit.js",
                "resources/css/adminhistory.css",
                "resources/js/adminhistory.js",
                "resources/css/Contact.css",
                "resources/js/Contact.js",
                "resources/css/Tutorial.css",
                "resources/css/map.css",
                "resources/js/Tutorial.js",
                "resources/js/bootstrap.js",
            ],
            refresh: true,
        }),
    ],
});
