export const listings = async (err) => {
  if (err) {
    console.error(err);
  }

  // code here
  // console.log('It Works!');

  // const app = document.getElementById('the-list');
  const app = document.querySelector('.js-listings');
  const tabButtons = app.querySelectorAll('.js-listings-nav__btn');
  const tabs = app.querySelectorAll('.js-listings-article');

  // Set first tab-btn as selected and unhide the first tab
  tabButtons[0].classList.toggle('is-selected', true);
  tabs[0].classList.toggle('is-hidden', false);

  tabButtons.forEach((tabButton) => {
    tabButton.addEventListener('click', (e) => {
      // Deselect all tab buttons...
      Array.from(e.currentTarget.parentNode.children).forEach((tabBtn) => {
        tabBtn.classList.toggle('is-selected', false);
      });
      // Then mark this one as selected
      e.currentTarget.classList.toggle('is-selected', true);
      e.preventDefault();
      e.stopPropagation();

      const selectedTabId = e.currentTarget.dataset.tabId;
      const selectedTab = document.getElementById(selectedTabId);

      // Hide all the tabs...
      Array.from(selectedTab.parentNode.children).forEach((tab) => {
        tab.classList.toggle('is-hidden', true);
      });
      // Unhide selected tab
      selectedTab.classList.toggle('is-hidden', false);
    });
  });
};

import.meta.webpackHot?.accept(listings);
