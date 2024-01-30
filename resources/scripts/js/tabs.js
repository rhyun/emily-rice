export const tabs = async (err) => {
  if (err) {
    console.error(err);
  }

  const isLaptop = window.matchMedia('(min-width: 1024px)');
  let app = document.querySelector('.js-tabs');
  let tabButtons = app.querySelectorAll('.js-tabs-nav__item');
  let tabs = app.querySelectorAll('.js-tabs-article');
  const closeBtns = app.querySelectorAll('.js-tabs-close');

  function activeTab(e) {
    // Check if the media query is true
    if (e.matches) {
      tabButtons[0].classList.toggle('is-active', true);
      tabs[0].classList.toggle('is-active', true);
    } else {
      tabButtons[0].classList.toggle('is-active', false);
      tabs[0].classList.toggle('is-active', false);
    }
  }

  // Register event listener
  // mobileMedia.addEventListener('change', handleTabletChange);

  // Initial check
  activeTab(isLaptop);

  tabButtons.forEach((tabButton) => {
    tabButton.addEventListener('click', (e) => {
      // Deselect all tab buttons...
      Array.from(e.currentTarget.parentNode.children).forEach((tabBtn) => {
        tabBtn.classList.toggle('is-active', false);
      });
      // Then mark this one as selected
      e.currentTarget.classList.toggle('is-active', true);

      const selectedTabId = e.currentTarget.dataset.tabId;
      const selectedTab = document.getElementById(selectedTabId);

      // Hide all the tabs...
      Array.from(selectedTab.parentNode.children).forEach((tab) => {
        tab.classList.toggle('is-active', false);
      });
      // Unhide selected tab
      selectedTab.classList.toggle('is-active', true);
    });
  });

  closeBtns.forEach((closeBtn) => {
    closeBtn.addEventListener('click', () => {
      document.querySelectorAll('.is-active').forEach(function (item) {
        item.classList.remove('is-active'); // Remove the class
      });
    });
  });
};

import.meta.webpackHot?.accept(tabs);
