package xyz.spekeysearch.search;

import java.util.ArrayList;
import java.util.Enumeration;
import java.util.Hashtable;

public class SearchResult {

	private Hashtable<String, Hashtable<String, Integer>> Result = null;

	public SearchResult() {
		super();

		this.Result = new Hashtable<String, Hashtable<String, Integer>>();
	}

	public SearchResult(Hashtable<String, Hashtable<String, Integer>> result) {
		super();
		Result = result;
	}

	public void add(String term, String doc, Integer freq) {

		Hashtable<String, Integer> tmp = getDocFreq(term);

		if (tmp == null) {
			tmp = new Hashtable<String, Integer>();
			tmp.put(doc, freq);
			this.Result.put(term, tmp);
		} else {

			tmp.put(doc, freq);
			this.Result.put(term, tmp);
		}

	}

	public void printResult() {

		if (this.Result != null) {

			for (Enumeration<String> eni = this.Result.keys(); eni
					.hasMoreElements();) {
				String term = eni.nextElement();

				Hashtable<String, Integer> listdocs = this.Result.get(term);

				System.out.println("# " + term);

				for (Enumeration<String> enj = listdocs.keys(); enj
						.hasMoreElements();) {

					String doc = enj.nextElement();
					Integer freq = listdocs.get(doc);

					System.out
							.println("\t-> " + doc + "\t= " + freq.toString());

				}
			}

		} else {
			System.out.println("Result is Null...");
		}

	}

	private Hashtable<String, Integer> getDocFreq(String term) {

		return this.Result.get(term);

	}

	public ArrayList<String> getTerms() {

		ArrayList<String> output = new ArrayList<String>();

		for (Enumeration<String> en = this.Result.keys(); en.hasMoreElements();) {

			output.add(en.nextElement());

		}

		return output;
	}

	public Integer getFreq(String term, String doc) {

		return this.Result.get(term).get(doc);
	}

	public ArrayList<String> getDocs(String term) {
		
		ArrayList<String> output = new ArrayList<String>();

		for (Enumeration<String> en = this.Result.get(term).keys(); en.hasMoreElements();) {

			output.add(en.nextElement());

		}

		return output;

	}

}
