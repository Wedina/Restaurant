<?php

class LoginController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
       
        /*
         * Méthode appelée en cas de requête HTTP GET
         *
         * L'argument $http est un objet permettant de faire des redirections etc.
         * L'argument $queryFields contient l'équivalent de $_GET en PHP natif.
         */
           // $userModel = new UserModel();
         
         

           

    }

    public function httpPostMethod(Http $http, array $formFields)
    {
          if ( empty($formFields['email'])) {
            throw new Exception("email empty");
        }

        if ( empty($formFields['password'])) {
            throw new Exception("password empty");
        }  


        $email = $formFields['email'];
        $password = $formFields['password'];

        $user = UserModel::getUserEmail($email);

         if (empty($user)) {
            return ['errorMessage' => "Email inconnu"];
        }

        // $passwordEncrypted = crypt($password, 'rl');

        if ($password != $user['password']) {
            return ['errorMessage' => "Mot passe incorrect"]; 
        } 

        $_SESSION['user_id'] = $user['id'];
        

        $http->redirectTo('');

            // $login = extract($formFields);

            // $userLogin = new UserModel();
          
            // $userLogin->getUserBypasswordAndEmail($email, $password);

            // var_dump($email);
            // var_dump($password);



       


        /*
         * Méthode appelée en cas de requête HTTP POST
         *
         * L'argument $http est un objet permettant de faire des redirections etc.
         * L'argument $formFields contient l'équivalent de $_POST en PHP natif.
         */
    }
}