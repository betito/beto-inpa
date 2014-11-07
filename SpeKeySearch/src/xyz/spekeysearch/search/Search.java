package xyz.spekeysearch.search;

import java.sql.ResultSet;
import java.sql.SQLException;

import xyz.spekeysearch.control.DBAction;

public class Search {

	private String query = "";
	private String keys[] = null;
	private DBAction conn = null;
	private String Database = "";

	public Search() {
		super();
	}

	public Search(String db) {

		this.Database = db;
		this.conn = new DBAction(this.Database);
	}

	public Search(String db, String qry) {

		this.Database = db;
		this.conn = new DBAction(this.Database);
		this.query = qry;
		if (!(this.query.trim().equals(""))) {
			keys = qry.split("\\s+");
		}
	}

	public SearchResult go() {

		SearchResult searchResult = new SearchResult();
		
		if (this.conn == null) {
			this.conn = new DBAction(this.Database);
		}

		try {

			for (String k : this.keys) {

				String command = "select * from __docfreq where term like \"" + k + "\"";
				System.out.println(command);
				ResultSet rs = this.conn.doSelect(command);
				System.out.println("# " + k);
				while (rs.next()) {
					String term = rs.getString("term");
					String doc = rs.getString("doc");
					Integer freq = rs.getInt("freq");

					// adicionar esse resultado ao SearchResult

					System.out.println("\t-> " + doc + "\t= "
							+ freq.toString());
					
					
					

				}
			}

		} catch (SQLException e) {
			e.printStackTrace();
		}

		return null;
	}

}








