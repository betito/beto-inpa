package xyz.spekeysearch.main;

import xyz.spekeysearch.index.Indexer;
import xyz.spekeysearch.search.Search;

public class SpeKeySearch {

	public static void main(String[] args) {

		// String pubtables [] = {"category", "resumo", "anunciante"};
		String pubtables[] = { "people", "info" };
		
		// INDEX
		
		Indexer indexer = new Indexer("testri");
		indexer.setPubTables(pubtables);
		indexer.start();
		
		// SEARCH
		Search search = new Search("testri", "roberto brown azul");
		search.go();

	}

}
