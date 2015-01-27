package smartorni.doc.models;

public class DataCraw {

	private String Link;
	private String Name;

	public DataCraw(String link, String name) {
		super();
		Link = link;
		Name = name;
	}
	
	public DataCraw() {
		super();
	}
	
	public String getLink() {
		return Link;
	}

	public void setLink(String link) {
		Link = link;
	}

	public String getName() {
		return Name;
	}

	public void setName(String name) {
		Name = name;
	}

}
