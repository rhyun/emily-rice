import Glide from '@glidejs/glide';

export const glide = async (err) => {
  if (err) {
    console.error(err);
  }

  new Glide('.js-glide--1', {
    autoplay: 5000,
  }).mount();

  new Glide('.js-glide--2', {
    autoplay: 5000,
  }).mount();

  new Glide('.js-glide--3', {
    autoplay: 5000,
  }).mount();
};

import.meta.webpackHot?.accept(glide);
