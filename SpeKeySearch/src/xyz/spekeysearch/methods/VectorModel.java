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
		
		// compuiting the weigth for query
		
		// query
		for (String k : queryKeys){
			
			ArrayList<String> docs = searchres.getDocs(k);
			
			for (int i =0; i < docs.size(); i++){
				
				Integer freq = searchres.getFreq(k, docs.get(i));
				Float idf = searchres.getTermIdf(k);
				
				System.out.printf("QK (%s)\t: %s\t[%d]\t[%3g]\n", docs.get(i), k, freq, idf);
				
				Float weight = computingWeight (freq, idf);
				
				wQ.put(k, weight);
				
			}
			
		}
		
		// collection
//		for (String k : queryKeys){
//			
//			ArrayList<String> docs = searchres.getDocs(k);
//			
//			for (int i =0; i < docs.size(); i++){
//				
//				Integer freq = searchres.getFreq(k, docs.get(i));
//				Float idf = searchres.getTermIdf(k);
//				
//				System.out.printf("QK (%s)\t: %s\t[%d]\t[%3g]\n", docs.get(i), k, freq, idf);
//				
//				Float weight = computingWeight (freq, idf);
//				
//				wQ.put(k, weight);
//				
//			}
//			
//		}
//		
		
		
		
		return null;
	}

	private Float computingWeight(Integer freq, Float idf) {
		return new Float(freq * idf);
	}
}
