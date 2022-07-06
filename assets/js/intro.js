import 'intro.js/introjs.css';

import introJs from 'intro.js';

introJs().setOption({
  steps: [{
    intro: "Bienvenue pour cette premiere connexion sur le site !"
  },
  {
    element: document.querySelector(".intro-step1"),
    intro: "Ceci est le bouton pour vous connecter a votre compte",
  }
  ]

}) .start();