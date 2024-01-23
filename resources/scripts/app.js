import domReady from '@roots/sage/client/dom-ready';
/**
 * Application entrypoint
 */
domReady(async (err) => {
  if (err) {
    console.error(err);
  }

  const app = async () => {
    if (document.querySelector('.js-listings')) {
      const {listings} = await import('./js/listings.js');
      listings();
    }
  };

  app();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
