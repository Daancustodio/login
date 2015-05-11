<?php

namespace fanap\login\app\view;
namespace fanap\login\app\view;

require_once dirname(__FILE__) . '/../../AutoLoader.php';

use fanap\login\AutoLoad;
use fanap\login\app\model\domain\entidades\User;
AutoLoad::Register();

/**
 * Description of ViewAccess
 *
 * @author Daniel
 */
class ViewAccess {
    
    public static function CriarTabelaAprovacoes(User $userLoged, $arrayOfUsers){
        if($userLoged->getTipo() == 3){
            $thead = '<table border ="1">
                    <caption>Controle de aprocação</caption>
                    <thead>
                        <tr>
                            <th>Login</th>
                            <th>Nome</th>
                            <th>Aprovar</th>
                            <th>Aprovar Gerente</th>
                            <th>Aprovar Adm</th>
                        </tr>
                    </thead>
                <tbody>';
            
            $body = "";
            foreach ($arrayOfUsers as $user) {
                $body = $body . '<tr>
			<td>' .  $user["login"]  . '</td>
			<td>' .  $user["nome"]  . '</td>
			<td>Aprovar</td>
			<td>Aprovar</td>
			<td>Aprovar</td>
		</tr>
                ';
            }
            
            return $thead . $body . '</tbody></table>';
            
        }elseif ($userLoged->getTipo() == 2) {
            $thead = '<table border ="1">
                    <caption>Controle de aprocação</caption>
                    <thead>
                        <tr>
                            <th>Login</th>
                            <th>Nome</th>
                            <th>Aprovar</th>                                                      
                        </tr>
                    </thead>
                <tbody>';
            $body = "";
            foreach ($arrayOfUsers as $user) {
                $body = $body . '<tr>
			<td>' .  $user["login"]  . '</td>
			<td>' .  $user["nome"]  . '</td>
			<td>Aprovar</td>			
		</tr>
                ';
            }
            
            return $thead . $body . '</tbody></table>';            
        }elseif ($userLoged->getTipo() == 1) {            
            $thead = '<table border ="1">
                    <caption>Controle de aprocação</caption>
                    <thead>
                        <tr>
                            <th>Login</th>
                            <th>Nome</th>                                                                              
                        </tr>
                    </thead>
                <tbody>';
            
             $body = "";
            foreach ($arrayOfUsers as $user) {
                $body = $body . '<tr>
			<td>' .  $user["login"]  . '</td>
			<td>' .  $user["nome"]  . '</td>
			<td>Aprovar</td>			
		</tr>
                ';
            }            
            return $thead . $body . '</tbody></table>';        
             
        }
    }    
    
   
}