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
		System.out.println(link);
		Link = link;
	}

	public String getCommonName() {
		return CommonName;
	}

	public void setCommonName(String commonName) {
		CommonName = commonName;
		System.out.println(this.CommonName);
		System.out.println(this.getCanonicalCommonName());
	}

	public String getScientificName() {
		return ScientificName;
	}

	public void setScientificName(String scientificName) {
		System.out.println(scientificName);
		ScientificName = scientificName;
	}
	
	public String getCanonicalCommonName (){
		String name = getCommonName().replaceAll("\\s+", "_");
		name = name.replaceAll("'", "_");
		System.out.println("Canonical NAME::\t" + name);
		return name;
	}
	
	public void printAll (){
		System.out.println("Link\t"+this.getLink());
		System.out.println("Common Name\t"+this.getCommonName());
		System.out.println("Scient Name\t"+this.getScientificName());
	}
	

}
