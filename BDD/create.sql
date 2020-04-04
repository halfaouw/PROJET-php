CREATE TABLE inscrits(
  id  INTEGER,
  nom TEXT NOT NULL,
  prenom TEXT NOT NULL,
  email TEXT NOT NULL,
  mdp TEXT NOT NULL
);

CREATE TABLE articles(
  nom TEXT NOT NULL,
  complement TEXT,
  prix FLOAT NOT NULL,
  ref TEXT NOT NULL,
  categorie STRING NOT NULL,
  photo STRING
);

CREATE TABLE panier(
  email INTEGER,
  referenceP INTEGER,
  nbArticles INTEGER,
  total FLOAT,
  FOREIGN KEY(email) REFERENCES inscrits(email)
);
