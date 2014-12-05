package xyz.spekeysearch.servlets;

import java.io.IOException;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import xyz.spekeysearch.methods.VectorModel;
import xyz.spekeysearch.model.RankedDocs;
import xyz.spekeysearch.search.Search;
import xyz.spekeysearch.search.SearchResult;

@WebServlet("/sks/search")
public class SearchService extends HttpServlet {

	/**
	 * 
	 */
	private static final long serialVersionUID = -8883653648160300228L;

	@Override
	protected void doGet(HttpServletRequest req, HttpServletResponse resp)
			throws ServletException, IOException {
		
		String db = "testri";
		String keywords = (String) req.getParameter("keywords");

		Search search = new Search(db, keywords);
		SearchResult searchres = search.go();

		// RANKING
		RankedDocs rankedDocs = new VectorModel().ranking(
				keywords.split("\\s+"), searchres);

	}

}
