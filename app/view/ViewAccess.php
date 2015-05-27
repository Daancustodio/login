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
    public static function GetHeader(){
        $header = '
        <!DOCTYPE html>
        <html lang="pt-br">
            <head>
                <meta charset="UTF-8">
                <title>Controle de Aprovação</title>
        	<link rel="stylesheet" href="../css/Styles.css" >
        	<script src="../js/jquery-2.1.4.min.js"></script>
            <style type="text/css">
            html{
            background-color: #DBFFFF;
            }
            </style>
            </head>
            <body>
        <div class="form" >';        
        return $header;
    }
    public static function CriarTabelaAprovacoes(User $userLoged, $arrayOfUsers){
        if($userLoged->getTipo() == 3){
            $thead = '<table>
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
			<td style="text-align: center"><a href="?action=aprovar&id=' . $user["id"] . '">Aprovar</a></td>
			<td style="text-align: center"><a href="?action=aprovarGerente&id=' . $user["id"] . '">Aprovar</a></td>
			<td style="text-align: center"><a href="?action=aprovarAdm&id=' . $user["id"] . '">Aprovar</a></td>
		</tr>
                ';
            }
            
            return $thead . $body . '</tbody></table>';
            
        }elseif ($userLoged->getTipo() == 2) {
            $thead = '<table>
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
			<td style="text-align: center"><a href="?action=aprovar&id=' . $user["id"] . '">Aprovar</a></td>			
		</tr>
                ';
            }
            
            return $thead . $body . '</tbody></table>';            
        }elseif ($userLoged->getTipo() == 1) {            
            $thead = '<table>
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
		</tr>
                ';
            }            
            return $thead . $body . '</tbody></table>';        
             
        }
    } 
    
    public static function GetFooter(){
        $footer ='</div>                	
                </body>
                </html>';
                return $footer;
    }   
    
   
}
