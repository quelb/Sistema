/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package util;



import com.mycompany.sistema.Endereco;
import com.mycompany.sistema.Usuario;
import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.cfg.AnnotationConfiguration;
import org.hibernate.cfg.Configuration;

/**
 *
 * @author aluno
 */
public class sessaohibernate {

   
    private static SessionFactory sf;
   
        static {
            Configuration cfg = new AnnotationConfiguration();
            cfg.configure("hibernate.cfg.xml");
            cfg.addAnnotatedClass(Usuario.class);
            cfg.addAnnotatedClass(Endereco.class);
            sf = cfg.buildSessionFactory();
        }
       
        public static Session nova() {
            Session session = sf.openSession();
            return session;

        }

}

