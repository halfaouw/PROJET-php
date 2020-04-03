CREATE TABLE inscrits(
  nom TEXT NOT NULL,
  prenom TEXT NOT NULL,
  email TEXT NOT NULL UNIQUE PRIMARY KEY,
  mdp TEXT NOT NULL UNIQUE
);

CREATE TABLE articles(
  type TEXT ,
  nom TEXT NOT NULL,
  prix INTEGER,
  def TEXT NOT NULL,
);

CREATE TABLE panier(
  email INTEGER,
  referenceP INTEGER,
  nbArticles INTEGER,
  total FLOAT,
  FOREIGN KEY(email) REFERENCES inscrits(email)
);