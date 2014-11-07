package xyz.spekeysearch.ranking;

import xyz.spekeysearch.model.RankedDocs;
import xyz.spekeysearch.search.SearchResult;

public interface IRanking {
	
	public RankedDocs ranking (SearchResult searchres);
	
}
