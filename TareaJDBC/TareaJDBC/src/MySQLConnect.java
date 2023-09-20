import com.mysql.jdbc.Connection;
import java.sql.Statement;
import java.sql.ResultSet;
import java.sql.*;
import java.util.logging.Level;
import java.util.logging.Logger;


public class MySQLConnect {
    
    public static void main (String [] args) {
    
    String nombre_usuario = "root";
    String password = "123456";
    String url = "jdbc:mysql://localhost:3306/prueba"; 
    
    Connection conecta;
    Statement st;
    ResultSet rs;
    
        try {
            Class.forName("com.mysql.jdbc.Driver");
        } catch (ClassNotFoundException ex) {
            Logger.getLogger(MySQLConnect.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        try {
          conecta = (Connection)DriverManager.getConnection(url, nombre_usuario, password);
          st = conecta.createStatement();
          st.executeLargeUpdate("INSERT INTO alumno VALUES(null, 'Jesus Manriquez', '123456')");
          rs = st.executeQuery("Select * FROM alumno");
          rs.next();
          do {
              System.out.println(rs.getString("id") + " Nombre: " + rs.getString("nombre_alumno") + " Correo: " + rs.getString("correo_alumno") + " Contraseña: " + rs.getString("password"));
          } while(rs.next());
        } catch (SQLException ex){
            Logger.getLogger(MySQLConnect.class.getName()).log(Level.SEVERE, null, ex);
        }
        
    }
}
