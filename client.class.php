<?php 
    class client{
        private $bdd = null;
        function __construct($bdd){
            $this->bdd = $bdd;
        }

        public function creation_compte($email, $nom, $prenom, $password, $adresse, $cp, $ville){
            $sql = "insert into client (email, nom, prenom, password, adresse, cp, ville) values (?,?,?,?,?,?,?);";
            $datas = [$email, $nom, $prenom, $password, $adresse, $cp, $ville];
            try{
            $result = $this->bdd->prepare($sql);
            $result->execute($datas);
            }catch(Exception $e){
                echo "<br><pre>Erreur dans la requête :" . $sql;
                print_r($datas);
                echo "</pre>";
            }
        }

        public function connexion($email, $password){
            $result = $this->bdd->prepare("select * from client where email=?;");
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
    }
?>