package xyz.spekeysearch.main;

import xyz.spekeysearch.index.Indexer;

public class SpeKeySearch {

	public static void main(String[] args) {

		// String pubtables [] = {"category", "resumo", "anunciante"};
		String pubtables[] = { "anunciante" };
		Indexer indexer = new Indexer("sabesetemdb");
		indexer.setPubTables(pubtables);
		indexer.start();

	}

}