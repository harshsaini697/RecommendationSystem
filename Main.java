//import java.lang.NullPointerException;                
import java.io.IOException;
		import java.sql.PreparedStatement;
		import java.sql.ResultSet;
		import java.sql.SQLException;
		import java.sql.Statement;
		import org.jsoup.Jsoup;
		import org.jsoup.nodes.Document;
		import org.jsoup.nodes.Element;
		import org.jsoup.select.Elements;
		 
public class Main {
	public static database db = new database();
	public static void main(String[] args) throws SQLException, IOException ,NullPointerException{
            // TODO Auto-generated method stub
             db.runSql2("DELETE Record;");
			   processPage("http://www.jiit.ac.in");
	}
		 
			public static void processPage(String URL) throws SQLException, IOException,NullPointerException
                        {
				//check if the given URL is already in database
                            /*try{*/
				String sql = "select * from Record where URL = '"+URL+"'";
				ResultSet rs = db.runSql(sql);
                            
				if(rs.next()){
		 
				}else{
					//store the URL to database to avoid parsing again
					sql = "INSERT INTO  `Crawler`.`Record` " + "(`URL`) VALUES " + "(?);";
					PreparedStatement stmt = db.conn.prepareStatement(sql, Statement.RETURN_GENERATED_KEYS);
					stmt.setString(1, URL);
					stmt.execute();
		 
					//get useful information
					Document doc = Jsoup.connect("http://www.jiit.ac.in/").get();
		 
					if(doc.text().contains("Jaypee")){
						System.out.println(URL);
					}
		 
					//get all links and recursively call the processPage method
					Elements questions = doc.select("a[href]");
					for(Element link: questions){
						if(link.attr("href").contains("jiit.ac.in"))
							processPage(link.attr("abs:href"));
					}
				}
			
                            /*}
                           catch(Exception e)
                            {
                                System.out.println("error"+e);
                            }*/
                        }
}


