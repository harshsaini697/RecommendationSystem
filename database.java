import java.lang.NullPointerException;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

public class database {
	public Connection conn = null;
	 
	public database ()  {
		try {
			Class.forName("com.mysql.jdbc.Driver");
			String url = "jdbc:mysql:http://localhost:3306/crawler";
			conn = DriverManager.getConnection(url, "root", "harsh");
			System.out.println("conn built");
		} catch (SQLException e)
                {e.printStackTrace();}
                    catch( ClassNotFoundException e) {
                    System.out.println(e+"\nerror in conn");
		}
	}
 
	public ResultSet runSql(String sql) throws SQLException,NullPointerException {
		
                Statement sta = conn.createStatement();
		return sta.executeQuery(sql);
	}
 
	public boolean runSql2(String sql) throws SQLException,NullPointerException {
		Statement sta = null;
                sta = conn.createStatement();
		return sta.execute(sql);
	}
 
	//@Override
	protected void finalize() throws Throwable {
            try {
                if (conn != null || !conn.isClosed()) {
                    conn.close();
                }
            } finally {
                super.finalize();
            }
	}
}

