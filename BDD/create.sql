CREATE TABLE inscrits(
  id INTEGER PRIMARY KEY,
  nom TEXT NOT NULL,
  prenom TEXT NOT NULL,
  email TEXT NOT NULL UNIQUE,
  mdp TEXT NOT NULL UNIQUE
);

CREATE TABLE articles(
  type TEXT ,
  nom TEXT NOT NULL,
  prix INTEGER,
  def TEXT NOT NULL,
);

CREATE TABLE panier(
  id INTEGER,
  referenceP INTEGER,
  nbArticles INTEGER,
  total FLOAT,
  FOREIGN KEY(id) REFERENCES inscrits(id)
);
