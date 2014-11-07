package xyz.spekeysearch.model;

import java.util.Vector;

public class RankedDocs {

	Vector<String> Docs = null;

	public RankedDocs() {
		super();
	}

	public RankedDocs(Vector<String> docs) {
		super();
		Docs = docs;
	}

	public Vector<String> getDocs() {
		return Docs;
	}

	public void setDocs(Vector<String> docs) {
		Docs = docs;
	}

	public void addDoc(String doc) {
		this.Docs.add(doc);
	}

	public String getDoc(int pos) {
		return this.Docs.get(pos);
	}

	public String[] getDocsAsArray() {

		String output[] = new String[this.Docs.size()];

		output = (String[]) this.Docs.toArray();

		return output;
	}

}
