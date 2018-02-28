/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entidade.teste;

import entidade.usuario;
import org.hibernate.Session;
import org.hibernate.Transaction;
import util.sessaohibernate;


/**
 *
 * @author aluno
 */
public class testeHibernate {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
            Session sessao = sessaohibernate.nova();
            
            System.out.println("CRIANDO O USUARIO");
            usuario user = new usuario();
            user.setEmail("maryreis251@gmail.com");
            user.setNome("Mary");
            user.setSenha("abc");
            user.setSobrenome("Reis");
            
             System.out.println("SALVANDO USUARIO");
        Transaction tx = sessao.beginTransaction();
        sessao.save(user);
        tx.commit();
        System.out.println("USUARIO SALVO");
        sessao.close();
        System.out.println("SESSAO FECHADA");
                    
    }
    
}
