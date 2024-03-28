import domReady from '@roots/sage/client/dom-ready';

// Static imports
import {mediaQuery} from './js/media-query.js';
import {nav} from './js/nav.js';

/**
 * Initializes the application.
 */
async function initApp() {
  try {
    if (document.querySelector('.js-tabs')) {
      const {tabs} = await import('./js/tabs.js');
      tabs();
    }

    if (document.querySelector('.js-glide')) {
      const {glide} = await import('./js/glide.js');
      glide();
    }

    nav();
    mediaQuery();
    // Initialize other modules...
  } catch (error) {
    console.error('Error initializing modules:', error);
  }
}

/**
 * Application entrypoint
 */
domReady((err) => {
  if (err) {
    console.error('Error on DOM ready:', err);
    return;
  }
  initApp();
});

/**
 * Hot Module Replacement
 */
if (import.meta.webpackHot) {
  import.meta.webpackHot.accept(console.error);
}
