package xyz.spekeysearch.main;

import xyz.spekeysearch.methods.VectorModel;
import xyz.spekeysearch.model.RankedDocs;
import xyz.spekeysearch.search.Search;
import xyz.spekeysearch.search.SearchResult;

public class SpeKeySearch {

	public static void main(String[] args) {

		// String pubtables [] = {"category", "resumo", "anunciante"};
		String pubtables[] = { "people", "info" };
		String db = "testri";
		String query = "roberto brown azul martha";
		
		// INDEX
//		Indexer indexer = new Indexer("testri");
//		indexer.setPubTables(pubtables);
//		indexer.start();
		
		
		// SEARCH
		Search search = new Search( db, query );
		SearchResult searchres = search.go();
		
		// RANKING
		RankedDocs rankedDocs = new VectorModel().ranking(query.split("\\s+"), searchres);
		
	}

}
