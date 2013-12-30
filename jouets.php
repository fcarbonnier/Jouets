h1 { /** gros titre */
  font-family: serif;         /* On se permet un changement de police : pas plus de deux par page, et à utiliser avec parcimonie (c'est le cas) */
  background: #0066CC none;   /* Fond du titre bleu (et sans image de fond) */
  color: white;               /*  Donc on utilise une police blanche pour que le texte soit visible */
  border: 3px dotted #9999FF; /* On encadre le titre d'un bleu clair de 3 pixels de largeur */
  padding: 0.3em;             /* Espacement intérieur non nul pour que le texte ne colle pas à la bordure du cadre */
  text-align: center;         /* Le titre doit être centré ! */
  letter-spacing: 0.3em;      /* On espace les caractères pour que ce soit joli :-) */
}
h2 { /** Les titres de paragraphes */
  text-decoration: underline; /* On souligne ces titres */
  font-variant : small-caps   /* Et on les met en majuscules (les minuscules sont remplacées par des petites majuscules) */
  color: #000077;             /* Texte de couleur bleu très foncé, presque noir (donc lisible) */
}
h3 { /** Les sous-titres (titres de niveau 3) */
  color: #2222CC;             /* Texte de couleur bleu, plus clair que le titre h2 */
  font-style: italic;         /* Texte en italique */
  text-indent: 1em;           /* Et indenté par rapport aux autres titres et paragraphes, pour montrer la hierarchie */
}
