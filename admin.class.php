<?php 
    class admin{
        private $bdd = null;
        function __construct($bdd){
            $this->bdd = $bdd;
        }

        public function connexion($email, $password){
            $result = $this->bdd->prepare("select * from admin where identifiant=?;");
            $result->execute(array($email));
            $user = $result->fetch();
            $bddpassword = $user['password'];
            if(password_verify($password, $bddpassword)){
                return $user;
            }
            else{
                return false;
            }
        }

        public function show_client(){
            $result = $this->bdd->prepare("select * from client;");
            $result->execute();
            $resultat = $result->fetch();
            var_dump($resultat);
        }

        public function show_produit(){
            $result = $this->bdd->prepare("select * from produits;");
            $result->execute();
            $resultat = $result->fetch();
            var_dump($resultat);
        }

        public function show_commande(){
            $result = $this->bdd->prepare("select * from commande;");
            $result->execute();
            $resultat = $result->fetch();
            var_dump($resultat);
        }

        public function create_product($name, $price){
            $sql = "insert into produits (nom, prix) values (?,?);";
            $datas = [$name, $price];
            try{
            $result = $this->bdd->prepare($sql);
            $result->execute($datas);
            }catch(Exception $e){
                echo "<br><pre>Erreur dans la requête :" . $sql;
                print_r($datas);
                echo "</pre>";
            }
        }

        public function delete_product($name){
            $sql = "delete from produits where nom = ?;";
            $datas = [$name];
            try{
            $result = $this->bdd->prepare($sql);
            $result->execute($datas);
            }catch(Exception $e){
                echo "<br><pre>Erreur dans la requête :" . $sql;
                print_r($datas);
                echo "</pre>";
            }
        }

        public function update_product($newname, $newprice, $oldname){
            $sql = "update produits set nom = ?, prix = ? where nom = ?;";
            $datas = [$newname, $newprice, $oldname];
            try{
            $result = $this->bdd->prepare($sql);
            $result->execute($datas);
            }catch(Exception $e){
                echo "<br><pre>Erreur dans la requête :" . $sql;
                print_r($datas);
                echo "</pre>";
            }
        }

        public function liste_client(){
            $sql = "select * from client;";
            try{
            $result = $this->bdd->prepare($sql);
            $result->execute();
            }catch(Exception $e){
                echo "<br><pre>Erreur dans la requête :" . $sql;
                echo "</pre>";
            }
        }
    }
?>