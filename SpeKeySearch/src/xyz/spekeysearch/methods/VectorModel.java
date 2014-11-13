package xyz.spekeysearch.methods;

import java.util.ArrayList;
import java.util.Hashtable;

import xyz.spekeysearch.interfaces.IRanking;
import xyz.spekeysearch.model.RankedDocs;
import xyz.spekeysearch.search.SearchResult;

public class VectorModel implements IRanking {

	@Override
	public RankedDocs ranking(String [] queryKeys, SearchResult searchres) {
		
		
		
		Hashtable<String, Float> wQ = new Hashtable<String, Float>(queryKeys.length);
		
		// compuiting the wigth fot query
		
		for (String k : queryKeys){
			
			ArrayList<String> docs = searchres.getDocs(k);
			for (int i =0; i < docs.size(); i++){
				System.out.printf("QK\t: %s\t[%3g]", k, docs.get(i));
			}
			
		}
		
		
		
		
		return null;
	}
}
