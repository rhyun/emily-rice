export const mediaQuery = async (err) => {
  if (err) {
    console.error(err);
  }

  const mobileMedia = window.matchMedia('(max-width: 1024px)');

  function handleTabletChange(e) {
    // Check if the media query is true
    if (e.matches) {
      document.body.classList.toggle('is-tablet', true);
    } else {
      document.body.classList.toggle('is-tablet', false);
    }
  }

  // Register event listener
  mobileMedia.addEventListener('change', handleTabletChange);

  // Initial check
  handleTabletChange(mobileMedia);
};

import.meta.webpackHot?.accept(mediaQuery);
