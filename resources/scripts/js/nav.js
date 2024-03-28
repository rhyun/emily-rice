export const nav = () => {
  const app = document.querySelector('.js-nav');
  if (!app) {
    console.error('Navigation element not found');
    return;
  }

  const button = app.querySelector('.js-nav-btn');

  if (!button || !nav) {
    console.error('Required navigation components are missing');
    return;
  }

  button.addEventListener('click', function () {
    app.classList.toggle('is-nav');
  });
};

// Check for HMR (Hot Module Replacement)
if (import.meta.webpackHot) {
  import.meta.webpackHot.accept(nav);
}
