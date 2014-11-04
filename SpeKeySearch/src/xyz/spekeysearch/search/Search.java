package xyz.spekeysearch.search;

import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

import xyz.spekeysearch.control.ConnectDB;

public class Search {

	private String query = "";
	private String keys[] = null;
	private ConnectDB conn = null;

	public Search() {
		super();
	}

	public Search(String qry) {
		this.query = qry;
		if (!(this.query.trim().equals(""))) {
			keys = qry.split("\\s+");
		}
	}

	public SearchResult go() {

		if (this.conn == null) {
			this.conn = new ConnectDB("");
		}

		try {
			Statement st = this.conn.getConnection().createStatement();
			ResultSet rs = st.executeQuery("select * from __docfreq");
			while (rs.next()){
				String term = rs.getString("term");
				String doc = rs.getString("doc");
				Integer freq = rs.getInt("freq");
				
				//adicionar esse resultado ao SearchResult
				
			}

		} catch (SQLException e) {
			e.printStackTrace();
		}

		return null;
	}

}
