<?php
require_once('dbaccess.php');

class Produit
{
    private  $_reference;
    private  $_description;
    private  $_quantiteStock;
    private  $_prixAchat;
    private  $_prixVente;
    private $_categorie;
    private  $_dba;


    public function __construct()
    {
    }

    public function getReference()
    {
        return $this->_reference;
    }

    public function setReference($reference)
    {
        $this->_reference = $reference;
    }

    public function getDescription()
    {
        return $this->_description;
    }

    public function setDescription($description)
    {
        $this->_description = $description;
    }

    public function getQuantiteStock()
    {
        return $this->_quantiteStock;
    }

    public function setQuantiteStock($quantiteStock)
    {
        $this->_quantiteStock = $quantiteStock;
    }

    public function getPrixAchat()
    {
        return $this->_prixAchat;
    }

    public function setPrixAchat($prixAchat)
    {
        $this->_prixAchat = $prixAchat;
    }

    public function getCategorie()
    {
        return $this->_categorie;
    }

    public function setCategorie($categorie)
    {
        $this->_categorie = $categorie;
    }

    public function getPrixVente()
    {
        return $this->_prixUnitaire;
    }

    public function setPrixVente($prixVente)
    {
        $this->_prixVente = $prixVente;
    }

    public function enregistrer()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("insert into produit values('" . $this->_reference . "',
                                                '" . $this->_description . "',
                                                "  . $this->_quantiteStock . ",
                                                "  . $this->_prixAchat . ",
                                                "  . $this->_prixVente . ",
                                                '"  . $this->_categorie . "')");
        $_dba->execute();
        return 0;
    }

    public function supprimer()
    {
        $_dba = new Dbaccess();
        $_dba->query("delete from produit where reference='" . $this->_reference . "'");
        $_dba->execute();
        return 0;
    }

    public function augmenterStock()
    {
        $_dba = new Dbaccess($qte); //instanciation
        $_dba->query("update produit set quantite_stock = quantite_stock + " . $qte . "
                                    where reference = '"  . $this->_reference . "'");
        $_dba->execute();
        return 0;
    }

    public function getAll()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("Select p.*, c.categorie as nom_categorie  
        from produit p INNER JOIN categorie c on c.num = p.categorie");
        return $_dba->resultSet();
    }

    public function getOne()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("Select * from produit where email='" . $this->_reference . "'");
        return $_dba->single();
    }


    public function count()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("Select count(*) as nbr from produit");
        return $_dba->rowCount();
    }
};

class Client
{

    private  $_num;
    private  $_nom;
    private  $_prenom;
    private  $_adresse;
    private  $_tel;
    private  $_email;
    private  $_dba;

    public function getNum()
    {
        return $this->_num;
    }

    public function setNum($num)
    {
        $this->_num = $num;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }


    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }


    public function getAdresse()
    {
        return $this->_address;
    }

    public function setAdresse($adresse)
    {
        $this->_adresse = $adresse;
    }

    public function getTel()
    {
        return $this->_tel;
    }

    public function setTel($tel)
    {
        $this->_tel = $tel;
    }

    public function getEmail()
    {
        return $this->_email;
    }

    public function setEmail($email)
    {
        $this->_email = $email;
    }



    public function enregistrer()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("insert into client values('" . $this->_num . "',
                                                '" . $this->_nom . "',
                                                '"  . $this->_prenom . "',
                                                '"  . $this->_adresse . "',
                                                '"  . $this->_tel . "',
                                                '"  . $this->_email . "')");
        $_dba->execute();
        return 0;
    }

    public function supprimer()
    {
        $_dba = new Dbaccess();
        $_dba->query("delete from client where num='" . $this->_num . "'");
        $_dba->execute();
        return 0;
    }

    public function update()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("update produit set reference = '" . $this->_reference . "',
                                                    libelle = '" . $this->_libele . "',
                                                    quantite_stock = "  . $this->_quantiteStock . ",
                                                    prix_achat = "  . $this->_prixAchat . ",
                                                    prix_unitaire = "  . $this->_prixUnitaire . ",
                                                    prix_vente = "  . $this->_prixVente . "
                                                    where reference = '"  . $this->_reference . "'");
        $_dba->execute();
        return 0;
    }

    public function getAll()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("Select * from client");
        return $_dba->resultSet();
    }

    public function getOne()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("Select * from client where id='" . $this->_num . "'");
        return $_dba->single();
    }


    public function count()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("Select count(*) as nbr from client");
        return $_dba->rowCount();
    }
};

class Fournisseur
{
    //Attributs   //Access modifiers   //Droits d'accèes
    private  $_num;
    private  $_nom;
    private  $_adresse;
    private  $_specialite;
    private  $_tel;
    private  $_email;
    private  $_dba;

    public function __construct()
    {
    }

    public function getNum()
    {
        return $this->_num;
    }

    public function setNum($num)
    {
        $this->_num = $num;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }


    public function setSpecialite($specialite)
    {
        $this->_specialite = $specialite;
    }

    public function getSpecialite()
    {
        return $this->_specialte;
    }


    public function getAdresse()
    {
        return $this->_address;
    }

    public function setAdresse($adresse)
    {
        $this->_adresse = $adresse;
    }

    public function getTel()
    {
        return $this->_tel;
    }

    public function setTel($tel)
    {
        $this->_tel = $tel;
    }

    public function getEmail()
    {
        return $this->_email;
    }

    public function setEmail($email)
    {
        $this->_email = $email;
    }



    public function enregistrer()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("insert into fournisseur values('" . $this->_num . "',
                                                '" . $this->_nom . "',
                                                '"  . $this->_adresse . "',
                                                '"  . $this->_specialite . "',
                                                '"  . $this->_tel . "',
                                                '"  . $this->_email . "')");
        $_dba->execute();
        return 0;
    }

    public function supprimer()
    {
        $_dba = new Dbaccess();
        $_dba->query("delete from fournisseur where num='" . $this->_num . "'");
        $_dba->execute();
        return 0;
    }

    public function update()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("update produit set reference = '" . $this->_reference . "',
                                                    libelle = '" . $this->_libele . "',
                                                    quantite_stock = "  . $this->_quantiteStock . ",
                                                    prix_achat = "  . $this->_prixAchat . ",
                                                    prix_unitaire = "  . $this->_prixUnitaire . ",
                                                    prix_vente = "  . $this->_prixVente . "
                                                    where reference = '"  . $this->_reference . "'");
        $_dba->execute();
        return 0;
    }

    public function getAll()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("Select * from fournisseur");
        return $_dba->resultSet();
    }

    public function getOne()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("Select * from client where id='" . $this->_num . "'");
        return $_dba->single();
    }


    public function count()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("Select count(*) as nbr from client");
        return $_dba->rowCount();
    }
};

class Commande
{
    private  $_num;
    private  $_adresseLivraison;
    private  $_dateCommande;
    private  $_idClient;

    private  $_dba;

    public function __construct()
    {
    }

    public function getNum()
    {
        return $this->_num;
    }

    public function setNum($num)
    {
        $this->_num = $num;
    }

    public function getAdresseLivraison()
    {
        return $this->_adresseLivraison;
    }

    public function setAdresseLivraison($adresseLivraison)
    {
        $this->_adresseLivraison = $adresseLivraison;
    }


    public function getDateCommande()
    {
        return $this->_dateCommande;
    }

    public function setDateCommande($dateCommande)
    {
        $this->_dateCommande = $dateCommande;
    }

    public function getIdClient()
    {
        return $this->_idClient;
    }

    public function setIdClient($idClient)
    {
        $this->_idClient = $idClient;
    }

    public function enregistrer()
    {
        $_dba = new Dbaccess();
        $_dba->query("insert into commande values('" . $this->_num . "',
                                                '" . $this->_adresseLivraison . "',
                                                '" . $this->_dateCommande . "',
                                                '"  . $this->_idClient . "')");
        $_dba->execute();
        return 0;
    }

    public function supprimer()
    {
        $_dba = new Dbaccess();
        $_dba->query("delete from commande where num='" . $this->_num . "'");
        $_dba->execute();
        return 0;
    }

    public function getAll()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("Select c.*, l.nom as nom_client  from commande c 
        inner join client l on l.num = c.id_client");
        return $_dba->resultSet();
    }

    public function trouverCommande()
    {
        $_dba = new Dbaccess();
        $_dba->query("Select * from commande where num='" . $this->_num . "'");
        return $_dba->single();
    }
};

class Approvisionnement
{
    private  $_num;
    private  $_dateApp;
    private  $_idFournisseur;

    private  $_dba;

    public function __construct()
    {
    }

    public function getNum()
    {
        return $this->_num;
    }

    public function setNum($num)
    {
        $this->_num = $num;
    }

    public function getDateApp()
    {
        return $this->_dateApp;
    }

    public function setDateApp($dateApp)
    {
        $this->_dateApp = $dateApp;
    }

    public function getIdFournisseur()
    {
        return $this->_idFournisseur;
    }

    public function setIdFournisseur($idFournisseur)
    {
        $this->_idFournisseur = $idFournisseur;
    }

    public function enregistrer()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("insert into approvisionnement values('" . $this->_num . "',
                                                '" . $this->_dateApp . "',
                                                '"  . $this->_idFournisseur . "')");
        $_dba->execute();
        return 0;
    }

    public function supprimer()
    {
        $_dba = new Dbaccess();
        $_dba->query("delete from approvisionnement where num='" . $this->_num . "'");
        $_dba->execute();
        return 0;
    }


    public function getAll()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("Select a.*, l.nom as nom_fournisseur  from approvisionnement a
        inner join fournisseur l on l.num = a.id_fournisseur");
        return $_dba->resultSet();
    }

    public function trouverApprovisionnement()
    {
        $_dba = new Dbaccess();
        $_dba->query("Select * from approvisionnement where num='" . $this->_num . "'");
        return $_dba->single();
    }
};


class Categorie
{
    private  $_num;
    private  $_categorie;
    private  $_dba;

    public function getNum()
    {
        return $this->_num;
    }

    public function setNum($num)
    {
        $this->_num = $num;
    }

    public function getCategorie()
    {
        return $this->_categorie;
    }

    public function setCategorie($categorie)
    {
        $this->_categorie = $categorie;
    }

    public function enregistrer()
    {
        $_dba = new Dbaccess();
        $_dba->query("insert into categorie values( '','"  . $this->_categorie . "')");
        $_dba->execute();
        return 0;
    }

    public function supprimer()
    {
        $_dba = new Dbaccess();
        $_dba->query("delete from categorie where num='" . $this->_num . "'");
        $_dba->execute();
        return 0;
    }

    public function getAll()
    {
        $_dba = new Dbaccess();
        $_dba->query("Select * from categorie");
        return $_dba->resultSet();
    }
};

class CommandeProduit
{
    private  $_num;
    private  $_ref;
    private  $_quantite;

    private  $_dba;

    public function __construct()
    {
    }

    public function getNum()
    {
        return $this->_num;
    }

    public function setNum($num)
    {
        $this->_num = $num;
    }

    public function getRef()
    {
        return $this->_ref;
    }

    public function setRef($ref)
    {
        $this->_ref = $ref;
    }

    public function getQuantite()
    {
        return $this->_quantite;
    }

    public function setQuantite($quantite)
    {
        $this->_quantite = $quantite;
    }

    public function enregistrer()
    {
        $_dba = new Dbaccess();
        $_dba->query("insert into commande_produit values( '"  . $this->_num . "',
                                                            '"  . $this->_ref . "',
                                                            '"  . $this->_quantite . "')");
        $_dba->execute();
        return 0;
    }

    public function supprimer()
    {
        $_dba = new Dbaccess();
        $_dba->query("delete from commande_produit where ref='" . $this->_ref . "' and num='" . $this->_num . "'");
        $_dba->execute();
        return 0;
    }

    public function update()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("update produit set reference = '" . $this->_reference . "',
                                                    libelle = '" . $this->_libele . "',
                                                    quantite_stock = "  . $this->_quantiteStock . ",
                                                    prix_achat = "  . $this->_prixAchat . ",
                                                    prix_unitaire = "  . $this->_prixUnitaire . ",
                                                    prix_vente = "  . $this->_prixVente . "
                                                    where reference = '"  . $this->_reference . "'");
        $_dba->execute();
        return 0;
    }

    public function getAll()
    {
        $_dba = new Dbaccess();
        $_dba->query("Select * from commande_produit cp
                    inner join commande c on cp.num=c.num
                    inner join produit p on p.reference=cp.ref");
        return $_dba->resultSet();
    }

    public function getOne()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("Select * from client where id='" . $this->_id . "'");
        return $_dba->single();
    }


    public function count()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("Select count(*) as nbr from client");
        return $_dba->rowCount();
    }
};

class ApprovisionnementProduit
{
    private  $_num;
    private  $_ref;
    private  $_quantite;

    private  $_dba;

    public function __construct()
    {
    }

    public function getNum()
    {
        return $this->_num;
    }

    public function setNum($num)
    {
        $this->_num = $num;
    }

    public function getRef()
    {
        return $this->_ref;
    }

    public function setRef($ref)
    {
        $this->_ref = $ref;
    }

    public function getQuantite()
    {
        return $this->_quantite;
    }

    public function setQuantite($quantite)
    {
        $this->_quantite = $quantite;
    }

    public function enregistrer()
    {
        $_dba = new Dbaccess();
        $_dba->query("insert into approvisionnement_produit values( '"  . $this->_num . "',
                                                            '"  . $this->_ref . "',
                                                            '"  . $this->_quantite . "')");
        $_dba->execute();
        return 0;
    }

    public function supprimer()
    {
        $_dba = new Dbaccess();
        $_dba->query("delete from approvisionnement_produit where ref='" . $this->_ref . "' and num='" . $this->_num . "'");
        $_dba->execute();
        return 0;
    }

    public function getAll()
    {
        $_dba = new Dbaccess();
        $_dba->query("Select * from approvisionnement_produit cp
                    inner join approvisionnement a on cp.num=a.num
                    inner join produit p on p.reference=cp.ref");
        return $_dba->resultSet();
    }
};
