export const listings = async (err) => {
  if (err) {
    console.error(err);
  }

  const app = document.querySelector('.js-listings');
  const tabButtons = app.querySelectorAll('.js-listings-nav__btn');
  const tabs = app.querySelectorAll('.js-listings-article');
  const closeBtns = app.querySelectorAll('.js-tabs-close');
  
    // Set first tab-btn as selected and unhide the first tab
  tabButtons[0].classList.toggle('is-active', true);
  tabs[0].classList.toggle('is-active', true);

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
      document.querySelectorAll('.is-active').forEach(function(item){
        item.classList.remove('is-active'); // Remove the class
      });
    });
  });
};

import.meta.webpackHot?.accept(listings);
