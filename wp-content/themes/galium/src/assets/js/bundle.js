import $ from 'jquery';
import {
  tns
} from '../../../node_modules/tiny-slider/src/tiny-slider';
import offside from "offside-js";
import MicroModal from 'micromodal';
import Rellax from 'rellax';
import BadgerAccordion from 'badger-accordion';


import './components/docs';





// ACCORDION
const accordionDomNode = document.querySelector('.js-badger-accordion');

const accordion = new BadgerAccordion(accordionDomNode);


// RELAX PARALLAX



if (document.querySelector(".rellax")) {
  var rellax = new Rellax('.rellax', {
    speed: -2,
    center: false,
    // wrapper: '.rellax-wrp',
    round: true,
    vertical: true,
  });
}


// console.log(rellax);

// TINY SLIDER

if (document.querySelector(".doc-slider")) {
  var slider = tns({
    container: ".doc-slider",
    items: 4,
    gutter: 40,
    controls: true,
    controlsContainer: ".doc-slider__controls",
    nav: false,
    responsive: {
      "1280": {
        items: 4,
        controls: true
      },
      "980": {
        items: 3,
        controls: true
      },
      "763": {
        items: 2
      },
      "480": {
        items: 1
      },
      "0": {
        items: 1
      }
    }
  });
}


if (document.querySelector(".slider")) {
  var slider = tns({
    navContainer: ".slider-controls",
    navAsThumbnails: true,
    controls: false
  });
}



// OFFSIDE

var myOffside = offside(".offside-menu", {
  slidingElementsSelector: ".offside__container",
  buttonsSelector: ".offside__button, .offside__close",
  beforeOpen: function () {
    document.body.classList.add('offside-js--interact');
  },

  afterOpen: function () {
    document.body.classList.add('overflow-y');
  },
  beforeClose: function () {

  },
  afterClose: function () {
    document.body.classList.remove('offside-js--interact');
    document.body.classList.remove('overflow-y');
  },
});

var overlay = document.querySelector(".page-overlay");
overlay.addEventListener("click", myOffside.closeAll);


// TABS

window.onload = function () {
  // Variables
  var tabLinks = document.querySelectorAll(".tabs__link");
  var tabContents = document.querySelectorAll(".tabs__item");

  // Loop through the tab link
  for (var i = 0; i < tabLinks.length; i++) {
    tabLinks[i].addEventListener("click", function (e) {
      e.preventDefault();
      var id = this.hash.replace("#", "");

      // Loop through the tab content
      for (var j = 0; j < tabContents.length; j++) {
        var tabContent = tabContents[j];
        tabContent.classList.remove("is-visible");
        tabLinks[j].classList.remove("is-active");
        if (tabContent.id === id) {
          tabContent.classList.add("is-visible");
        }
      }

      this.classList.add("is-active");
    });
  }
};


// MICROMODAL
MicroModal.init();

// if(document.getElementById('modal')) {

//   document.addEventListener( 'wpcf7submit', function( event ) {
//     const modal = document.getElementById('modal');
//     modal.classList.remove('is-open');
//   }, false );
// }

// document.body.addEventListener('click', function(e){

// })