package xyz.spekeysearch.control;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

public class DBAction {

	private Connection conn = null;
	private String Database = "";

	public DBAction(String db) {
		super();
		this.Database = db;
		connecDB();
	}

	private void connecDB() {

		String url = "jdbc:mysql://localhost:3306/" + this.Database;
		String user = "root";
		String password = "adivinha";

		try {
			this.conn = DriverManager.getConnection(url, user, password);

		} catch (SQLException ex) {
			// Logger lgr = Logger.getLogger(Version.class.getName());
			// lgr.log(Level.SEVERE, ex.getMessage(), ex);
			System.err.println(ex.getMessage());
			System.err.println(ex.getSQLState());
			System.err.println(ex.getCause());

		}

	}

	public Connection getConnection() {
		return this.conn;
	}

	public ResultSet doSelect(String command) {
		ResultSet rs = null;
		try {

			rs = this.conn.createStatement().executeQuery(command);

		} catch (SQLException e) {
			e.printStackTrace();
		}

		return rs;
	}

	public Statement doUpdate(String command) {

		return null;
	}

}
