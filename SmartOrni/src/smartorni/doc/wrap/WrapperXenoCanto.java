package smartorni.doc.wrap;

import java.util.ArrayList;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

import smartorni.doc.models.DataCraw;
import smartorni.doc.utils.methodsUtil;

public class WrapperXenoCanto {

	private ArrayList<DataCraw> dataCraw = null;
	private StringBuilder htmlData = null;

	public WrapperXenoCanto(StringBuilder htmldata) {
		super();
		setHtmlData(htmldata);
	}

	public WrapperXenoCanto(ArrayList<DataCraw> dataCraw) {
		super();
		this.dataCraw = dataCraw;
	}

	public WrapperXenoCanto(ArrayList<DataCraw> dataCraw, StringBuilder htmlData) {
		super();
		this.dataCraw = dataCraw;
		this.htmlData = htmlData;
	}

	public ArrayList<DataCraw> getDataCraw() {
		return dataCraw;
	}

	public void setDataCraw(ArrayList<DataCraw> dataCraw) {
		this.dataCraw = dataCraw;
	}

	public StringBuilder getHtmlData() {
		return htmlData;
	}

	public void setHtmlData(StringBuilder htmlData) {
		this.htmlData = htmlData;
	}

	public void extractData() {

		String cleaninput = methodsUtil.clearString(this.getHtmlData()
				.toString());

		// System.out.println(cleaninput);

		String regex = "(<tr\\s*>\\s*<td>\\s*<div class='xc-button-audio'>.+?</tr>)";
		Pattern pattern = Pattern.compile(regex);
		Matcher matcher = pattern.matcher(cleaninput);

		if (this.dataCraw == null) {
			this.dataCraw = new ArrayList<DataCraw>();
		}

		for (int c = 0; matcher.find(); c++) {
			System.out.printf("%5d\t:: %s\n", c, matcher.group(1));

			String line = matcher.group(1);
			Pattern plink = Pattern.compile("data-xc-filepath='(.+?mp3)'");
			Pattern pcommon = Pattern
					.compile("span class='common-name'><a href='/species/.*'>(.+?)</a></span>");
			Pattern pscientific = Pattern
					.compile("<span class='scientific-name'>(.+?)</span>");

			DataCraw dcraw = new DataCraw();
			dcraw.setLink(getData(line, plink));
			dcraw.setCommonName(getData(line, pcommon));
			dcraw.setScientificName(getData(line, pscientific));

			addDataCraw(dcraw);
		}
		
		printDataCraw();

	}

	private void addDataCraw(DataCraw dcraw) {
		this.dataCraw.add(dcraw);
	}

	private String getData(String line, Pattern ptn) {
		Matcher m = ptn.matcher(line);
		if (m.find()) {
			return m.group(1);
		}

		return null;

	}
	
	public void printDataCraw (){
		
		for (int w = 0; w < this.dataCraw.size(); w++){
			DataCraw dtmp = this.dataCraw.get(w);
			dtmp.printAll();
		}
		
	}
	

}
