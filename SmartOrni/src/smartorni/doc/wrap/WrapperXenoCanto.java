package smartorni.doc.wrap;

import java.util.ArrayList;

import smartorni.doc.models.DataCraw;

public class WrapperXenoCanto {

	private ArrayList<DataCraw> dataCraw = null;
	private StringBuilder htmlData = null;

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

	}

}
