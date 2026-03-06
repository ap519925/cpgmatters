import '../scss/main.scss';

/**
 * Main JavaScript for CPG Theme
 */
(function (Drupal) {
    'use strict';

    Drupal.behaviors.cpgThemeGlobal = {
        attach: function (context, settings) {
            console.log('CPG Theme initialized!');
            // Implement any modern vanilla JS interactions here.
        }
    };

    // Vite module HMR test hook (removed in production build by Vite)
    if (import.meta.hot) {
        import.meta.hot.accept((newModule) => {
            console.log('HMR applied for JS.');
        });
    }

})(window.Drupal || { behaviors: {} });
