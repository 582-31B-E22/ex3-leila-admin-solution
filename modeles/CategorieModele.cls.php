<?php
class CategorieModele extends AccesBd
{
    public function ajouter($categorie)
    {
        extract($categorie);
        $this->creer("INSERT INTO categorie VALUES (0, ?, ?)", [$cat_nom, $cat_type]);
    }

    public function tout()
    {
        return $this->lireTout("SELECT * FROM categorie ORDER BY cat_id ASC");
    }
}