package xyz.spekeysearch.index;

import java.util.Hashtable;

public class TermFreq {

	private Hashtable<String, Hashtable<String, Integer>> DataOccur = null;

	public TermFreq() {
		super();
		init();
	}

	private void init() {

		if (this.DataOccur == null) {
			DataOccur = new Hashtable<String, Hashtable<String, Integer>>();
		}

	}

	public TermFreq(Hashtable<String, Hashtable<String, Integer>> dataOccur) {
		super();
		DataOccur = dataOccur;
	}

	public Hashtable<String, Hashtable<String, Integer>> getDataOccur() {
		return DataOccur;
	}

	public void setDataOccur(
			Hashtable<String, Hashtable<String, Integer>> dataOccur) {
		DataOccur = dataOccur;
	}

	public void insertData(String doc, String term) {

		init();
		
		if (DataOccur.containsKey(term)) {
			Hashtable<String, Integer> docs = this.DataOccur.get(term);
			if (docs.containsKey(doc)){
				Integer value = docs.get(doc);
				value++;
				docs.put(doc, value);
				DataOccur.put(term, docs);
			}else{
				Hashtable<String, Integer> tmpdoc = new Hashtable<String, Integer>();
				docs.put(doc, new Integer(1));
				DataOccur.put(term, docs);
			}
		} else {
			Hashtable<String, Integer> docs = new Hashtable<String, Integer>();
			docs.put(doc, new Integer(1));
			DataOccur.put(term, docs);
		}

	}

	public int getFreq(String doc, String term) {

		Hashtable<String, Integer> tfs = this.DataOccur.get(term);

		return (tfs.get(doc)).intValue();

	}

}
