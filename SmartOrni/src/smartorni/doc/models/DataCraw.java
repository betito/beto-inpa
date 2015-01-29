package smartorni.doc.models;

public class DataCraw {

	private String Link;
	private String CommonName;
	private String ScientificName;

	public DataCraw() {
		super();
	}

	public DataCraw(String link, String commonName, String scientificName) {
		super();
		Link = link;
		CommonName = commonName;
		ScientificName = scientificName;
	}

	public String getLink() {
		return Link;
	}

	public void setLink(String link) {
		Link = link;
	}

	public String getCommonName() {
		return CommonName;
	}

	public void setCommonName(String commonName) {
		CommonName = commonName;
	}

	public String getScientificName() {
		return ScientificName;
	}

	public void setScientificName(String scientificName) {
		ScientificName = scientificName;
	}
	
	public String getCanonicalCommonName (){
		
		String name = getCanonicalCommonName().replaceAll("\\s+", "");
		
		return null;
	}
	
	public void printAll (){
		System.out.println("Link\t"+this.getLink());
		System.out.println("Common Name\t"+this.getCommonName());
		System.out.println("Scient Name\t"+this.getScientificName());
	}
	

}
