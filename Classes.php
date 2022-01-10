<?php
require_once('dbaccess.php');

class Produit
{
    //Attributs   //Access modifiers   //Droits d'accèes
    private  $_reference;
    private  $_description;
    private  $_quantiteStock;
    private  $_prixAchat;
    private  $_prixVente;
    private $_categorie;
    private  $_dba; //Connection à la base de données

    //Constructeur   //Surcharge = Overloading
    public function __construct()
    {   //implicite explicite

    }

    //Methodes   //Interfaces
    //Setters and getters
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

    public function delete()
    {
        $_dba = new Dbaccess();
        $_dba->query("delete from produit where reference='" . $this->_reference . "'");
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
        $_dba->query("Select * from produit");
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
    //Attributs   //Access modifiers   //Droits d'accèes
    private  $_num;
    private  $_nom;
    private  $_prenom;
    private  $_adresse;
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

    public function delete()
    {
        $_dba = new Dbaccess();
        $_dba->query("delete from client where id='" . $this->_num . "'");
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

class Order
{
    //Attributs   //Access modifiers   //Droits d'accèes
    private  $_num;
    private  $_deliveryAddress;
    private  $_dateO;
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

    public function getDeliveryAddress()
    {
        return $this->_deliveryAddress;
    }

    public function setDeliveryAddress($deliveryAddress)
    {
        $this->_deliveryAddress = $deliveryAddress;
    }


    public function getDateO()
    {
        return $this->_dateO;
    }

    public function setDateO($dateO)
    {
        $this->_dateO = $dateO;
    }

    public function getIdClient()
    {
        return $this->_idClient;
    }

    public function setIdCient($idClient)
    {
        $this->_idClient = $idClient;
    }

    public function save()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("insert into orderinfo values('" . $this->_num . "',
                                                '" . $this->_deliveryAddress . "',
                                                '" . $this->_dateO . "',
                                                '"  . $this->_idClient . "')");
        $_dba->execute();
        return 0;
    }

    public function delete()
    {
        $_dba = new Dbaccess();
        $_dba->query("delete from client where id='" . $this->_id . "'");
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
        $_dba->query("Select * from orderinfo");
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

class OrderProduct
{

    private  $_reference;
    private  $_num;
    private  $_quantity;

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

    public function getReference()
    {
        return $this->_reference;
    }

    public function setReference($reference)
    {
        $this->_reference = $reference;
    }


    public function getDateO()
    {
        return $this->_dateO;
    }

    public function setDateO($dateO)
    {
        $this->_dateO = $dateO;
    }

    public function getIdClient()
    {
        return $this->_idClient;
    }

    public function setIdCient($idClient)
    {
        $this->_idClient = $idClient;
    }

    public function save()
    {
        $_dba = new Dbaccess(); //instanciation
        $_dba->query("insert into order-product values('" . $this->_reference . "',
                                                '" . $this->_num . "',
                                                '"  . $this->_quantity . "')");
        $_dba->execute();
        return 0;
    }

    public function delete()
    {
        $_dba = new Dbaccess();
        $_dba->query("delete from client where id='" . $this->_id . "'");
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
        $_dba->query("Select * from order-product where num='" . $this->_num . "'");
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
