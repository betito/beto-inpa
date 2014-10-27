package xyz.spekeysearch.index;

import java.sql.Connection;
import java.sql.DatabaseMetaData;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.ResultSetMetaData;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.Hashtable;

public class Indexer {

	private String Database = "";
	ArrayList<String> listOfPubTables = null;

	public Indexer() {
		super();
	}

	public Indexer(String database) {
		super();
		Database = database;
	}

	public String getDatabase() {
		return Database;
	}

	public void setPubTables(String pubTable) {
		checkListPub();

		listOfPubTables.add(pubTable);

	}

	public void setPubTables(String[] listpubtab) {
		checkListPub();

		for (int i = 0; i < listpubtab.length; i++) {
			this.listOfPubTables.add(listpubtab[i]);
		}

	}

	public void setPubTables(ArrayList<String> listpubtab) {
		checkListPub();
		for (int i = 0; i < listpubtab.size(); i++) {
			this.listOfPubTables.add(listpubtab.get(i));
		}

	}

	public void setDatabase(String database) {
		Database = database;
	}

	public boolean start() {

		if (this.getDatabase().equals("")) {
			System.err.println("No Database defined!\nSet DB.");
			return false;
		}

		CreateInvertedList();

		return true;
	}

	private void checkListPub() {
		if (this.listOfPubTables == null) {
			listOfPubTables = new ArrayList<String>();
		}
	}

	private boolean CreateInvertedList() {

		Statement st = null;
		ResultSet rs = null;
		Connection con = null;
		DatabaseMetaData dbm = null;
		ArrayList<String> listOfTables = new ArrayList<String>();

		try {
			System.out.println("Listing all table name in Database!");
			con = connecDB();
			st = connectDBAndCreateStatement();

			rs = st.executeQuery("SELECT VERSION()");

			dbm = con.getMetaData();
			String[] types = { "TABLE" };
			rs = dbm.getTables(null, null, "%", types);
			System.out.println("Table name:");
			while (rs.next()) {
				listOfTables.add(rs.getString("TABLE_NAME"));
			}

			// delete tables not publishable
			listOfTables = deleteNotPublishableTables(listOfTables);

			// Process the content of each publishable table

			for (int i = 0; i < listOfTables.size(); i++) {
				System.out.println("TABLE ::\t" + listOfTables.get(i)
						+ "\n=============================");

				rs = st.executeQuery("SELECT * FROM " + listOfTables.get(i));
				// get columns names
				ResultSetMetaData metaData = rs.getMetaData();
				int count = metaData.getColumnCount(); // number of column
				String columnName[] = new String[count];

				for (int j = 1; j <= count; j++) {
					columnName[j - 1] = metaData.getColumnLabel(j);
					System.out.println(columnName[j - 1]);
				}

				// parse all registers and insert them into the inverted list

				CreateInvertedTables();

				int totbuffer = 0;
				TermFreq docFreq = new TermFreq();
				while (rs.next()) {
					for (int j = 0; j < columnName.length; j++) {
						System.out.println(columnName[j] + " --> "
								+ rs.getString(j + 1));
						String docname = this.listOfPubTables.get(i) + "__"
								+ columnName[j];
						if (!(rs.getString(j + 1).isEmpty())) {
							String[] data = rs.getString(j + 1).toLowerCase()
									.split("\\s+");

							for (int g = 0; g < data.length; g++) {
								docFreq.insertData(docname, data[g]);
							}
						}

						if (totbuffer == 1000) {

							// insert db

							totbuffer = 0;
						}

					}

					if (totbuffer > 0) {
						// inser o restante do databuffer

					}
					System.out.println("...");
				}

				System.out.println("....");

			}

			con.close();

		} catch (SQLException ex) {
			System.err.println(ex.getMessage());
			System.err.println(ex.getSQLState());
			System.err.println(ex.getCause());
		}

		return true;

	}

	private void CreateInvertedTables() {

		Statement st = connectDBAndCreateStatement();

		try {
			System.out.print("Creating inverted index...");
			ResultSet rs = st
					.executeQuery("CREATE TABLE IF NOT EXISTS __docfreq ( "
							+ " term varchar(30) primary key not null, "
							+ " doc varchar(30), int freq);");
			System.out.println("...DONE!");
		} catch (SQLException e) {
			e.printStackTrace();
		}

	}

	private ArrayList<String> deleteNotPublishableTables(
			ArrayList<String> listTables) {

		Hashtable<String, String> listAllTables = new Hashtable<String, String>();
		ArrayList<String> listOutput = new ArrayList<String>();

		for (int j = 0; j < this.listOfPubTables.size(); j++) {
			listAllTables.put(this.listOfPubTables.get(j), "");
		}

		for (int j = 0; j < listTables.size(); j++) {

			if (listAllTables.containsKey(listTables.get(j))) {
				listOutput.add(listTables.get(j));
			}
		}

		return listOutput;

	}

	private Statement connectDBAndCreateStatement() {

		Connection con = null;
		Statement st = null;
		String url = "jdbc:mysql://localhost:3306/" + this.Database;
		String user = "root";
		String password = "adivinha";

		try {
			con = DriverManager.getConnection(url, user, password);
			st = con.createStatement();

		} catch (SQLException ex) {
			// Logger lgr = Logger.getLogger(Version.class.getName());
			// lgr.log(Level.SEVERE, ex.getMessage(), ex);
			System.err.println(ex.getMessage());
			System.err.println(ex.getSQLState());
			System.err.println(ex.getCause());

		}

		return st;
	}

	private Connection connecDB() {

		Connection con = null;
		String url = "jdbc:mysql://localhost:3306/" + this.Database;
		String user = "root";
		String password = "adivinha";

		try {
			con = DriverManager.getConnection(url, user, password);

		} catch (SQLException ex) {
			// Logger lgr = Logger.getLogger(Version.class.getName());
			// lgr.log(Level.SEVERE, ex.getMessage(), ex);
			System.err.println(ex.getMessage());
			System.err.println(ex.getSQLState());
			System.err.println(ex.getCause());

		}

		return con;

	}

}
